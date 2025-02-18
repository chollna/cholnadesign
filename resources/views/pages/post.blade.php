@extends('layouts.app')

@section('title', 'Post Title - My Blog')

@section('content')
    <div class="post-detail">
        <img src="{{ asset('images/sample-post.jpg') }}" alt="Post Image" class="post-detail-image">
        <h1 class="post-detail-title">Post Title</h1>
        <p class="post-detail-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet neque non metus auctor aliquet...</p>
    </div>
@endsection
