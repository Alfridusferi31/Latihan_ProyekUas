@extends('layouts.app')

@section('title', 'Edit Post')

@section('header-title', 'Edit Post')

@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"
                    rows="5">{{ old('content', $post->content) }}</textarea>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            @if ($post->image)
            <div class="form-group">
                <label for="current-image">Gambar Saat Ini</label><br>
                <img src="{{ asset('storage/' . $post->image) }}" class="img-thumbnail" style="max-width: 300px;">
            </div>
            @endif

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection