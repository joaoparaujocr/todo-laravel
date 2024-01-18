<x-layout page="TodoApp - Home">
    <x-slot:btn>
        <a class="btn btn-primary" href="#">Criar tarefa</a>
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
            <li class="task">
                <div class="task-title">
                    <input type="checkbox" name="" id="">
                    <label>
                        Titulo da task
                        </h3>
                </div>
                <div class="task-priority">
                    <span class="bullet"></span>
                    <p>
                        Prioridade da task
                    </p>
                </div>
                <div class="task-actions">
                    <a href="">
                        <img src="/assets/images/edit.png" alt="">
                    </a>
                    <a href="">
                        <img src="/assets/images/trash.png" alt="">
                    </a>
                </div>
            </li>
            <li class="task">
                <div class="task-title">
                    <input type="checkbox" name="" id="">
                    <label>
                        Titulo da task
                        </h3>
                </div>
                <div class="task-priority">
                    <span class="bullet"></span>
                    <p>
                        Prioridade da task
                    </p>
                </div>
                <div class="task-title">
                    editar - excluir
                </div>
            </li>
        </ul>
    </section>
</x-layout>
