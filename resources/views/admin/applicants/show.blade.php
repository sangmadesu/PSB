@extends('admin.layout.master')

@section('content')
<div class="main-header">Applicant Details</div>
<hr>
<div class="detail">
	<div class="row">
		<div class="col-md-4">
			<div class="detail-app">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Attribute</th>
								<th>Commentary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Name</td>
								<td>{{ $applicant->name }}</td>
							</tr>
							<tr>
								<td>Reg Number</td>
								<td>{{ $applicant->reg_number }}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>{{ $applicant->address }}</td>
							</tr>
							<tr>
								<td>Place of Birth</td>
								<td>{{ $applicant->place_of_birth }}</td>
							</tr>
						</tbody>	
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>School</strong>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>Attribute</th>
								<th>Commentary</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Middle School Name</td>
								<td>{{ $applicant->middle_school_name }}</td>
							</tr>
							<tr>
								<td>Middle School Address</td>
								<td>{{ $applicant->middle_school_address }}</td>
							</tr>
							<tr>
								<td>Date Of Graduate</td>
								<td>{{ $applicant->date_of_graduate }}</td>
							</tr>
							<tr>
								<td>Academic Year</td>
								<td>{{ $applicant->academicYear->year }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Lists Score</strong>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Math Score</td>
								<td><code>{{ $applicant->math_score }}</code></td>
							</tr>
							<tr>
								<td>English Score</td>
								<td><code>{{ $applicant->english_score }}</code></td>
							</tr>
							<tr>
								<td>Indonesian Score</td>
								<td><code>{{ $applicant->indonesian_score }}</code></td>
							</tr>
							<tr>
								<td>Science Score</td>
								<td><code>{{ $applicant->science_score }}</code></td>
							</tr>
							<tr>
								<td>Average Score</td>
								<td><code>{{ $applicant->average_score }}</code></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection