<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button type="submit">Deletar</button>
</form>