<x-layout>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richiesta di amministratore</h2>
            <x-admin-requests-table :adminRequests="$adminRequests"/>
        </div>
    </div>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <h2>Richiesta di revisione</h2>
            <x-revisor-requests-table :revisorRequests="$revisorRequests"/>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <h2>Richieste di Articolista</h2>
            <x-writer-requests-table :writerRequests="$writerRequests"/>
        </div>
    </div>
</div>
</x-layout>