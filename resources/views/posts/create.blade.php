@extends('layouts.app')

@section('title', 'Tambah Post')

@section('header-title', 'Tambah Post')

@section('content')
<div class="card border-0 shadow-sm rounded">
    <div class="card-body">
        <h5 class="card-title text-primary">Tambah Post</h5>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="content">Konten:</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
