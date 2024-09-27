<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class Viewtodo extends Component
{
    use WithPagination;

    public function mount()
    {
        // Initialize the $todos property with data

    }

    public function render()
    {
        $todos = Todo::where('user_id', auth()->user()->id)->paginate(5);
        return view('livewire.viewtodo',['todos' => $todos]);
    }
}
