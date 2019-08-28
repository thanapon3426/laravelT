<form action="/posts" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Enter Title">
    <input type="submit" name="submit" id="submit">
</form>
