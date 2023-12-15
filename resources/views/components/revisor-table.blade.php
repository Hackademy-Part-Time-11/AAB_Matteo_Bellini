<table class="table">
    <thread>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Sritto da</th>
        <th scope="col">Scritto il</th>
        <th scope="col">Leggi</th>
        
        </tr>
</thread>
<tbody>
    @foreach($articles as $article)
    <tr>
        <th scope="row"> {{$article->id}} </th>
        <td> {{ &article->title}}</td>
        <td> {{ &article->category->name}}</td>
        <td> {{ &article->user->name}}</td>
        <td> {{ &article->created_at->format('Y-m-d')}}</td>
        <td>
            <a href="{{route('revisor.detail' , $article) }}" class= "btn btn-primary"> Leggi </a>
</td>
</tr>
@endforeach
</tbody>

</table>