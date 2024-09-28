<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Component;

class UpdateTodo extends Component
{
    public $todoId;
    public $todo;
    public $todoValue;

    public function mount($id){
        $this->todoId = $id;
        $this->todoValue = Todo::find($this->todoId);
    }
    public function update($id){
        $this->validate();

        // Store the product
        $this->todoValue->update([
            'todo' => $this->todoValue,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('message', 'task successfully updated.');
        // return redirect()->route('show');
        $this->redirectRoute('show');

              }
    public function render()
    {
        return view('livewire.update-todo');
    }
}
