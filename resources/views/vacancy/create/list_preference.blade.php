@php
$data = [
    "Understanding of CI/CD.",
    "Experienced in Agile/Scrum development.",
    "Experienced in using IaC (CloudFormation, Terraform).",
    "Experienced in using Serverless Technologies (Lambda, Fargate, CloudFunction)",
    "Experienced with common data storage design patterns (Cache, Persistent Storage, Hot-and-Cold Storage).",
    "Understanding of common system engineering design principles, ex: load balancing patterns, computer networking, and is aware of basic security.",
    "Understanding of Dependency Injection (DI).",
    "Able to do performance benchmarking and monitoring."
];
@endphp
<div class="card" style="margin-bottom:0">
    <div class="card-header">
        <div class="row col-12">
            <h4 class="card-title">Preferences
        </div>
        <div class="row col-12 align-items-center">
            <div class="col-sm-11">
                <textarea id="input_preference" class="form-control form-control-sm" placeholder="Add preference"></textarea>
            </div>
            <div class="col-sm-1" style="text-align:center">
                <i id="add_preference" class="feather icon-plus"></i>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="card-body">
            <ul class="list-group" id="list-preference">
                {{--
                @foreach($data as $dt)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-body row align-items-center">
                            <span class="col-sm-11 col-12 list-group-item-preference-value">{{ $dt }}</span>
                            <span class="col-sm-1 col-12" style="text-align:right"><i class="feather icon-edit-2 edit-list-group-item-preference" alt="Edit"></i>&nbsp;<i class="feather icon-x delete-list-group-item-preference" alt="Delete"></i></span>
                        </div>
                    </div>
                </li>
                @endforeach
                --}}
            </ul>
        </div>
    </div>
</div>