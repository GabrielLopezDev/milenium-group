<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        $users = User::where('verified', false)->get();

        return view('livewire.show-users', compact('users'));
    }

    public function accept(User $user)
    {
        $user->verified = true;
        $user->save();

        $this->emit('alert-accept-user', '¡Usuario verificado exitosamente!');
    }

    public function delete(User $user)
    {
        $user->delete();

        $this->emit('alert-delete-user', '¡Usuario eliminado exitosamente!');
    }
}
