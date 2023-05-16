<x-layout>
    <x-navbar-admin></x-navbar-admin>
    <main id="page-toggled" class="page-wrapper">
        <div class="page-content">
            {{ $slot }}
        </div>
    </main>
</x-layout>