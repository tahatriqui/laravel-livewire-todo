<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class UpdateTodo extends Component
{
    public $todoId;
    public $todo;
    public $oldValue;
    public $todoValue;


    public function mount($todoId)
    {
        $this->todoId = $todoId;
        $todo = Todo::find($this->todoId);

        // Vérifie si la tâche existe
        if ($todo) {
            // Assignation de l'ancienne valeur à la propriété $todoValue
            $this->todoValue = $todo->todo;
        } else {
            // Gère l'erreur si la tâche n'existe pas
            session()->flash('error', 'Task not found.');
        }
    }

    public function handleValue($event)
    {
        // Gérer la valeur modifiée ici
        $this->todoValue = $event['target']['value'];
    }

    public function update()
    {
        $this->validate([
            'todoValue' => 'required|string|max:255',
        ]);

        $todo = Todo::find($this->todoId);

        if ($todo) {
            $todo->update([
                'todo' => $this->todoValue,
                'user_id' => auth()->user()->id,
            ]);

            session()->flash('message', 'Task successfully updated.');
            return $this->redirectRoute('show');
        }

        session()->flash('error', 'Task not found.');
    }
    public function render()
    {
        return view('livewire.update-todo');
    }
}
