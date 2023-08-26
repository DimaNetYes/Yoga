@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Nachrichten erstellen
        </div>

        <div class="card-body">
            <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Header</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="content">Inhalt</label>
                    <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image_url">URL BILD</label>
                    <input type="file" name="image_url" id="image_url" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Erstellen</button>
            </form>
        </div>
    </div>
@endsection
