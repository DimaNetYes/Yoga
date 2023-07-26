<x-admin>

    <x-slot name="main">
            <div class="container mt-4">
            <div class="row justify-content-start">
                <h2>COURSES</h2>
                <div class="col-md-6">
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Kursname</label>
                            <input type="text" class="form-control border-4" id="title" name="title" placeholder="Kursname" required>
                            <br/>
                        </div>
                        <div class="form-group">
                            <label for="description">Kursbeschreibung</label>
                            <textarea class="form-control border-4" id="description" name="description" placeholder="Kursbeschreibung"></textarea>
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="duration">Kursdauer Minuten</label>
                            <input type="text" class="form-control border-4" id="duration" name="duration" placeholder="min" pattern="^\d+(\.\d+)?$">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Abonnementtyp</label>
                            <input type="text" class="form-control" id="subscription" name="subscription_type" placeholder="verfügbar oder abonement">
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Kosten</label>
                            <input type="text" class="form-control" id="cost" name="cost" placeholder="nur Zahlen" pattern="^\d+([\.,]\d+)?$" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="starttime">StartZeit</label>
                            <input type="datetime-local" class="form-control" id="startzeit" name="startzeit" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="endtime">EndZeit</label>
                            <input type="datetime-local" class="form-control" id="endzeit" name="endzeit" required>
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