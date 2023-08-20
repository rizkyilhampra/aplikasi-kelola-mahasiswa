<div class="{{ $col ?? 'col-12' }}">
    <div class="form-group">
        {{ $label }}
        {{ $slot }}
        @include('components.invalid-feedback', [
            'message' => $invalidFeedback ?? null,
        ])
    </div>
</div>
