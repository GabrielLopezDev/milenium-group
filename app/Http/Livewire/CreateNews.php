<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateNews extends Component
{
    use WithFileUploads;

    public $title, $lead_news, $date, $image, $id_image;

    protected $rules = [
        'title' => 'required|max:100',
        'lead_news' => 'required|max:255',
        'date' => 'required|date|before_or_equal:today',
        'image' => 'required|image|max:2048',
    ];

    public function mount()
    {
        $this->id_image = rand();
    }

    public function render()
    {
        return view('livewire.create-news');
    }

    public function save()
    {
        // dd($this->title,
        // $this->lead_news,
        // $this->date,
        // $this->image);

        $this->validate();

        $image = $this->image->store('news');

        News::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'lead_news' => $this->lead_news,
            'date' => $this->date,
            'image_url' => $image,
        ]);

        $this->reset([
            'title',
            'lead_news',
            'date',
            'image',
        ]);

        $this->id_image = rand();

        $this->emitTo('show-news', 'render');
        $this->emit('alert-create-news', '¡La noticia se creó correctamente!');
    }
}
