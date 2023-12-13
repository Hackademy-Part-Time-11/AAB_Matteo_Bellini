

<form method='POST' action="{{route('articles.store')}}" emctype="multipart/form-data>
@csrf
<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-controll">
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" name="description" class="form-controll">
</div>

<div class="mb-3">
    <label for="form-label">Category</label>
    <select name="category_id" id="" class="form-controll">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="img" class="form-controll">
</div>

<div class="mb-3">
    <label class="form-label">Body</label>
    <textarea name="body" id="" cols="30" rows="10" class="form-controll"></textarea>
</div>
 
<button type="submit" class="btn btn-primary">submit</button>

</form>