<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>TodoApp</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="logo" width="100%">
        </div>
        <div class="content">
            <header>
                <nav>
                    <a class="btn btn-primary" href="#">Criar tarefa</a>
                </nav>
            </header>
            <main>
                <div class="graph">
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
                </div>
                <div class="list">
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
                </div>
            </main>
        </div>
    </div>
</body>

</html>
