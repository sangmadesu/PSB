<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/unemi.css')}}">
    <title>PSB</title>
</head>

<body>
    <header>
        <div class="logo"><img src="{{ asset('assets/img/psb-white.svg') }}" alt="" width="52" height"34"></div>
        <nav>
            <ul>
                <li><a>hi, <b>Siswa</b></a></li>
                <!-- <li><a href="">Status Saya</a></li>
                <li><a href="">Keluar</a></li> -->
            </ul>
        </nav>
        <nav>
            <ul>
                <li><a href=""><b>Setor Berkas</b></a></li>
                <li><a href=""><b>Daftar Kelulusan</b></a></li>
                <li><a href=""><b>Pengumuman</b></a></li>
                <li><a href="/auth/logout"><b>Keluar</b></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main-head">
            <h1>Hi, Afrian Junior!</h1></div>
        <div class="row">
            <div class="main-status">
                <h2>Status Kamu</h2>
                <br>
                <h3>Lulus kaka!</h3>
                <div class="transcript-nilai">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pelajaran</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Matematika</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>Bahasa Indonesia</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>Bahasa Inggris</td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>Ilmu Pengetahuan Alam</td>
                                    <td>95</td>
                                </tr>
                                   
                                <tr>
                                    <td>Nilai Akhir</td>
                                    <td>97</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/unemi.js') }}"></script>
</body>

</html>