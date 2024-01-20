<li class="task">
    <div class="task-title">
        <input type="checkbox" name="" id="">
        <label>
            {{ $title }}
        </label>
    </div>
    <div class="task-priority">
        <span class="bullet"></span>
        <p>
            {{ $category }}
        </p>
    </div>
    <div class="task-actions">
        <a href={{route('tasks.edit', $id)}}>
            <img src="/assets/images/edit.png" alt="">
        </a>
        <a href={{route('tasks.delete', $id)}}>
            <img src="/assets/images/trash.png" alt="">
        </a>
    </div>
</li>
