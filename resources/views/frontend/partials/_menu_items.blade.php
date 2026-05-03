@foreach($items as $item)
    @php
        $children = $item->children()->orderBy('order')->get();
        $hasChildren = $children->count();
        $attrs = $item->css_class ?? '';
        $style = '';
        if ($item->color) $style .= 'color:' . e($item->color) . ';';
        if ($item->bg_color) $style .= 'background:' . e($item->bg_color) . ';';
        $target = $item->new_tab ? ' target="_blank" rel="noopener noreferrer"' : '';
        $link = $item->getLink();
        $iconHtml = $item->icon ? '<i class="' . e($item->icon) . '"></i> ' : '';
    @endphp

    @php
        $attr = 'href="' . e($link) . '"';
        if ($target) $attr .= ' ' . $target;
        if ($style) $attr .= ' style="' . e($style) . '"';
    @endphp

    @if($hasChildren)
        <li class="listing-dropdown {{ $attrs }}">
            <a href="javascript:void(0);">
                <span>{!! $iconHtml !!}{{ $item->title }}</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>

            <ul>
                @include('frontend.partials._menu_items', ['items' => $children])
            </ul>
        </li>
    @else
        <li class="{{ $attrs }}">
            <a {!! $attr !!}>
                {!! $iconHtml !!}
                <span>{{ $item->title }}</span>
            </a>
        </li>
    @endif
@endforeach
