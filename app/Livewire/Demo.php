<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Demo extends Component
{
    public function render(): View
    {
        return view('livewire.demo', [
            'users' => User::all(),
        ]);
    }
}
