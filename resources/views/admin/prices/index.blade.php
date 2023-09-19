@extends('layouts.admin')
@section('content')


        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <h2 class='mt-5 text-center mx-auto'>Preices</h2>
                <a href="{{ route('admin.prices.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i> Create
                </a>
                    <table class="table table-bordered">
                    
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Course_title</th> -->
                                <th>Subscription_type</th>
                                <th>Cost</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->id }}</td>
                                <!-- <td>{{ $price->course ? $price->course->title : 'keine courses' }}</td> -->
                                <td>{{ $price->subscription_type }}</td>
                                <td>{{ $price->cost }}</td>
                                <td>
                                    <a href="{{ route('admin.prices.edit', $price->id) }}" class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    @if (!$loop->last) <!-- Проверяем, не последний ли элемент -->
                                        <form action="{{ route('admin.prices.destroy', $price->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




@endsection