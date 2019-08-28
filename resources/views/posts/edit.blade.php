<h3>Edit Post</h3>
<form action="/posts/{{$post->id}}" method="post">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}">
<input type="submit" name="submit">
</form>


<form action="/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="Delete">
</form>
