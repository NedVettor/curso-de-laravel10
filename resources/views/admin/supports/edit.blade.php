<h1>Dúvida {{$support->id}}</h1>

<form action="{{ route('supports.update', $support->id)}}" method="POST">
    @csrf()
    <!-- <input type="text" value="PUT" name="_method"> -->
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">{{$support->body}}</textarea>
    <button type="submit">Enviar</button>
</form>