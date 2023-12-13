<x-layout>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Lavora con noi </h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <h3>Lavora come scrittore</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, eligendi!</p>

            <h3>Lavora come revisore</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, dicta.</p>

            <h3>Lavora come amministratore</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, earum?</p>
        </div>
        <div class="col-12 col-md-6">
            <form action="{{route('user.role.request')}}"method="post">
                @csrf 
                <div class="mb-3">
                    <label class="form-label h3">Per quale posizione vuoi candidarti?</label>
                    <select class="form-control" role="position" id="">
                        <option value="admin">Amministratore</option>
                        <option value="revisor">Revisore</option>
                        <option value="writer">Scrittore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label h5">Inviaci la tua email</label>
                    <input type="email" class="form-control" role="email"@auth value="{{Auth::user()->email}}"@endauth>
                </div>
                <div class="mb-3">
                    <label class="form-label h5">Perchè dovremo assumerti?</label>
                    <textarea role="presentation" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-primary"type="submit">Invia candidatura</button>
            </form>
        </div>
    </div>
</div>

</x-layout>