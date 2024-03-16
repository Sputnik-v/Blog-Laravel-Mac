<div>
    <form method="POST" action={{route('posts.store')}}>
        @csrf
        <input type="text">
        <button type="submit">send</button>
    </form>
</div>
