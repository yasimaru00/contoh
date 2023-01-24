<?php

namespace App\Http\Controllers;

use App\Models\Recruitment\Master\City;
use App\Models\Recruitment\Master\Education;
use App\Models\Recruitment\Master\Employment;
use App\Models\Recruitment\Master\Field;
use App\Models\Recruitment\Master\Level;
use App\Models\Recruitment\Master\Menu;
use App\Models\Recruitment\Master\Perk;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    public function index()
    {
        $data["employment"] = Employment::all();
        $data["level"] = Level::all();
        $data["field"] = Field::all(); 
        $data["education"] = Education::all();
        $data["perk"] = Perk::all(); 
        $data["city"] = City::all();
        $data["guest"] = false;
        $data['menu'] = Menu::all();
        return view('applicant-form.create.index',$data);
    }

    public function view($uuid)
    {
        // $vacancy = Vacancy::where("uuid", $uuid)->with('currency', 'company', 'employment', 'level', 'city', 'field', 'education', 'descriptions','perks', 'perks.perk','requirements', 'preferences')->withCount('applicants')->first();
        // $data["vacancy"] = $vacancy;

        // return view('applicant-form.view.index', $data);
    } 

    public function example()
    {
        // return view('vacancy.example.index');
    }
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
