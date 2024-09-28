<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class Viewtodo extends Component
{
    public $todoId;
    use WithPagination;

    public function mount()
    {
        // Initialize the $todos property with data

    }
    public function done($id)
    {
        $this->todoId = $id;
        $todo = Todo::find($this->todoId);
        if ($todo->is_done) {
            $todo->is_done = false;
            $todo->save();
        } else {
            $todo->is_done = true;
            $todo->save();
        }
    }
    public function delete($id)
    {
        $this->todoId = $id;
        $todo = Todo::find($this->todoId);
       $todo->delete();
        session()->flash('delete', 'Task successfully deleted.');
    }

    public function render()
    {
        $todos = Todo::where('user_id', auth()->user()->id)->paginate(5);
        return view('livewire.viewtodo', ['todos' => $todos]);
    }
}
