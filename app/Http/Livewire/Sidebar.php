<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $categories = Category::with('subcategories')->get();
        return view('livewire.sidebar', ['categories' => $categories]);
    }
}
