<x-layout>
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('home') }}>Home</a>
    </x-slot:btn>
    <form class="form" method="POST" action="{{ route('tasks.update', $task->id) }}">
        @method('PATCH')
        @csrf
        <h3>Editar task</h3>
        @include('components.form.input-checkbox', [
            'title' => 'Task concluida',
            'name' => 'is_done',
            'value' => $task->is_done,
        ])
        @include('components.form.input', [
            'title' => 'Título da task',
            'placeholder' => 'Digite o título da task',
            'name' => 'title',
            'value' => $task->title,
        ])
        @include('components.form.input', [
            'title' => 'Data de realização da task',
            'name' => 'due_date',
            'type' => 'datetime-local',
            'value' => $task->due_date,
        ])
        @include('components.form.input-select', [
            'title' => 'Categoria da task',
            'name' => 'category_id',
            'categories' => $categories,
            'selectedId' => $task->category_id,
        ])

        @include('components.form.input-textarea', [
            'title' => 'Descrição da task',
            'name' => 'description',
            'placeholder' => 'Digite a descrição da task',
            'value' => $task->description,
        ])

        <div class="buttons-box">
            <button class="btn btn-primary">
                Editar task
            </button>
            <button class="btn btn-light" type="reset">
                Resetar
            </button>
        </div>
    </form>
</x-layout>
