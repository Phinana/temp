<form action="{{ route('home_store') }}" type="POST">
    @csrf
    <label for="title">title</label>
    <input name="title" type="text" placeholder="title">

    <label for="content">content</label>
    <input name="content" type="text" placeholder="content">
    <input type="submit">
</form>