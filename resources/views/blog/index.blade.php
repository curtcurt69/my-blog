@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
               <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">DevCentral Blog</h1>
                        <a href="/" class="btn btn-info btn-sm">Home</a>
                        <p>Click on a post to read it. Enjoy and be polite!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new post</p>
                        <a href="/blog/create/post" class="btn btn-info btn-sm">Add Post</a>
                    </div>
               </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="/blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No posts to show...</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection