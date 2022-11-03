<h1>{{ $post->id }}</h1>
<h1>{{ $post->title }}</h1>
<h1>{{ $post->content }}</h1>

@foreach($post->comments as $comment)
    <p>{{ $comment->comment }}</p>
@endforeach

<button><a href="">Create New Comment</a></button>