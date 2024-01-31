<div class="input-checkbox">
    <input type="checkbox" id="{{ $name }}" name="{{ $name }}" {{ boolval($value) ? 'checked' : '' }} />
    <label for={{ $name }}>{{ $title }}</label>
</div>
