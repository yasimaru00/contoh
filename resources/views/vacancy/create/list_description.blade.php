@php
$data = [
    "Deeply engaged in the full development lifecycle including designing, developing, testing, deploying, maintaining, monitoring, and improving backend services and APIs.",
    "Apply design patterns and design principles to produce maintainable and easy to extend code.",
    "Write and manage technical documentation."
];
@endphp
<div class="card" style="margin-bottom:0">
    <div class="card-header">
        <div class="row col-12">
            <h4 class="card-title">Job Descriptions <span class="text-danger">*</span></h4>
        </div>
        <div class="row col-12 align-items-center">
            <div class="col-sm-11">
                <textarea id="input_description" class="form-control form-control-sm" placeholder="Add description"></textarea>
            </div>
            <div class="col-sm-1" style="text-align:center">
                <i id="add_description" class="feather icon-plus"></i>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="card-body">
            <ul class="list-group" id="list-description">
                {{--
                @foreach($data as $dt)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-body row align-items-center">
                            <span class="col-sm-11 col-12 list-group-item-description-value">{{ $dt }}</span>
                            <span class="col-sm-1 col-12" style="text-align:right"><i class="feather icon-edit-2 edit-list-group-item-description" alt="Edit"></i>&nbsp;<i class="feather icon-x delete-list-group-item-description" alt="Delete"></i></span>
                        </div>
                    </div>
                </li>
                @endforeach
                --}}
            </ul>
        </div>
    </div>
</div>