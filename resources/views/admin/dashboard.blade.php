<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="admin-dashboard-tiles">
        @livewire('admin.admin-tiles')
    </div>

</x-app-layout>
