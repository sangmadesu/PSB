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
								<th>No Telp</th>
								<th>Nama Sekolah</th>
								<th>Alamat Sekolah</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($applicants as $applicant)
							<tr>
								<td>{{ $applicant->reg_number }}</td>
								<td>{{ $applicant->name }}</td>
								<td>{{ $applicant->address }}</td>
								<td>{{ $applicant->handphone_number }}</td>
								<td>{{ $applicant->middle_school_name }}</td>
								<td>{{ $applicant->middle_school_address }}</td>
								<td>
									<a href="{{ route('admin.applicants.show', $applicant->id) }}" class="btn btn-default btn-block">Detail</a>
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
@endsection