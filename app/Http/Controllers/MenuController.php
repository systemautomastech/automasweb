<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * List menus
     */
    public function index()
    {
        $menus = Menu::all();
        return view('backend.menus.index', compact('menus'));
    }

    /**
     * Show form to create a menu
     */
    public function create()
    {
        return view('backend.menus.create');
    }

    /**
     * Store a new menu with optional nested items
     */
    public function store(StoreMenuRequest $request)
    {
        $data = $request->validated();

        $menu = DB::transaction(function () use ($data): Menu {
            $menu = Menu::create(['name' => $data['name']]);

            if (!empty($data['items'])) {
                $this->createItems($data['items'], $menu);
            }

            return $menu;
        });

        return response()->json($this->formatMenu($menu), 201);
    }

    /**
     * Show a menu with nested items tree
     */
    public function show(Menu $menu)
    {
        return response()->json($this->formatMenu($menu));
    }

    /**
     * Show edit form for a menu
     */
    public function edit(Menu $menu)
    {
        $formatted = $this->formatMenu($menu);
        return view('backend.menus.edit', ['menu' => $menu, 'formatted' => $formatted]);
    }

    /**
     * Update menu and its items (replaces existing items)
     */
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $data = $request->validated();

        DB::transaction(function () use ($data, $menu) {
            $menu->update(['name' => $data['name']]);

            // Remove old items and recreate
            $menu->allItems()->delete();

            if (!empty($data['items'])) {
                $this->createItems($data['items'], $menu);
            }
        });

        return response()->json($this->formatMenu($menu));
    }

    /**
     * Delete a menu and its items
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json(['deleted' => true]);
    }

    /**
     * Recursively create items
     */
    protected function createItems(array $items, Menu $menu, $parentId = null)
    {
        foreach ($items as $idx => $item) {
            $mi = MenuItem::create([
                'menu_id' => $menu->id,
                'parent_id' => $parentId,
                'title' => $item['title'] ?? 'Untitled',
                'url' => $item['url'] ?? null,
                'route' => $item['route'] ?? null,
                'route_params' => $item['route_params'] ?? null,
                'new_tab' => $item['new_tab'] ?? false,
                'icon' => $item['icon'] ?? null,
                'color' => $item['color'] ?? null,
                'bg_color' => $item['bg_color'] ?? null,
                'css_class' => $item['css_class'] ?? null,
                'order' => $item['order'] ?? $idx,
                'is_active' => $item['is_active'] ?? true,
            ]);

            if (!empty($item['children']) && is_array($item['children'])) {
                $this->createItems($item['children'], $menu, $mi->id);
            }
        }
    }

    /**
     * Format menu into nested tree structure
     */
    protected function formatMenu(Menu $menu)
    {
        $items = $menu->allItems()->get()->toArray();

        // Build tree
        $byId = [];
        foreach ($items as $it) {
            $it['children'] = [];
            $byId[$it['id']] = $it;
        }

        $tree = [];
        foreach ($byId as $id => $it) {
            if ($it['parent_id']) {
                $byId[$it['parent_id']]['children'][] = &$byId[$id];
            } else {
                $tree[] = &$byId[$id];
            }
        }

        return ['id' => $menu->id, 'name' => $menu->name, 'items' => $tree];
    }
}
