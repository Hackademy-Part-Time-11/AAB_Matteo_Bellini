
<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Crea articolo</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <x-form/>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <x-form :tags="$tags"/>
        </div>
    </div>
</div>

</x-layout>