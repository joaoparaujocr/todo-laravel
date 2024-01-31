<x-layout page="TodoApp - Login">
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('auth.register') }}>Registre-se</a>
    </x-slot:btn>
    <a href={{ route('home') }}>Home</a>
</x-layout>
