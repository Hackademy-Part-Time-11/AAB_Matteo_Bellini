<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Bentornato,{{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @if(count(Auth::user()->articles)> 0)
            <div class="col-12">
                <h1>Tutti i tuoi articoli</h1>
            </div>
            <div class="col-12 my-3">
                <x-articles-table :articles="Auth::user()->articles"/>
            </div>
            @else
            <div class="col-12 my-3">
                <h1>Non hai scritto alcun articolo</h1>
                <a href="{{route('articles.create')}}"class="btn btn-info">Crea il tuo primo articolo</a>
            </div>
            @endif
        </div>
    </div>
</x-layout>