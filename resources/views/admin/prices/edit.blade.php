<x-admin>
    

    <x-slot name="main">

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                     <h2>Prices</h2>
                    <form action="{{ route('prices.update', $price->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Добавьте поля формы для редактирования данных -->
                        <div class="form-group">
                            <label for="subscription">Subscription Type</label>
                            <input type="text" class="form-control" id="subscription" name="subscription" value="{{ $price->subscription_type }}">
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Cost</label>
                            <input type="text" class="form-control" id="cost" name="cost" value="{{ $price->cost  }}" pattern="^\d+(\.\d+)?$" required>
                        </div>
                        <br/>
                        <!-- Добавьте другие поля, если необходимо -->
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-6 ml-4">Назад</a>
                    </form>
                </div>
            </div>
        </div>



    </x-slot>



</x-admin>