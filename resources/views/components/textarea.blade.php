<textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="5"
    class="form-control @is_invalid($name)" placeholder="{{ $placeholder }}" {{ $required ? 'required' : '' }}>{{ $value }}</textarea>
