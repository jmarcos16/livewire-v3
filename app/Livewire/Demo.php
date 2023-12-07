<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class Demo extends Component
{

    use WithPagination;

    #[Url]
    public string $search = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render(): View
    {
        return view('livewire.demo', [
            'users' => User::query()
                ->when($this->search, function ($query) {
                    $query->where('name', 'like', "%{$this->search}%")
                        ->orWhere('email', 'like', "%{$this->search}%")
                        ->orWhere('created_at', 'like', "%{$this->search}%");
                })
                ->paginate(8),
        ]);
    }
}
