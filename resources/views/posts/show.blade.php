{{-- <ul>
    {{$post->title}}
    {{$post->content}}
</ul> --}}

<ul>
<a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a>
</ul>
