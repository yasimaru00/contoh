<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Recruitment\FamilyMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        return view('applicantForm.view.create',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // DB::beginTransaction();
        // try {

        //     $family_members = new FamilyMembers;
        //     $family_members->name = $request->name;
        //     $family_members->foreign = $request->foreign;
        //     $vacancy->save();

            

        //     $this->responseOk($vacancy);
        //     DB::commit();
        // } catch (\Exception $e) {
        //     $this->responseFail($e);
        //     DB::rollback();
        // }
        // return $this->sendResponse();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
