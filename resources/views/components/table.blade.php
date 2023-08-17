<table class="table table-striped" id="table1">
    <thead>
        <tr>
            <th>No</th>
            {{ $column }}
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>

@push('library-css')
    <link rel="stylesheet" href="{{ asset('assets/extension/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/table-datatable.css') }}" />
@endpush

@push('library-js')
    <script src="{{ asset('assets/extension/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/simple-datatables.js') }}"></script>
@endpush
