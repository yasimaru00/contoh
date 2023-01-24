<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment\Vacancy;

class VacancyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('vacancy.create.index');
    }

    public function view($uuid)
    {
        $vacancy = Vacancy::where("uuid", $uuid)->with('currency', 'company', 'employment', 'level', 'city', 'field', 'education', 'descriptions','perks', 'perks.perk','requirements', 'preferences')->withCount('applicants')->first();
        $data["vacancy"] = $vacancy;

        return view('vacancy.view.index', $data);
    } 

    public function example()
    {
        return view('vacancy.example.index');
    }
}
