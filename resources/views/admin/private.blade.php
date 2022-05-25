@include('layouts.app')
@include('layouts.nav')
qui ci vanno tutti i dati personali del utente loggato

@php
    $user = Auth::user();
@endphp

<hr>
<a href="{{route('admin.post.index')}}">lista tui post</a>
<ul>
    @foreach ($information as $info)
        <li> {{$user->name}} </li>
        <li> {{$info->email}} </li>
        <li> {{$info->address}} </li>
        <li> {{$info->phone}} </li>
        <li> {{$info->birth}} </li>
        <li> <img src="{{$info->immage}}" alt=""> </li>

    @endforeach

    <a href="{{route('admin.info.edit',$user->id)}}">cambia le tue informazioni personali</a>

</ul>
