<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/unemi.css') }}">
    <title>Broadcast Page</title>
</head>

<body>
    <header>
        <div class="avatar">
            <div class="avatar-img"></div>
            <a href="" class="avatar-name">Selamat datang Admin</a>
        </div>

        <nav>
            <ul>
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="/admin-applicant">Applicant</a></li>
                <li><a href="">Accepted</a></li>
                <li><a href="">Rejected</a></li>
                <li><a href="/broadcast">Broadcast</a></li>
                <li><a href="">Setting</a></li>
            </ul>
        </nav>
        <a href="/auth/logout" class="single-menu"><span>Logout</span></a>
    </header>
    <main>
        <div class="main-header">Edit {!! $broadcast->title !!}</div>
        @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
        @endif
        <div class="detail">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-app">
                        <div class="quick-broadcast">
                            <form action="" method="post">
                                {!! csrf_field() !!}
                                <input type="text" placeholder="Title" name="title" value="{!! $broadcast->title !!}">
                                <textarea id="message" cols="30" rows="10" placeholder="Message" name="message">{!! $broadcast->message !!}</textarea>
                                <input type="submit" value="Edit" name="submit">
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>