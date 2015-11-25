<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/unemi.css') }}">
    <title>Document</title>
</head>

<body>

    <header>
    
        <div class="avatar">
            <div class="avatar-img"></div>
            <a href="" class="avatar-name">Selamat datang Admin</a>
        </div>

        <nav>
            @include('admin.layout.navigation')
        </nav>

        <a href="" class="single-menu"><span>Logout</span></a>

    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>