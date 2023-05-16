<x-layout title="{{ $title }}">
    <style>
        .page-content {
            min-height: 100vh;
        }
    </style>
    <main id="page-toggled" class="page-wrapper">
        <div class="page-content">
            {{ $slot }}
        </div>
    </main>
   
</x-layout>
