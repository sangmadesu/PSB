@extends("psb.master")

@section("register")
<div class="secone-regis">
   <div class="secone-regis-box">
    <h1>Daftar.</h1><br>
    <form action="/calon-siswa/daftar" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
        <input type="text" name="name" placeholder="Nama Lengkap"><br>
        <input type="text" name="place_of_birth" placeholder="Tempat Lahir"><br>
        <input type="text" name="date_of_birth" placeholder="Tanggal Lahir, Cth '2012-12-09'"><br>
        <input type="text" name="address" placeholder="Alamat"><br>
        <input type="text" name="middle_school_name" placeholder="Asal Sekolah"><br>
        <input type="text" name="middle_school_address" placeholder="Alamat Asal Sekolah"><br>
        <input type="text" name="date_of_graduate" placeholder="Tanggal Lulus, Cth '2012-12-09'"><br>
        <input type="text" name="math_score" placeholder="Nilai Matematika"><br>
        <input type="text" name="indonesian_score" placeholder="Nilai Bahasa Indonesia"><br>
        <input type="text" name="english_score" placeholder="Nilai Bahasa Inggris"><br>
        <input type="text" name="science_score" placeholder="Nilai IPA"><br>
        <input type="text" name="average_score" placeholder="NEM"><br>
        <input type="text" name="handphone_number" placeholder="No HP"><br>
        <input type="text" name="parent_name" placeholder="Nama Wali"><br><br>
        Unggah SKHU <input name="document_graduate" type="file"><br>
        Pengaturan Akun <br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Daftar" class="toggle-regis">
    </form>
   </div>
</div>
@endsection
