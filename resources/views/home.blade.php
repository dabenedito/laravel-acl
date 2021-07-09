@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse($posts as $post)

                        <div class="card" style="margin-bottom: 18px">
                            <div class="card-header">{{ $post->title }}</div>

                            <div class="card-body">
                                <p>{{ $post->description }}</p>
                            </div>

                            <div class="card-footer">
                                <b>Posted by: {{ $post->user->name }}</b>
                                @can('update-post', $post)
                                    <a href="{{ url("/update/$post->id/update") }}">Editar</a>
                                @endcan
                            </div>
                        </div>
                @empty
                    <div class="card">
                        <div class="card-header">Ué... ☹</div>

                        <div class="card-body">
                            Infelizmente não foi possível encontrar posts...
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
