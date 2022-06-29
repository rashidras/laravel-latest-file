@extends('layouts.app')

@section('title', 'Blog posts')

@section('content')

@forelse ($posts as $key => $post)
@include('posts.partials.post', [])
@empty

No posts found!
@endforelse

@endsection