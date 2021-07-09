@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-bottom: 18px">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <p>{{ $post->description }}</p>
                    </div>

                    <div class="card-footer">
                        <b>Posted by: {{ $post->user->name }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
