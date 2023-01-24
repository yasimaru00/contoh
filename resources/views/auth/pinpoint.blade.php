@extends('layouts/fullLayoutMaster')

@section('title', 'Pinpoint')

@section('page-style')
@endsection

@section('page-script')
<script>
    // userInfo("{{ url('api/v1/passport/user') }}", "{{ $token }}", "{{ url('portal') }}");

    let url = "{{ url('api/v1/passport/user') }}"
    let token = "{{ $token }}"
    let redirect = "{{ url('portal') }}"

    let options = {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept' : 'application/json',
            'Authorization' : 'Bearer '+ token,
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    }
    fetch(url, options)
    .then(function (response) {
        return response.json();
    })
    .then(function (resp) {
        if(!resp.success) {
            swalError(resp.message);
        } else {
            setLocalValue("accessToken", resp.data.token);
            setLocalValue("user", resp.data.user);
            setLocalValue("company", resp.data.company);
            setLocalValue("role", resp.data.role);
            window.location = redirect;
        }
    })
    .catch(function (err) {
        swalError(err);
    });
</script>
@endsection

@section('content')
@endsection
