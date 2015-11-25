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
        <div class="main-header">Broadcast</div>
        <div class="detail">
           <button class="btn btn-standart">New Broadcast</button><br>
            @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-app">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>List</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($broadcasts as $broadcast)
                                    <tr>
                                        <td><a href="">{!! $broadcast->title !!}</a></td>
                                        <td>Publish</td>
                                        <td><a href="{!! action('BroadcastController@edit', $broadcast->id) !!}" class="btn btn-standart edit">Edit</a>
                                        <a href="{!! action('BroadcastController@destroy', $broadcast->id) !!}" class="btn btn-standart delete">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                </div>
                
            </div>
        </div>
    </main>
</body>

</html>