<x-dashboard.sidebar.main>

    <x-dashboard.sidebar.nav.list label="Users" icon="bx-user">
        <x-dashboard.sidebar.nav.item label="Users" icon="bx-list-plus" :href="url('/')" />
        <x-dashboard.sidebar.nav.item label="Roles" icon="bx-list-plus" :href="url('/')" />
    </x-dashboard.sidebar.nav.list>


    <x-dashboard.sidebar.nav.list label="Setting & Others" icon="bx-cog">
        <x-dashboard.sidebar.nav.item label="Settings" icon="bx-cog" :href="url('/')" />
        <x-dashboard.sidebar.nav.item label="Menu" icon="bx-menu" :href="url('/')" />
        <x-dashboard.sidebar.nav.item label="Logs" icon="bx-pulse" :href="url('/')" />
        <x-dashboard.sidebar.nav.item label="Backup" icon="bx-server" :href="url('/')" />
        <x-dashboard.sidebar.nav.item label="File manager" icon="bx-folder" :href="url('/')" />

    </x-dashboard.sidebar.nav.list>




</x-dashboard.sidebar.main>
