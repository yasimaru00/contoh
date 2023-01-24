<div class="card bg-transparent shadow-none" style="margin-bottom:0">
    <div class="card-header">
        <div class="col-md-12 float-right text-sm-right">Advanced search&nbsp;</div>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse">
        <div class="card-body">
            <form class="form">
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <label for="locations">Locations</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="locations" multiple="multiple">
                                    @foreach($city as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="employments">Employments</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="employments" multiple="multiple">
                                    @foreach($employment as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="levels">Levels</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="levels" multiple="multiple">
                                    @foreach($level as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="fields">Fields</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="fields" multiple="multiple">
                                    @foreach($field as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-12">
                            <label for="educations">Educations</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="educations" multiple="multiple">
                                    @foreach($education as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="perk">Perks</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="perk" multiple="multiple">
                                    @foreach($perk as $op)
                                    <option value="{{$op->id}}">{{$op->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="salary">Salary</label>
                            <fieldset class="form-group">
                                <select class="form-control select2" id="salary" name="salary_type">
                                    <option value="1">Hourly</option>
                                    <option value="2">Monthly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-3 col-12">
                            <label for="salary_min">Min</label>
                            <fieldset class="form-group">
                                <input type="number" class="form-control form-control-sm" id="salary_min">
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="action"></label>
                            <fieldset class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary mr-1 mb-1 waves-effect waves-light">Filter</button>
                            </fieldset>
                        </div>
                        {{--
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Filter</button>
                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                        </div>
                        --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>