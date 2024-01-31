<x-layout>
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('home') }}>Login</a>
    </x-slot:btn>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form" method="POST" action="{{ route('auth.resgister.store') }}">
        @csrf
        <h3>Faça seu Registro</h3>
        @include('components.form.input', [
            'title' => 'Nome',
            'placeholder' => 'Digite seu nome',
            'name' => 'name',
        ])
        @include('components.form.input', [
            'title' => 'E-mail',
            'placeholder' => 'Digite o seu e-mail',
            'name' => 'email',
            'type' => 'email',
        ])
        @include('components.form.input', [
            'title' => 'Senha',
            'placeholder' => 'Digite sua senha',
            'name' => 'password',
            'type' => 'password',
        ])
        @include('components.form.input', [
            'title' => 'Confirmar senha',
            'placeholder' => 'Confirme sua senha',
            'name' => 'password_confirmation',
            'type' => 'password',
        ])
        <div class="buttons-box">
            <button class="btn btn-primary">
                Registrar-se
            </button>
        </div>
    </form>
</x-layout>
