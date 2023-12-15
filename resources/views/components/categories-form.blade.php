<form action="{{route('category.store')}}" method="post" class="w-50">
@csrf
<label> inserisci un nuovo tag</label>
<div class="d-flex d-inline">
    <input type="text" class="form-control w-50" placeholder="nome tag" name="name">
    <button class="btn btn-info mx-2" type="submit"> Salva</button>

</div>
</form>