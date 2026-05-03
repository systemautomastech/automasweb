<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Top-level menu items (no parent)
     */
    public function items()
    {
        return $this->hasMany(MenuItem::class)->whereNull('parent_id')->orderBy('order');
    }

    /**
     * All menu items for this menu
     */
    public function allItems()
    {
        return $this->hasMany(MenuItem::class)->orderBy('order');
    }
}
