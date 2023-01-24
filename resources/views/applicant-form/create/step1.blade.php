<h6>Step 1</h6>
<fieldset>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>First Name</h6>
                <label for="firstname">Nama Depan</label>
                <input type="text" class="form-control required" id="firstname">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Middle Name</h6>
                <label for="middlename">Nama Tengah</label>
                <input type="text" class="form-control"required id="middlename">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <h6>Last Name</h6>
                <label for="lastname">Nama Belakang</label>
                <input type="text" class="form-control"required id="lastname">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Place of birth</h6>
                <label for="placebirth">Tempat Lahir</label>
                <input type="text" class="form-control"required id="placebirth">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Date of birth</h6>
                <label for="birthday">Tanggal Lahir</label>
                <input type="date" class="form-control"required id="birthday">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Position Applied</h6>
                <label for="job_desc">Posisi yang dilamar</label>
                <input type="text" class="form-control"required id="job_desc">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>ID's Number</h6>
                <label for="id_card">No. KTP</label>
                <input type="text" class="form-control"required id="id_card">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Driver's License</h6>
                <label for="code">No. SIM</label>
                <input type="text" class="form-control"required id="code">
            </div>
        </div>
    </div>
    @include('applicant-form.create.list_marriage')
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Height</h6>
                <label for="height">Tinggi</label>
                <input type="text" class="form-control"required id="height">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Weight</h6>
                <label for="weight">Berat</label>
                <input type="text" class="form-control"required id="weight">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Tax ID number</h6>
                <label for="tax_id_number">No. NPWP</label>
                <input type="text" class="form-control"required id="tax_id_number">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Social Security</h6>
                <label for="assurance_number">No. Jamsostek</label>
                <input type="text" class="form-control"required id="assurance_number">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Nationality</h6>
                <label for="country_id">Kebangsaan</label>
                <input type="text" class="form-control"required id="country_id">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Religion</h6>
                <label for="religion">Agama</label>
                <input type="text" class="form-control"required id="religion">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Blood Type</h6>
                <label for="blood_type">Gol. Darah</label>
                <input type="text" class="form-control"required id="blood_type">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group pt-2">
                <h6>Cell Phone Now</h6>
                <label for="phone1">No. Hanphone Sekarang</label>
                <input type="text" class="form-control"required id="phone1">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group pt-2">
                <h6>Fixed Cell Phone</h6>
                <label for="phone2">No. Hanphone Tetap</label>
                <input type="text" class="form-control"required id="phone2">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Current address</h6>
                <label for="city_id_1">Alamat Sekarang</label>
                <textarea type="text" class="form-control"required id="city_id_1"></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Permanent address</h6>
                <label for="city_id_2">Alamat Tetap</label>
                <textarea type="text" class="form-control"required id="city_id_2"></textarea>
            </div>
        </div>
    </div>
    <!-- list ownership -->
    @include('applicant-form.create.list_ownership')
    <!-- list latar belakang keluarga -->
    <!-- @include('applicant-form.create.list_background_family') -->
</fieldset>