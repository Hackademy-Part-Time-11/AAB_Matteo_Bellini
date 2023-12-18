<table class="table">
    <thead>
   <tr>
    <th scope="col">#</th>
    <th scope="col">Titolo</th>
    <th scope="col">Creato il</th>
    <th scope="col">Status</th>
    <th scope="col">modifica</th>
    <th scope="col">Elimina</th>
</tr>
</thead>
<tbody>
    @foreach($articles as article)
    <tr>
        <td scope="row">{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->created_at->format("d/m/y")}}</td>
        <td>
            {{$article->is_accepted ? "pubblicato" : "Non pubblicato"}}
        </td>
        <td>
            <a href="{{route('article.edit',$article}}" class="btn btn-info">Modifica</a>

        </td>
        <td>
            <form action="{{route('article.delete',$article)}}" class="w-50" method="post"></form>
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
</form>
        </td>
</tr>
@endforeach
</tbody>

</table>