@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Nachrichten bearbeiten
        </div>

        <div class="card-body">
            <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Header</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
                </div>
                <div class="form-group">
                    <label for="content">Inhalt</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required>{{ $news->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image_url">URL Bilder</label>
                    
                    <input type="file" name="image_url" id="image_url" class="form-control" value="{{ $news->image_url }}" multiple >
                    <img src="{{ $imageUrl }}" alt="Image" width="100">
                </div>
                <button type="submit" class="btn btn-primary">Speichern</button>
            </form>
        </div>
    </div>
@endsection
