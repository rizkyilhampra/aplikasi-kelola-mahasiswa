@push('library-css')
    <link rel="stylesheet" href="{{ asset('assets/extension/sweet-alerts/sweetalert2.min.css') }}" />
@endpush

@push('library-js')
    <script src="{{ asset('assets/extension/sweet-alerts/sweetalert2.min.js') }}"></script>

    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        const session = @json(session()->all());
        if (session.success) {
            Toast.fire({
                icon: 'success',
                title: session.success
            })
        } else if (session.error) {
            Toast.fire({
                icon: 'error',
                title: session.error
            })
        }
    </script>
@endpush
