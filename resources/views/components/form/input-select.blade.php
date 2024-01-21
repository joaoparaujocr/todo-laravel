<div class="input-box">
    <label for={{ $name }}>{{ $title }}</label>
    <select name="{{ $name }}" id="{{ $name }}">
        <option value="" disabled selected>
            Selecione uma categoria
        </option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (!empty($selectedId) && $category->id === $selectedId) selected @endif>
                {{ $category->title }}
            </option>
        @endforeach
    </select>
</div>
