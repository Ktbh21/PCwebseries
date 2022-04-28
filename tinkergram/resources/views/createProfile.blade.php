@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('profile.postCreate') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="description">Describe yourself</label>
                        <input class="form-control" type="text" name="description" id="description">
                    </div>
                    <br>

                    <div class="form-group row">
                    <label for="profilepic1">Choose file to upload</label>
                    <input type="file" id="profilepic1" name="profilepic" multiple>
                    </div>

                    <br>

                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Create profile</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection
