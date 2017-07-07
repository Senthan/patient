<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use App\SurgicalFollowup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SurgicalFollowupStoreRequest;
use App\Http\Controllers\Controller;

class SurgicalFollowupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Patient $patient)
    {
        $surgicalFollowup = SurgicalFollowup::get()->values();
        if (request()->ajax()) {
            return response()->json($surgicalFollowup);
        }

        return view('admin.patient.follow-up.surgical.index', compact('patient', 'surgicalFollowup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('admin.patient.follow-up.surgical.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurgicalFollowupStoreRequest $request, Patient $patient)
    {
        $nonSurgicalFollowup = new SurgicalFollowup();
        $nonSurgicalFollowup->patient_id = $patient->id;
        $nonSurgicalFollowup->date = $request->date;
        $nonSurgicalFollowup->complain = $request->complain;
        $nonSurgicalFollowup->examination = $request->examination;
        $nonSurgicalFollowup->investigation = $request->investigation;
        $nonSurgicalFollowup->management = $request->management;
        $nonSurgicalFollowup->post_up_days = $request->post_up_days;
        $nonSurgicalFollowup->post_up_weeks = $request->post_up_weeks;
        $nonSurgicalFollowup->post_up_months = $request->post_up_months;
        $nonSurgicalFollowup->save();

        return redirect()->route('surgical.followup.index', ['patient' => $patient]);
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
