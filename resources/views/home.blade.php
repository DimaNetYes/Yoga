@extends('layouts.app')
<style>
@keyframes fadeOut {
    0% { opacity: 1; }
    100% { opacity: 0; }
}

/* Стили для элемента с анимацией */
.fade-out {
    animation: fadeOut 0.5s ease-out;
}
</style>
@section('content')
<x-adminMain>
    <x-slot name="main">    
    
    </x-slot>
</x-adminMain>


<div class="container LogIn">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

<script>
    // Ждем, пока страница полностью загрузится
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем элемент с сообщением
        var messageElement = document.querySelector('.LogIn');

        // Проверяем, есть ли элемент
        if (messageElement) {
            // Через 5 секунд скрываем элемент
            setTimeout(function() {
                messageElement.classList.add('fade-out');
            }, 3000); // 5000 миллисекунд = 5 секунд
            setTimeout(function() {
                messageElement.style.display = 'none';
            }, 3500);
        }
    });
</script>
