@extends('layouts.admin')
@section('content')

            <div class="container mt-4">
            <div class="row justify-content-start">
                <h2>Preice</h2>
                <div class="col-md-6">
                    <form action="{{ route('admin.prices.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subscription">Kurse</label>
                            <input type="text" class="form-control" id="subscription" name="subscription" value="" required>
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Kosten</label>
                            <input type="text" class="form-control" id="cost" name="cost" value="" pattern="^\d+(\.\d+)?$" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="subscription">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="" placeholder="5 teilnahmen oder 10 teilnahmen oder abonement...">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 1</label>
                            <input type="text" class="form-control" id="punkt1" name="punkt1" value="" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 2</label>
                            <input type="text" class="form-control" id="punkt2" name="punkt2" value="" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 3</label>
                            <input type="text" class="form-control" id="punkt3" name="punkt3" value="" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <!-- <input type="hidden" name="course_id" value="24"> -->
                        <!-- Добавьте другие поля, если необходимо -->
                        <button type="submit" class="btn btn-primary">Hinzufügen</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-6 ml-4">Zurück</a>
                    </form>
                </div>
            </div>
            </div>

  @endsection