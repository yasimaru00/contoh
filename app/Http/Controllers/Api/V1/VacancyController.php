<?php


namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Helpers\Helper;
use App\Models\Recruitment\Master\Company;
use App\Models\Recruitment\Master\Currency;
use App\Models\Recruitment\Master\Perk;
use App\Models\Recruitment\Master\Country;
use App\Models\Recruitment\Master\Province;
use App\Models\Recruitment\Master\City;
use App\Models\Recruitment\Master\Education;
use App\Models\Recruitment\Master\Employment;
use App\Models\Recruitment\Master\Field;
use App\Models\Recruitment\Master\Level;
use App\Models\Recruitment\Vacancy;
use App\Models\Recruitment\VacancyDescription;
use App\Models\Recruitment\VacancyRequirement;
use App\Models\Recruitment\VacancyPreference;
use App\Models\Recruitment\VacancyPerk;
use DB;

class VacancyController extends Controller
{

    public function index(Request $request)
    {
        try {
            $search = strtolower($request->search);
            $search = Helper::replaceSpecialCharacter($search);

            $limit = (int)$request->limit;

            $vacancy = Vacancy::with('currency', 'company', 'employment', 'level', 'city', 'field', 'education', 'descriptions','perks', 'perks.perk','requirements', 'preferences')->withCount('applicants');
            if(!empty($search)) {
                $vacancy = $vacancy->whereRaw("lower(title) like '%$search%'");
            }
            if(!empty($limit)) {
                $vacancy = $vacancy->limit($limit);
            }
            $vacancy = $vacancy->get();
            $this->responseOk($vacancy);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function find($uid)
    {
        try {
            $data = Vacancy::where("uuid", $uid)->with('currency', 'company', 'employment', 'level', 'city', 'field', 'education', 'descriptions','perks', 'perks.perk','requirements', 'preferences')->withCount('applicants')->first();
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function paginate(Request $request)
    {
        try {
            $data = Vacancy::with('currency', 'company')->withCount('applicants')->simplePaginate(10);
            $this->responseOk($data);
        } catch (\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        try {
            $company = Company::where("uuid", $request->company_uuid)->first();
            $currency = Currency::find($request->currency_id);
            $education = Education::where("uuid", $request->education_uuid)->first();
            $employment = Employment::where("uuid", $request->employment_uuid)->first();
            $field = Field::where("uuid", $request->field_uuid)->first();
            $level = Level::where("uuid", $request->level_uuid)->first();
            $city = City::find($request->city_id);

            if(empty($company) || empty($currency) || empty($education) || empty($employment) || empty($field) || empty($level) || empty($city)) {
                $this->responseBadReq();
                return $this->sendResponse();
            }

            $vacancy = new Vacancy;
            $vacancy->country_id = $city->province->country->id;
            $vacancy->province_id = $city->province->id;
            $vacancy->city_id = $city->id;
            $vacancy->company_id = $company->id;
            $vacancy->currency_id = $currency->id;
            $vacancy->education_id = $education->id;
            $vacancy->employment_id = $employment->id;
            $vacancy->field_id = $field->id;
            $vacancy->level_id = $level->id;
            $vacancy->max_salary = $request->max_salary;
            $vacancy->min_salary = $request->min_salary;
            $vacancy->salary_type = $request->salary_type;
            $vacancy->title = $request->title;
            $vacancy->max_applicant = $request->max_applicant;
            $vacancy->save();

            foreach ($request->description as $key => $value) {
                $data = new VacancyDescription;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            foreach ($request->requirement as $key => $value) {
                $data = new VacancyRequirement;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            foreach ($request->preference as $key => $value) {
                $data = new VacancyPreference;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            foreach ($request->perk as $key => $value) {
                $perk = Perk::where("uuid", $value)->first();
                $data = new VacancyPerk;
                $data->vacancy_id = $vacancy->id;
                $data->perk_id = $perk->id;
                $data->text = $perk->name;
                $data->save();
            }

            $this->responseOk($vacancy);
            DB::commit();
        } catch (\Exception $e) {
            $this->responseFail($e);
            DB::rollback();
        }
        return $this->sendResponse();
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {
            $company = Company::where("uuid", $request->company_uuid)->first();
            $currency = Currency::find($request->currency_id);
            $education = Education::where("uuid", $request->education_uuid)->first();
            $employment = Employment::where("uuid", $request->employment_uuid)->first();
            $field = Field::where("uuid", $request->field_uuid)->first();
            $level = Level::where("uuid", $request->level_uuid)->first();
            $city = City::find($request->city_id);
            $vacancy = Vacancy::where("uuid", $request->uuid)->first();

            if(empty($company) || empty($currency) || empty($education) || empty($employment) || empty($field) || empty($level) || empty($city) || empty($vacancy)) {
                $this->responseBadReq();
                return $this->sendResponse();
            }

            $vacancy->country_id = $city->province->country->id;
            $vacancy->province_id = $city->province->id;
            $vacancy->city_id = $city->id;
            $vacancy->company_id = $company->id;
            $vacancy->currency_id = $currency->id;
            $vacancy->education_id = $education->id;
            $vacancy->employment_id = $employment->id;
            $vacancy->field_id = $field->id;
            $vacancy->level_id = $level->id;
            $vacancy->max_salary = $request->max_salary;
            $vacancy->min_salary = $request->min_salary;
            $vacancy->salary_type = $request->salary_type;
            $vacancy->title = $request->title;
            $vacancy->max_applicant = $request->max_applicant;
            $vacancy->save();

            VacancyDescription::where("vacancy_id", $vacancy->id)->delete();
            foreach ($request->description as $key => $value) {
                $data = new VacancyDescription;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            VacancyRequirement::where("vacancy_id", $vacancy->id)->delete();
            foreach ($request->requirement as $key => $value) {
                $data = new VacancyRequirement;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            VacancyPreference::where("vacancy_id", $vacancy->id)->delete();
            foreach ($request->preference as $key => $value) {
                $data = new VacancyPreference;
                $data->vacancy_id = $vacancy->id;
                $data->text = $value;
                $data->save();
            }

            VacancyPerk::where("vacancy_id", $vacancy->id)->delete();
            foreach ($request->perk as $key => $value) {
                $perk = Perk::where("uuid", $value)->first();
                $data = new VacancyPerk;
                $data->vacancy_id = $vacancy->id;
                $data->perk_id = $perk->id;
                $data->text = $perk->name;
                $data->save();
            }

            $this->responseOk($vacancy);
            DB::commit();
        } catch (\Exception $e) {
            $this->responseFail($e);
            DB::rollback();
        }
        return $this->sendResponse();
    }

    public function delete(Request $request)
    {
        DB::beginTransaction();
        try {
            Vacancy::where("uuid", $request->uuid)->delete();
            DB::commit();
        } catch (\Exception $e) {
            $this->responseFail($e);
            DB::rollback();
        }
        return $this->sendResponse();
    }

}
