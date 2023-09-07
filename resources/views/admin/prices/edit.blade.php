<x-admin>
    

    <x-slot name="main">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                     <h2>Prices</h2>
                    <form action="{{ route('admin.prices.update', $price->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Добавьте поля формы для редактирования данных -->
                        <div class="form-group">
                            <label for="subscription">Kurse</label>
                            <input type="text" class="form-control" id="subscription" name="subscription" value="{{ $price->subscription_type }}" placeholder="Kursname">
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="text" class="form-control" id="cost" name="cost" value="{{ $price->cost  }}" pattern="^\d+(\.\d+)?$" required>
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="subscription">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $price->title }}" placeholder="5 teilnahmen oder 10 teilnahmen oder abonement...">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 1</label>
                            <input type="text" class="form-control" id="punkt1" name="punkt1" value="{{ $price->punkt1 }}" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 2</label>
                            <input type="text" class="form-control" id="punkt2" name="punkt2" value="{{ $price->punkt2 }}" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="subscription">Absatz 3</label>
                            <input type="text" class="form-control" id="punkt3" name="punkt3" value="{{ $price->punkt3 }}" placeholder="Beschreibung, Bedingungen, Einschränkung. Maximal 10 Wörter.">
                        </div>
                        <br/>
                        <!-- Добавьте другие поля, если необходимо -->
                        <button type="submit" class="btn btn-primary">Speichern</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-6 ml-4">Zurück</a>
                    </form>
                </div>
            </div>
        </div>



    </x-slot>



</x-admin>