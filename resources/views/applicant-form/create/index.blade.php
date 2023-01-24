<!-- kalau belum login : fullLayoutMaster -->
<!-- kalau sudah login : recruitmentLayoutMaster -->
@extends($guest ? 'layouts/fullLayoutMaster': 'layouts/recruitmentLayoutMaster')

@section('title', 'Form Lamaran')

@section('page-style')
{{-- Page Css files --}}
<!-- <link rel="stylesheet" href="{{ asset(mix('css/pages/search.css')) }}"> -->
<link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
@endsection
@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
@endsection
@section('content')

<section id="validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Validation Biodata</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle">
                            <!-- Step 1 -->
                            @include('applicant-form.create.step1')
                            <!-- step 2 -->
                            @include('applicant-form.create.step2')
                            <!-- step 3 -->
                            @include('applicant-form.create.step3')
                            <!-- step 4 -->
                            @include('applicant-form.create.step4')
                            <!-- step 5 -->
                            @include('applicant-form.create.step5')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--/ Search form -->
@endsection
@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
@endsection
@section('page-script')

<script src="{{ asset(mix('js/scripts/forms/wizard-steps.js')) }}"></script>
<!-- <script src="{{ asset(mix('js/scripts/datatables/datatable.js')) }}"></script> -->
<script>
    // Basic Select2 select
    $(".select2").select2({
        // the following code is used to disable x-scrollbar when click in select input and
        // take 100% width in responsive also
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: 'select-sm'
    });
</script>

<script src="{{ asset('js/applicant-form/get-master.js') }}"></script>
@endsection