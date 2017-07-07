<?php

namespace App\Http\Controllers\Admin;

use App\NonSurgical;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NonSurgicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $nonSurgical = NonSurgical::with('patient')->get();

            return response()->json($nonSurgical);
        }

        return view('admin.patient.non-surgical.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.patient.non-surgical.create');
    }

    public function saveNonSurgical(NonSurgicalStoreRequest $request)
    {
        $nonSurgical = new NonSurgical();
//        $nonSurgical->patient_id = $patient->id;
        $nonSurgical->date_of_admission = $request->date_of_admission;
        $nonSurgical->date_of_discharge = $request->date_of_discharge;
        $nonSurgical->indication_admission = $request->indication_admission;
        $nonSurgical->management = $request->management;
        $nonSurgical->save();

        return redirect()->route('non.surgical.index');
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
