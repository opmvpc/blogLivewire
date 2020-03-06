<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Support\Collection;

class Blog extends Component
{
    /**
     * Liste des posts
     *
     * @var Post[]|Collection
     */
    public $posts;

    public function mount(): void
    {
        $this->posts = Post::get();
    }

    public function render(): View
    {
        return view('livewire.blog');
    }
}
