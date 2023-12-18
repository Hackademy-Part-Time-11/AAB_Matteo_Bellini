<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="card p-5 shadow" action="{{route('article.update',comapct('article'))}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
                </div>

                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo:</label>
                    <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"{{$category->id == $article->category->id? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags:</label>
                    <select name="tags[]"class="form-control" multiple>
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}"{{$articles->tags->contains($tag) ?'selected' : ''}}>{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="my-3">
                    <label for=""class="form-label">Copertina attuale</label> <br>
                    <div class="text-center">
                        <img width="300" src="{{storage::url($article->img" alt="{{$article->title}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Copertina</label>
                    <input type="file" name="img" class="form-control" id="image">
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Corpo del testo</label>
                    <textarea name="body" id="body" cols="30" rows="6" class="form-control">{{$article->body}}</textarea>
                </div>

                <div class="mt-2">
                  <button class="btn btn-main">pubblica articolo</button>
                </div>
            </form>

        </div>
    </div>
</div>