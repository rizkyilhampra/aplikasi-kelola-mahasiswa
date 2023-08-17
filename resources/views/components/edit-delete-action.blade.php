<form action="{{ $routeDelete }}" method="POST">
    <a href="{{ $routeEdit }}" class="btn btn-warning btn-sm">
        <i class="bi bi-pencil"></i>
    </a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"
        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
        <i class="bi bi-trash"></i>
    </button>
</form>
