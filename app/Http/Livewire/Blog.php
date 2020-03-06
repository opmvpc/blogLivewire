<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Illuminate\Contracts\Pagination\Paginator;

class Blog extends Component
{
    use WithPagination;

    public $recherche;

    protected $updatesQueryString = ['recherche'];

    public function mount(): void
    {
        $this->recherche = request()->query('recherche', $this->recherche);
    }

    public function render(): View
    {
        return view('livewire.blog', [
            'posts' => $this->getPosts(),
        ]);
    }

    public function paginationView(): string
    {
        return 'livewire.pagination';
    }

    private function getPosts(): Paginator
    {
        return Post
            ::where('titre', 'like', '%'.$this->recherche.'%')
            ->orWhere('contenu', 'like', '%'.$this->recherche.'%')
            ->orderBy('date', 'desc')
            ->paginate(7)
            ;
    }
}
