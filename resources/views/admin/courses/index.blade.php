<x-admin>

    <x-slot name="main">

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                <h2 class='mt-5 text-center mx-auto'>Courses</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="{{ route('courses.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus mr-2"></i> Kurs hinzufügen
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                    <table class="table table-bordered">
                    
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Abonnementtyp</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->description }}</td>
                                <td>{{ $course->duration }}</td>
                                <td>  @if ($course->prices->first())
                                             {{ $course->prices->first()->cost }}
                                                                             @endif</td>
                                <td> {{ $course->prices->first() ? $course->prices->first()->subscription_type : '' }}</td>
                                <td>
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </x-slot>

</x-admin>