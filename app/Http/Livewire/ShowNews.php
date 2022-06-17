<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;

    public $open = false;
    /** @var News $currently_news description */
    public $currently_news;   
    
    protected $listeners = ['render'];

    public function render()
    {
        $news = News::paginate(5);

        return view('livewire.show-news', compact('news'));
    }

    public function open(News $news)
    {
        $this->open = true;

        $this->currently_news = $news;
    }
}
