<div>
    <x-table>
        <x-slot name="head">
            <x-table.heading 
                scope="col" 
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">#</x-table.heading>
            <x-table.heading 
                scope="col" 
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">User</x-table.heading>
            <x-table.heading 
                scope="col" 
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Email</x-table.heading>
            <x-table.heading 
                scope="col" 
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Status</x-table.heading>
            <x-table.heading 
                scope="col" 
                class="px-6 py-3 text-sm font-semibold text-left text-gray-900">Created At</x-table.heading>
        </x-slot>
        <x-slot name="body">
            @foreach ($users as $user)
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
                        <div >
                            <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Green</span>
                        </div>
                    </x-table.cell>
                    <x-table.cell class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $user->created_at->diffForHumans() }}</div>
                    </x-table.cell>
                </x-table.row>
            @endforeach
        </x-slot>
    </x-table>
</div>
