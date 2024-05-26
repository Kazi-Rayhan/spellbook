<x-dashboard.main>
    <x-slot:sidebar>
        <x-dashboard.sidebar.admin />
    </x-slot:sidebar>
    <x-slot:header>
        <x-dashboard.header.main />
    </x-slot:header>

    {{ $slot }}
</x-dashboard.main>
