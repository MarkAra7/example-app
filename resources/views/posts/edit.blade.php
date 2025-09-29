@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
    <label>Content</label>
    <textarea name="content" required>{{ old('content', $post->content) }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection