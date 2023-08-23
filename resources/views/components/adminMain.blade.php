<div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 25px;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.index') }}">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.prices.index') }}">Prices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Enrollments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Subscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">Task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-uppercase  border-bottom border-primary" href="{{ route('admin.courses.index') }}">User</a>
                </li>
                <!-- Добавьте ссылки на другие разделы админки -->
            </ul>
        </nav>
        <div class="container">
        @if(session('success'))
            <div class="alert alert-success" style="position: absolute; width:80%; left:auto;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
    </header>
    <main>
        @yield('content')
        {{ $main }}
    </main>
</div>


   

<script>
    // Код для автоматического закрытия сообщения об успехе через 5 секунд
    $(document).ready(function() {
        setTimeout(function() {
            $('.alert-success').fadeOut('slow');
        }, 2000); // 5000 миллисекунд = 5 секунд
    });
</script>