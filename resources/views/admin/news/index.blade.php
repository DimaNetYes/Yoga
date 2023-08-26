@extends('layouts.admin')


@section('content')
    <div class="card">
        <div class="card-header">
            Nachrichtenliste
        </div>

        <div class="card-body">
            <a class="btn btn-success" href="{{ route('admin.news.create') }}">Nachrichten erstellen</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Erstelldatum</th>
                        <th>Inhalt</th>
                        <th>Aktionen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                            <td style="white-space: pre-wrap; width:40%;">{{ $item->content }}</td>
                            <td>
                                
                                <a class="btn btn-sm btn-warning" href="{{ route('admin.news.edit', $item->id) }}">Bearbeiten</a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Löschen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $news->links() }}
        </div>
    </div>
@endsection









