@extends('layout.master')

@section('title','Show Data')

@section('content')
<div class="col-lg-8">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="m-0">Article</h5>
        </div>
        <div class="card-body">
            <div class="card mb-4">
                <img width="150px" src="{{asset('storage/app/public/images/'.$article->featured_image)}}">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <p class="card-text">
                        {{ $article->content }}
                    </p>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{ $article->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
