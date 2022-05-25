@include('componenti.head')

<ul>
    @foreach ($list as $post)

    <li> {{$post->title}} <a href="{{ route('post.show', $post->id) }}">guarda meglio</a></li>

    @endforeach
</ul>
