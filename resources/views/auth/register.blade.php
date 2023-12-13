<form method="post" action="{{route('register')}}">
    @csrf  

    <div class="mb-3">
        <label class="form-label">Nome Utente</label>
        <input type="text" name="name" class="form-controll">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Indirizzo Email</label>
        <input type="text" name="email" class="form-controll" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-controll" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
        <input type="password" name="password_confirmation" class="form-controll" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
</form>