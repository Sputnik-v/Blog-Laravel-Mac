<nav class="navbar">
    <div class="navbar__title">
        Categories
    </div>
    <ul class="navbar__list">
        @foreach($cat as $c)
            <li class="navbar__list_item"><a class="navbar__list_link" href="/">{{$c}}</a></li>
        @endforeach

    </ul>

</nav>
