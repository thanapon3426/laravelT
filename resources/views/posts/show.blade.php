{{-- <ul>
    {{$post->title}}
    {{$post->content}}
</ul> --}}

<ul>
<a href="{{route('posts.edit',$post->id)}}">{{$post->title}},{{$post->content}}</a>
</ul>

<!DOCTYPE html>
<html lang="en">


