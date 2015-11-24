@extends("psb.master")

@section("show-registers")
<div class="secone-regis">
   <div class="secone-regis-box">
    <h1>Data Pendaftar.</h1><br>
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>No.</th>
                <th>No Pendaftaran</th>
    			<th>Nama</th>
    			<th>Alamat</th>
    			<th>Tanggal Lahir</th>
    			<th>No. Telp</th>
    			<th>Asal Sekolah</th>
    			<th>Alamat Sekolah</th>
    			<th>Email</th>
    			<th>Tahun Ajaran</th>
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
    			<td>{!! $applicant->date_of_birth !!}</td>
    			<td>{!! $applicant->handphone_number !!}</td>
    			<td>{!! $applicant->middle_school_name !!}</td>
    			<td>{!! $applicant->middle_school_address !!}</td>
    			<td>{!! $applicant->user->email !!}</td>
    			<td>{!! $applicant->academicYear->year !!}</td>
    		</tr>
            <?php
                $no++;
            ?>
            @endforeach
    	</tbody>
    </table>
   </div>
</div>

@endsection