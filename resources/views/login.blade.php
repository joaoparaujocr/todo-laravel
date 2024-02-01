<x-layout>
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('auth.register') }}>Registro</a>
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

    <form class="form" method="POST" action="{{ route('auth.login.store') }}">
        @csrf
        <h3>Faça seu Login</h3>
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
        <div class="buttons-box">
            <button class="btn btn-primary">
                Login
            </button>
        </div>
    </form>
</x-layout>
