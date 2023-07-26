<x-admin>

    <x-slot name="main">
            <div class="container mt-4">
            <div class="row justify-content-start">
                <h2>Preice</h2>
                <div class="col-md-6">
                    <form action="{{ route('admin.prices.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subscription">Abonnementtyp</label>
                            <input type="text" class="form-control" id="subscription" name="subscription" value="{{ $price->subscription_type }}" required>
                        </div>
                        <br/>
                        
                        <div class="form-group">
                            <label for="cost">Kosten</label>
                            <input type="text" class="form-control" id="cost" name="cost" value="{{ $price->cost  }}" pattern="^\d+(\.\d+)?$" required>
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