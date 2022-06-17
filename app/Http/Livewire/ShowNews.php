<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class ShowNews extends Component
{
    public $open = false;
    /** @var News $currently_news description */
    public $currently_news;    

    public function render()
    {
        $news = News::all();

        return view('livewire.show-news', compact('news'));
    }

    public function open(News $news)
    {
        $this->open = true;

        $this->currently_news = $news;
    }
}
