<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    #[Url]
    public string $search = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.users.index', [
            'users' => \App\Models\User::query()
                ->when($this->search, function ($query) {
                    $query->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%");
                })
                ->paginate(8),
        ]);
    }
}
