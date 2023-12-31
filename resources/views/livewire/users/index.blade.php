<div>

    <input type="text" class="mb-3 rounded form-control" wire:model.live="search" placeholder="Search users..." />

    <x-table>
        <x-slot name="head">
            <x-table.heading 
                scope="col"
                sortable
                :direction="$sortField === 'id' ? $sortDirection : null"
                wire:click="sortBy('id')"
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">
                #
            </x-table.heading>
            <x-table.heading scope="col"
                wire:click="sortBy('name')"
                sortable
                :direction="$sortField === 'name' ? $sortDirection : null"
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">User</x-table.heading>
            <x-table.heading scope="col"
                wire:click="sortBy('email')"
                sortable
                :direction="$sortField === 'email' ? $sortDirection : null"
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Email</x-table.heading>
            <x-table.heading scope="col"
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Status</x-table.heading>
            <x-table.heading 
                scope="col" 
                sortable
                :direction="$sortField === 'created_at' ? $sortDirection : null"
                wire:click="sortBy('created_at')"
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Created
                At</x-table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse ($users as $user)
                <x-table.row>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-900">{{ $user->id }}</div>
                    </x-table.cell>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-gray-900">{{ $user->name }}</div>
                    </x-table.cell>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $user->email }}</div>
                    </x-table.cell>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div>
                            <span
                                class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Active</span>
                        </div>
                    </x-table.cell>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $user->created_at->diffForHumans() }}</div>
                    </x-table.cell>
                </x-table.row>
            @empty
                <x-table.row>
                    <x-table.cell colspan="5" class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-semibold text-center text-gray-700">No users found.</div>
                    </x-table.cell>
                </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
    {{ $users->links() }}
</div>
