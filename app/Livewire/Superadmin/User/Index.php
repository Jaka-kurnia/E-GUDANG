<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = [
            'user' => User::orderBy('role', 'desc'),
        ];
        return view('livewire.superadmin.user.index', $data);
    }
}
