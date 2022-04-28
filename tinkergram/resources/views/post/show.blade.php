@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-50" >
            <p class = "align-bottom"> Posted at : {{$post->created_at}}</p>
            <p> Updated at : {{$post->updated_at}}</p>
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection


