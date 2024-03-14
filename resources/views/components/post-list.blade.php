<div class="post-list-group">

    @foreach($posts as $post)

        <a href="/" class="post-list__item">
            <img src="{{$post['image']}}" alt="image post" class="post-list__image">
            <div class="post-list__title">{{$post['title']}}</div>
            <div class="post-list__description">{{$post['description']}}</div>
            <div class="post-list__about">
                <div class="post-list__about_author">User-Id-{{$post['user_id']}}</div>
                <div class="post-list__about_created">{{$post['created_at']}}</div>
            </div>
        </a>
    @endforeach

</div>
