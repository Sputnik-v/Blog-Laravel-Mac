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

        <form action="{{route('posts.destroy', [$post['id']])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">DELETE</button>
        </form>
{{--        <a href="{{route('posts.destroy', [$post['id']])}}">DELETE</a>--}}
        <span> | </span>
        <a href="">UPDATE</a>
    </div>
        <hr>
    @endforeach
</div>
