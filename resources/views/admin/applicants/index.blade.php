@extends('admin.layout.master')

@section('content')
<div class="main-header">Applicant Lists</div>
<hr>
<div class="detail">
	<div class="row">
		<div class="col-md-12">
			<div class="detail-app">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.Reg</th>
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
							@foreach($applicants as $applicant)
								<tr>
									<td>{{ $applicant->reg_number }}</td>
									<td>{{ $applicant->name }}</td>
									<td>{{ $applicant->address }}</td>
									<td>{{ $applicant->place_of_birth }}, {{ $applicant->date_of_birth }}</td>
									<td>{{ $applicant->handphone_number }}</td>
									<td>{{ $applicant->middle_school_name }}</td>
									<td>{{ $applicant->middle_school_address }}</td>
									<td>{{ $applicant->parent_name }}</td>
									<td>{{ $applicant->average_score }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection