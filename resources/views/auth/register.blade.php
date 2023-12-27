<x-layout>
<form method="post" action="{{route('register')}}">
    @csrf  

    <div class="mb-3 mt-5">
        <label class="form-label">Nome Utente</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Indirizzo Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Invia</button>
</form>
</x-layout>