<div>
    @foreach($posts as $post)
        <div>
            <img src="{{$post['image']}}" alt="{{$post['title']}}">
            <p>id -- {{$post['id']}}</p>
            <p>user_id -- {{$post['user_id']}}</p>
            <p>category_id -- {{$post['category_id']}}</p>
            <p>{{$post['title']}}}</p>
            <p>{{$post['description']}}}</p>
        </div>
    <div>
        <a href="">DELETE</a>
        <a href="">UPDATE</a>
    </div>
        <hr>
    @endforeach
</div>
