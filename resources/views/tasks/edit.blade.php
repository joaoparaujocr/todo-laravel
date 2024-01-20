<x-layout>
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('home') }}>Home</a>
    </x-slot:btn>
    Editar task {{ $task }}
</x-layout>
