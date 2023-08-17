<select name="{{ $name }}" id="{{ $name }}" class="form-control" {{ $required ? 'required' : '' }}>
    <option value="">{{ $placeholder }}</option>
    {{ $slot }}
</select>
