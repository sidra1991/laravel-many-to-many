@include('layouts.app')
@include('layouts.nav')



@php
    $user = Auth::user()->id;
@endphp
<body>

    <form method="POST" action="{{route('admin.info.update', $userInfo->all()[$user]->id)}}">
        @csrf
        @method('PUT')
        <div>
            <label for="phone">telefono</label>
            <input type="text" id="phone" name="phone" value="{{$userInfo->all()[$user]->phone}}" >
        </div>
        <div>
            <label for="birth">data di nascita</label>
            <input type="date" id="birth" name="birth" value="{{$userInfo->all()[$user]->birth}}" >
        </div>
        <div>
            <label for="immage">immagine - un url</label>
            <input type="text" id="immage" name="immage" value="{{ $userInfo->all()[$user]->immage}}">
        </div>
        <div>
            <label for="address">indirizzo</label>
            <input type="text" id="address" name="address" value="{{$userInfo->all()[$user]->address}}">
        </div>
        <button type="submit" > invia </button>
    </form>


</body>
