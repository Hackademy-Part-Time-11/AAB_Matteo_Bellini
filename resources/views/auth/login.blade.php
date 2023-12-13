<form method="post" action="{{route('login')}}">
    @csrf 

    <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Indirizzo Email</label>
        <input type="email" name="email" class="form-controll" id="exampleInputEmail" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-controll" id="exampleInputPassword1">
    </div>

    <button tupe="submit" class="btn btn-primary">Invia</button>
</form>