<input type="{{ $type }}" class="form-control @is_invalid($name)" id="{{ $name }}" name="{{ $name }}"
    placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $required ? 'required' : '' }}>
