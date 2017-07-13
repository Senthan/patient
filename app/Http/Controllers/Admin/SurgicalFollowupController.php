<?php

namespace App\Http\Controllers\Admin;

use App\Examination;
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
        $surgicalFollowup = new SurgicalFollowup();
        $surgicalFollowup->patient_id = $patient->id;
        $surgicalFollowup->date = $request->date;
        $surgicalFollowup->save();

        return redirect()->route('surgical.followup.edit', ['patient' => $patient, 'surgicalFollowup' => $surgicalFollowup->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        $examination = $surgicalFollowup->examinationFollowup;

        $bath0 = $surgicalFollowup->examinationFollowup()->where('row', 10)->where('col', 1)->where('type', 'activities_examination_followup')->first();
        $surgicalFollowup->bath_0 = $bath0 ? $bath0->value : '-----';

        return view('admin.patient.follow-up.surgical.edit', compact('patient', 'surgicalFollowup', 'examination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        $surgicalFollowup->patient_id = $patient->id;
        $surgicalFollowup->date = $request->date;
        $surgicalFollowup->complain = $request->complain;
        $surgicalFollowup->examination = $request->examination;
        $surgicalFollowup->investigation = $request->investigation;
        $surgicalFollowup->management = $request->management;
        $surgicalFollowup->post_up_days = $request->post_up_days;
        $surgicalFollowup->post_up_weeks = $request->post_up_weeks;
        $surgicalFollowup->post_up_months = $request->post_up_months;
        $surgicalFollowup->save();

        return redirect()->route('surgical.followup.index', ['patient' => $patient]);
    }

    public function delete(Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        return view('admin.patient.follow-up.surgical.delete', compact('patient', 'surgicalFollowup'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        $surgicalFollowup->delete();
        return redirect()->route('surgical.followup.index', ['patient' => $patient])->with('message', 'Surgical was successfully deleted!');
    }

    public function followup(Patient $patient, SurgicalFollowup $surgicalFollowup)
    {
        $data = request()->all();
        $createExamination = $surgicalFollowup->examinationFollowup()->where('type', $data['data']['type'])->where('row', $data['data']['row'])->where('col', $data['data']['col'])->first();
        if (isset($data['data'])) {
            if ($createExamination) {
                $createExamination->value = $data['data']['value'];
                $createExamination->save();
            } else {
                $examination = new Examination();
                $examination->patient_id = $patient->id;
                $examination->surgical_followup_id = $surgicalFollowup->id;
                $examination->row = $data['data']['row'];
                $examination->col = $data['data']['col'];
                $examination->value = $data['data']['value'];
                $examination->type = $data['data']['type'];
                $examination->save();
            }
        }
    }
}
