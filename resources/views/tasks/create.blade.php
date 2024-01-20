<x-layout>
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('home') }}>Home</a>
    </x-slot:btn>
    <form class="form">
        @csrf
        <h3>Crie uma nova task</h3>
        @include('components.form.input', [
            'title' => 'Título da task',
            'placeholder' => 'Digite o título da task',
            'name' => 'title',
        ])
        @include('components.form.input', [
            'title' => 'Data de realização da task',
            'name' => 'due_date',
            'type' => 'date',
        ])
        @include('components.form.input-select', [
            'title' => 'Categoria da task',
            'name' => 'category_id',
        ])

        @include('components.form.input-textarea', [
            'title' => 'Descrição da task',
            'name' => 'description',
            'placeholder' => 'Digite a descrição da task',
        ])

        <div class="buttons-box">
            <button class="btn btn-primary">
                Criar task
            </button>
            <button class="btn btn-light" type="reset">
                Resetar
            </button>
        </div>
    </form>
</x-layout>
