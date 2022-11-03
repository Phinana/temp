<form action="{{ }}" type="POST">
    @csrf
    <input name="post_id" type="hidden">
    <label for="comment">comment</label>
    <input name="comment" type="text" placeholder="comment">

    <input type="submit">
</form>