@php
$data = [
    "2+ years active software development experience.",
    "Proficient in Git (GitHub/GitLab).",
    "Excellent coding skill in Javascript and Typescript.",
    "Solid experience in building backend services and APIs in Node.JS.",
    "Solid understanding of SQL and the performance costs associated with queries.",
    "Experienced in different databases. Relational (PostgreSQL/MySQL) or NoSQL (Elasticsearch, MongoDB/DynamoDB).",
    "Have experience/exposure to cloud services (AWS/GCP).",
    "Ability to effectively communicate problems and solutions to the different team members.",
    "Firm grasp in object-oriented, functional, or event-driven programming practices.",
    "Good cross-team collaboration and communication skills.",
    "Willingness to learn and adapt to different technologies."
];
@endphp
<div class="card" style="margin-bottom:0">
    <div class="card-header">
        <div class="row col-12">
            <h4 class="card-title">Minimum Requirements</h4>
        </div>
        <div class="row col-12 align-items-center">
            <div class="col-sm-11">
                <textarea id="input_requirement" class="form-control form-control-sm" placeholder="Add requirement"></textarea>
            </div>
            <div class="col-sm-1" style="text-align:center">
                <i id="add_requirement" class="feather icon-plus"></i>
            </div>
        </div>
    </div>
    <div class="card-content">
        <div class="card-body">
            <ul class="list-group" id="list-requirement">
                {{--
                @foreach($data as $dt)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-body row align-items-center">
                            <span class="col-sm-11 col-12 list-group-item-requirement-value">{{ $dt }}</span>
                            <span class="col-sm-1 col-12" style="text-align:right"><i class="feather icon-edit-2 edit-list-group-item-requirement" alt="Edit"></i>&nbsp;<i class="feather icon-x delete-list-group-item-requirement" alt="Delete"></i></span>
                        </div>
                    </div>
                </li>
                @endforeach
                --}}
            </ul>
        </div>
    </div>
</div>