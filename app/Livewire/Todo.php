<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public $todo;
    protected $rules = [
        'todo' => 'required|string|max:255',

    ];

    public function save()
    {
        $this->validate();

        // Store the product
        ModelsTodo::create([
            'todo' => $this->todo,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('message', 'task successfully created.');
        // return redirect()->route('show');
        $this->redirectRoute('show');
        // Reset the form fields
         $this->reset(['todo']);

    }

    public function render()
    {
        return view('livewire.todo');
    }


}
