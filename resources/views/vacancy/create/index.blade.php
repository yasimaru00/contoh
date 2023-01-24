
<!-- kalau belum login : fullLayoutMaster -->
<!-- kalau sudah login : recruitmentLayoutMaster -->
@extends('layouts/recruitmentLayoutMaster')

@section('title', 'Vacancy')

@section('page-style')
        <link rel="stylesheet" href="{{ asset(mix('css/pages/search.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/drag-and-drop.css')) }}">
@endsection
@section('vendor-style')
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
		<link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/dragula.min.css')) }}">
		<style>
			.scroll {
				height: 320px;
				overflow-x: hidden;
				overflow-y: auto;
			}
		</style>
@endsection
@section('content')
<div class="col-md-12">
	<div class="card">
		{{--
		<div class="card-header">
			<h4 class="card-title">Create Vacancy</h4>
		</div>
		--}}
		<div class="card-content">
			<div class="card-body">
				<form class="form form-horizontal" id="form-vacancy" data-href="{{ url('api/v1/vacancy/create') }}" data-href-update="{{ url('api/v1/vacancy/update') }}" data-href-delete="{{ url('api/v1/vacancy/delete') }}">
					<div class="form-header">
						<div class="row">
							<div class="col-md-2 col-12">
								<small><a class="text-muted" target="__blank" href="{{ 'vacancy/example' }}">click here for example</a></small>
							</div>
							<div class="offset-md-8 col-md-2 col-12" style="text-align: right;">
								<button type="button" id="browse" class="btn btn-light" data-toggle="modal" data-backdrop="false" data-target="#modal-browse" onClick="browseVacancy()">Browse</button>
							</div>
						</div>
					</div>
					<div class="form-body">
						<div class="row">
							<div class="col-md-4 col-12">
								<label for="company">Company <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="company" data-href="{{ url('api/v1/master/company') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-4 col-12">
								<label for="title">Title <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<input type="text" id="title" class="form-control" name="title" placeholder="Title">
								</fieldset>
							</div>
							<div class="col-md-4 col-12">
								<label for="max_applicant">Vacancy <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<input type="number" min=1 id="max_applicant" class="form-control" name="max_applicant" placeholder="Vacancy">
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-12">
								<label for="location">Location <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="location" data-href="{{ url('api/v1/master/city') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-3 col-12">
								<label for="employment">Employment <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="employment" data-href="{{ url('api/v1/master/employment') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-3 col-12">
								<label for="level">Level <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="level" data-href="{{ url('api/v1/master/level') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-3 col-12">
								<label for="field">Field <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="field" data-href="{{ url('api/v1/master/field') }}">
										
									</select>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-12">
								<label for="education">Education <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="education" data-href="{{ url('api/v1/master/education') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-2 col-12">
								<label for="salary_type">Salary <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="salary_type" name="salary_type">
										<option value="1">Hourly</option>
										<option value="2">Monthly</option>
										<option value="3">Yearly</option>
									</select>
								</fieldset>
							</div>
							<div class="col-md-2 col-12">
								<label for="currency">Currency <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<select class="form-control select2" id="currency" data-href="{{ url('api/v1/master/currency') }}">
										
									</select>
								</fieldset>
							</div>
							<div class="col-md-3 col-12">
								<label for="salary_min">Min <span class="text-danger">*</span></label>
								<fieldset class="form-group">
									<input type="number" min="1" class="form-control" id="salary_min" value=0>
								</fieldset>
							</div>
							<div class="col-md-3 col-12">
								<label for="salary_max">Max</label>
								<fieldset class="form-group">
									<input type="number" min="1" class="form-control" id="salary_max" value=0>
								</fieldset>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								@include('vacancy.create.list_description')
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								@include('vacancy.create.list_requirement')
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								@include('vacancy.create.list_preference')
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								@include('vacancy.create.list_perk')
							</div>
						</div>
						<div class="row">
							<div class="col-md-10 offset-md-4">
								<button type="button" id="submit" onClick="submitForm()" class="btn btn-primary mr-1 mb-1">Submit</button>
								<button type="button" id="reset" onClick="resetForm()" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade text-left" id="modal-browse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h4 class="modal-title" id="myModalLabel4">Browse Vacancy</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="table table-bordered table-hover" id="table-browse" data-href="{{ url('api/v1/vacancy') }}">
					<thead>
						<tr class="text-center">
							<th>Title</th>
							<th>Employment</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('vendor-script')
        <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
		<script src="{{ asset(mix('vendors/js/extensions/dragula.min.js')) }}"></script>
@endsection
@section('page-script')
		<script>
			var uuid, company_uuid, title, max_applicant, city_id, employment_uuid, level_uuid, field_uuid, education_uuid, salary_type, salary_min, salary_max, currency_id = null;
			var models, desc, min_req, pref, perk = [];

			var model = {
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
		<script src="{{ asset('js/vacancy/get-master.js') }}"></script>
		<script src="{{ asset('js/vacancy/list-group.js') }}"></script>
		<script src="{{ asset('js/vacancy/browse.js') }}"></script>
		<script src="{{ asset('js/vacancy/crud.js') }}"></script>
@endsection
