@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <img class="rounded-circle" src="/storage/{{ $profile->image }}" style width=200px alt="dp">
        </div>
        <div class="col-md-9">
            <h3>{{ $user->name }}</h3>
            <span><strong>{{ $numPosts }}</strong> posts</span>
            @if (empty($profile->description))

            <div class="pt-3"><a href="/profile/edit">Add a description to your profile!</a></div>

            @else:

            <div class="pt-3">{{ $profile->description }}</div>
            <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>

            @endif


        </div>

    </div>

    <div class="row pt-5">
        @foreach($posts as $post)
            <div class="col-4 mb-5">
                <a href="/post/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-50" width=300 height=300px>
                </a>
            </div>
        @endforeach
    </div>



</div>
</div>
</div>
@endsection