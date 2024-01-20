<div class="input-box">
    <label for={{ $name }}>{{ $title }}</label>
    <textarea type="{{ empty($type) ? 'text' : $type }}" name="{{ $name }}" id="{{ $name }}"
        placeholder="{{ $placeholder ?? '' }}" {{ empty($required) ? '' : 'required' }}></textarea>
</div>
