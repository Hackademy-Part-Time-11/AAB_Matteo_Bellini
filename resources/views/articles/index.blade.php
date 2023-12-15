<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col- md-6">
                <h1>Articoli per : {{$key}} </h1>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="row">
            @foreach ($articles as article)
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                 <img src="{{ Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                   <div class="card-body">
                     <h5 class="card-title">{{$article->title}}</h5>
                     <p class="card-text">{{ $article->description}}</p>
                      <a href="{{route('articles.show', $article)}}" class="btn btn-primary">Leggi</a>
                    </div>
                  
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>