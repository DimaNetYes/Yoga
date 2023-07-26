<x-admin>
    

    <x-slot name="main">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                     <h2>COURSES</h2>
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Добавьте поля формы для редактирования данных -->
                        <div class="form-group">
                            <label for="title">Kursname</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="description">Kursbeschreibung</label>
                            <textarea class="form-control" id="description" name="description">{{ $course->description }}</textarea>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="duration">Kursdauer Minuten</label>
                            <input type="text" class="form-control" id="duration" name="duration" value="{{ $course->duration }}" pattern="^\d+(\.\d+)?$">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="subscription">Abonnementtyp</label>
                            <input type="text" class="form-control" id="subscription" name="subscription_type" value="{{ $course->prices->first() ? $course->prices->first()->subscription_type : '' }}" placeholder="verfügbar oder abonement">
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Kosten</label>
                            <input type="text" class="form-control" id="cost" name="cost" value="{{ $course->prices->first() ? $course->prices->first()->cost : '' }}" placeholder="nur Zahlen" pattern="^\d+([\.,]\d+)?$" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="starttime">StartZeit</label>
                            <input type="datetime-local" class="form-control" id="startzeit" name="startzeit" value="{{ $course->schedules->first() ? $course->schedules->first()->start_time : '' }}" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="endtime">EndZeit</label>
                            <input type="datetime-local" class="form-control" id="endzeit" name="endzeit" value="{{ $course->schedules->first() ? $course->schedules->first()->end_time : '' }}" required>
                        </div>
                        <br/>
                        <!-- Добавьте другие поля, если необходимо -->
                        <button type="submit" class="btn btn-primary">Hinzufügen</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-6 ml-4">Zurück</a>
                    </form>
                </div>
            </div>
        </div>



    </x-slot>



</x-admin>