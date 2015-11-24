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
            <ul>
                <li><a href="/admin">Dashboard</a></li>
                <li><a href="/admin-applicant">Applicant</a></li>
                <li><a href="">Accepted</a></li>
                <li><a href="">Rejected</a></li>
                <li><a href="">Broadcast</a></li>
                <li><a href="">Setting</a></li>
            </ul>
        </nav>
        <a href="" class="single-menu"><span>Logout</span></a>
    </header>
    <main>
        <div class="main-header">Applicant List</div>
        <div class="detail">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-app">
                        <div class="table-responsive">
                            <table class="table">
                               <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No Reg</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tempat, Tgl Lahir</th>
                                        <th>No Telp</th>
                                        <th>Nama Sekolah</th>
                                        <th>Alamat Sekolah</th>
                                        <th>Nama Ayah</th>
                                        <th>NEM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                    ?>
                                    @foreach($applicants as $applicant)
                                        <tr>
                                            <td>{!! $no !!}</td>
                                            <td>{!! $applicant->reg_number !!}</td>
                                            <td>{!! $applicant->name !!}</td>
                                            <td>{!! $applicant->address !!}</td>
                                            <td>{!! $applicant->place_of_birth !!}, {!! $applicant->date_of_birth !!}</td>
                                            <td>{!! $applicant->handphone_number !!}</td>
                                            <td>{!! $applicant->middle_school_name !!}</td>
                                            <td>{!! $applicant->middle_school_address !!}</td>
                                            <td>{!! $applicant->parent_name !!}</td>
                                            <td>{!! $applicant->average_score !!}</td>
                                        </tr>
                                        <?php
                                        $no++;
                                        ?>
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