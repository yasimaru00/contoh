<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Question/Pertanyaan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard" >
                        <p class="card-text">Put an x in the correct response box! / Silanglah dengan tanda x pada kotak jawaban yang tepat!</p>
                        <div class="table-responsive">
                            <table class="table zero-configuration table-striped table-bordered complex-headers">
                                <thead id="ownership" data-href="{{ url('api/v1/master/ownership') }}">
                                    <tr>
                                        <th>No</th>
                                        <th>Do you </th>
                                        <th>yes</th>
                                        <th>no</th>
                                    </tr>
                                </thead>
                                <tbody id="list-ownership">
                                    <!--  -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
