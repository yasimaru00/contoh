
<!-- kalau belum login : fullLayoutMaster -->
<!-- kalau sudah login : recruitmentLayoutMaster -->
@extends('layouts/recruitmentLayoutMaster')

@section('title', 'Vacancy')

@section('page-style')
@endsection
@section('vendor-style')
@endsection
@section('content')
<div class="col-12">
	<div class="card">
		<div class="card-body">
			<div class="card-title">{{ucwords(strtolower($vacancy->title)) }}</div>
			<div class="row">
				<div class="col-2 users-view-image">
					<img src="http://localhost/recruitment/public/images/logo/logo.png" class="w-100 rounded mb-2" alt="logo">
					<!-- height="150" width="150" -->
				</div>
				<div class="col-sm-10 col-12">
					<div class="row">
						<div class="col-4">
							<div class="mt-1">
								<h6 >Company :</h6>
								<p>{{ $vacancy->company->name}}</p>
							</div>
							<div class="mt-1">
								<h6 >Location :</h6>
								<p>{{ ucwords(strtolower($vacancy->city->name)) }}<br>{{ ucwords(strtolower($vacancy->city->province->name)) }}<br>{{ ucwords(strtolower($vacancy->city->province->country->name)) }}</p>
							</div>
						</div>
						<div class="col-4">
							<div class="mt-1">
								<h6 >Salary :</h6>
								<p>{{ $vacancy->currency->code }} {{ number_format($vacancy->min_salary,2,',','.') }} - {{ number_format($vacancy->max_salary,2,',','.') }} / Salary Type</p>
							</div>
							<div class="mt-1">
								<h6 >Vacancy :</h6>
								<p>{{ $vacancy->max_applicant }} openings</p>
							</div>
							<div class="mt-1">
								<h6 >Employment :</h6>
								<p>{{ ucwords(strtolower($vacancy->employment->name)) }}</p>
							</div>
						</div>
						<div class="col-4">
							<div class="mt-1">
								<h6 >Level :</h6>
								<p>{{ ucwords(strtolower($vacancy->level->name)) }}</p>
							</div>
							<div class="mt-1">
								<h6 >Field :</h6>
								<p>{{ ucwords(strtolower($vacancy->field->name)) }}</p>
							</div>
							<div class="mt-1">
								<h6 >Educational :</h6>
								<p>{{ ucwords(strtolower($vacancy->education->name)) }}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<a href="app-user-edit" class="btn btn-primary mr-1 mt-1 waves-effect waves-light">APPLY NOW</a>&nbsp;
					<button class="btn btn-outline-primary mt-1 waves-effect waves-light"><i class="fa fa-share-alt"></i> REFER A FRIEND</button>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="card" style="margin-bottom:0">
					<div class="card-header">
						<h4 class="card-title">Job Descriptions</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<ul>
								@foreach($vacancy->descriptions as $dt)
								<li>{{ ucwords(strtolower($dt->text)) }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="card" style="margin-bottom:0">
					<div class="card-header">
						<h4 class="card-title">Minimum Requirements</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<ul>
								@foreach($vacancy->requirements as $dt)
								<li>{{ ucwords(strtolower($dt->text)) }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="card" style="margin-bottom:0">
					<div class="card-header">
						<h4 class="card-title">Preferences</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<ul>
								@foreach($vacancy->preferences as $dt)
								<li>{{ ucwords(strtolower($dt->text)) }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="card" style="margin-bottom:0">
					<div class="card-header">
						<h4 class="card-title">Perks</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<ul>
								@foreach($vacancy->perks as $dt)
								<li>{{ ucwords(strtolower($dt->text)) }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('vendor-script')
@endsection
@section('page-script')
		<script>
			var uuid, company_uuid, title, max_applicant, city_id, employment_uuid, level_uuid, field_uuid, education_uuid, salary_type, salary_min, salary_max, currency_id = null;
			var vacancys, desc, min_req, pref, perk = [];

			var vacancy = {
				uuid: uuid,
				company_uuid: company_uuid,
				currency_id: currency_id,
				title: title,
				max_applicant: max_applicant,  
				city_id: city_id,
				employment_uuid: employment_uuid,
				level_uuid: level_uuid,
				field_uuid: field_uuid,
				education_uuid: education_uuid,
				salary_type: salary_type,
				min_salary: salary_min,
				max_salary: salary_max,
				description: desc,
				requirement: min_req,
				preference: pref,
				perk: perk,
			};
		</script>
		<!-- <script src="{{ asset('js/vacancy/get-master.js') }}"></script>
		<script src="{{ asset('js/vacancy/list-group.js') }}"></script>
		<script src="{{ asset('js/vacancy/browse.js') }}"></script>
		<script src="{{ asset('js/vacancy/crud.js') }}"></script> -->
@endsection
