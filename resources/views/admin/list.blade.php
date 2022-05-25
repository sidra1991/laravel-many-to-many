@include('layouts.app')
@include('layouts.nav')



qui è visibile la lista privata dei post scritti dal utente, cliccandoci sopra si entra nello show, da qui l'utente puo gestire l'edit e il delete dei suoi post
<hr>

<ol>
    @foreach ($myPost as $post)
        <li>
            {{$post->title}}
            <a href="{{route('guePost.show', $post->id )}}">vedi</a>---<a href=""></a>---

        </li>
    @endforeach
</ol>
