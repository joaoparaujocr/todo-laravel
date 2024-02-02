<li class="task">
    <div class="task-title">
        <input type="checkbox" onchange="taskChecked(this)" data-id={{ $task['id'] }} ="" @if ($task['is_done']) checked @endif>
        <label>
            {{ $task['title'] }}
        </label>
    </div>
    <div class="task-priority">
        <span class="bullet"></span>
        <p>
            {{ $task['category']->title }}
        </p>
    </div>
    <div class="task-actions">
        <a href={{ route('tasks.edit', $task['id']) }}>
            <img src="/assets/images/edit.png" alt="">
        </a>
        <a href={{ route('tasks.delete', $task['id']) }}>
            <img src="/assets/images/trash.png" alt="">
        </a>
    </div>
</li>
