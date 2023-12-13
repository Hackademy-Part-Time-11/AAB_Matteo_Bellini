

@guest 
<li class="nav-item">
    <a class="nav-link btn btn-succes" href="{{route('register')}}">register</a>
</li>

<li class="nav.item">
    <a class="nav-link btn btn-warning" href="{{route('login')}}">login</a>
</li>
@endguest

@auth 
 <li class="nav-item">
    <a class="nav-link"> {{ auth::user()->name}}</a>
 </li>

<li class="nav-item">
    <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
    <form method="post" action="{{route('logout')}}" style="display:none" id="form-logout">
    @csrf 
</form>
</li>

@endauth

<li class="nav-item max-3">
    <a class="nav-link" href="{{route('articles.create')}}">Pubblica Articolo</a>
</li>

