<button><a href="{{ route('home_store_true') }}">Create New Post</a></button>

@foreach($posts as $data)
    <a href="{{ route('home_post', ['id' => $data->id]) }}"><h1>{{ $data->title }}</h1></a>
    <p>{{ $data->content }}</p>
@endforeach