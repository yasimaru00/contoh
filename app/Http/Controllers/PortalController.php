<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment\Master\Employment;
use App\Models\Recruitment\Master\Level;
use App\Models\Recruitment\Master\Field;
use App\Models\Recruitment\Master\Education;
use App\Models\Recruitment\Master\Perk;
use App\Models\Recruitment\Master\City;
use App\Models\Recruitment\Master\Menu;

class PortalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        return view('portal.index', $data);
    }

    public function indexGuest()
    { 
        $data["employment"] = Employment::all();
        $data["level"] = Level::all();
        $data["field"] = Field::all();
        $data["education"] = Education::all();
        $data["perk"] = Perk::all();
        $data["city"] = City::all();
        $data["guest"] = true;

        return view('portal.index', $data);
    }

    // public function form(){
    //     $data["employment"] = Employment::all();
    //     $data["level"] = Level::all();
    //     $data["field"] = Field::all();
    //     $data["education"] = Education::all();
    //     $data["perk"] = Perk::all();
    //     $data["city"] = City::all();
    //     $data["guest"] = false;
    //     $data['menu'] = Menu::all();

    //     return view('portal.formLamaran', $data);
    // }
}
