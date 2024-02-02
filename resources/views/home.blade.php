<x-layout page="TodoApp - Home">
    <x-slot:btn>
        <a class="btn btn-primary" href={{ route('tasks.create') }}>Criar tarefa</a>
        <a class="btn btn-primary" href={{ route('auth.logout') }}>Sair</a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <hr />
            <span class="graph_header-date">
                <img src="/assets/images/left-arrow.png" alt="">
                <p>
                    11 de Dez
                </p>
                <img src="/assets/images/right-arrow.png" alt="">
            </span>
        </div>

        <p class="graph_subtitle">Tarefas <b>3/6</b></p>

        <div class="graph_placeholder">

        </div>

        <div class="graph_info">
            <img src="/assets/images/exclamation-mark-in-a-circle.png" />
            <p>Restam 3 tarefas para serem realizadas</p>
        </div>
    </section>
    <section class="list">
        <select>
            <option value="">Todas as tarefas</option>
        </select>

        <ul class="list-tasks">
            @foreach ($tasks as $task)
                @include('components.task', $task)
            @endforeach
        </ul>
    </section>

    <script>
        async function taskChecked(element) {
            const status = element.checked;
            const id = element.dataset.id;
            const router = '{{ route('tasks.done') }}';
            const result = await fetch(router, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    status,
                    id,
                    _token: "{{ csrf_token() }}",
                })
            }).then(result => result);
            const response = await result.json()
            if (response.success) {
                alert("Task atualizada")
            } else {
                element.checked = !status;
            }
        }
    </script>
</x-layout>
