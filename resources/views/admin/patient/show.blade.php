@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>{!! link_to_route('admin.home.index', 'Home ') !!}</li>
        <li>{!! link_to_route('patient.index', 'patient ') !!}</li>
        <li class="active">Full Details</li>
    </ul>
    <div class="container-fluid">
        <section class="content">
            <div class="ui segments">
                <div class="ui olive segment">
                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Patient Pesional Data
                            </th>
                        </tr>
                        <tr>
                            <th> OSC No </th>
                            <th> Name </th>
                            <th> Age </th>
                            <th> Gender </th>
                            <th> Address </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> {!! $patient->patient_uuid !!}</td>
                            <td> {!! $patient->name !!}</td>
                            <td> {!! $patient->age !!}</td>
                            <td> {!! $patient->sex !!}</td>
                            <td> {!! $patient->address !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ui green segment">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                First clinic visit
                            </th>
                        </tr>
                        <tr>
                            <th> Co Mobidities </th>
                            <th> Drugs_on </th>
                            <th> Height </th>
                            <th> Weight </th>
                            <th> BMI </th>
                            <th> Refferred from </th>
                            <th> Presenting complain </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> {!! $patient->diagnosis()->first()->co_mobidities or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->drugs_on or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->height or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->weight or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->bmi or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->refferred_from or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->presenting_complain or '' !!}</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                First clinic visit
                            </th>
                        </tr>
                        <tr>
                            <th> Past surgicalhistory </th>
                            <th> Allergic history </th>
                            <th> Management plan </th>
                            <th> X ray </th>
                            <th> CT scan </th>
                            <th> Miri scan </th>
                            <th> Other imaging </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> {!! $patient->diagnosis()->first()->past_surgical_history or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->allergic_history or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->management_plan or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->x_ray or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->ct_scan or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->miri_scan or '' !!}</td>
                            <td> {!! $patient->diagnosis()->first()->other_imaging or '' !!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ui segment blue clearfix g">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Surgical
                            </th>
                        </tr>
                        <tr>
                            <th> Date of admission </th>
                            <th> Date of surgery </th>
                            <th> Date of discharge </th>
                            <th> Surgery </th>
                            <th> Complication </th>
                            <th> Discharge plan </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->surgical as $surgical)
                        <tr>
                            <td> {!! $surgical->date_of_admission or '' !!}</td>
                            <td> {!! $surgical->date_of_surgery or '' !!}</td>
                            <td> {!! $surgical->date_of_discharge or '' !!}</td>
                            <td> {!! $surgical->surgery or '' !!}</td>
                            <td> {!! $surgical->complication or '' !!}</td>
                            <td> {!! $surgical->discharge_plan or '' !!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="ui segment pink clearfix g">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Surgical Followup
                            </th>
                        </tr>
                        <tr>
                            <th> Date </th>
                            <th> Complain </th>
                            <th> Examination </th>
                            <th> Investigation </th>
                            <th> Management </th>
                            <th> Post up days </th>
                            <th> Post up weeks </th>
                            <th> Post up months </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->surgicalFollowup as $surgicalFollowup)
                            <tr>
                                <td> {!! $surgicalFollowup->date or '' !!}</td>
                                <td> {!! $surgicalFollowup->complain or '' !!}</td>
                                <td> {!! $surgicalFollowup->examination or '' !!}</td>
                                <td> {!! $surgicalFollowup->investigation or '' !!}</td>
                                <td> {!! $surgicalFollowup->management or '' !!}</td>
                                <td> {!! $surgicalFollowup->post_up_days or '' !!}</td>
                                <td> {!! $surgicalFollowup->post_up_weeks or '' !!}</td>
                                <td> {!! $surgicalFollowup->post_up_months or '' !!}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="ui segment orange clearfix">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Non Surgical
                            </th>
                        </tr>
                        <tr>
                            <th> Date of admission </th>
                            <th> Date of discharge </th>
                            <th> Indication admission </th>
                            <th> Management </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->nonSurgical as $nonSurgical)
                        <tr>
                            <td> {!! $nonSurgical->date_of_admission or '' !!}</td>
                            <td> {!! $nonSurgical->date_of_discharge or '' !!}</td>
                            <td> {!! $nonSurgical->indication_admission or '' !!}</td>
                            <td> {!! $nonSurgical->management or '' !!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="ui segment violet clearfix">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Non Surgical Followup
                            </th>
                        </tr>
                        <tr>
                            <th> Date </th>
                            <th> Complain </th>
                            <th> Examination </th>
                            <th> Investigation </th>
                            <th> Management </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->nonSurgicalFollowup as $nonSurgicalFollowup)
                        <tr>
                            <td> {!! $surgicalFollowup->date or '' !!}</td>
                            <td> {!! $surgicalFollowup->complain or '' !!}</td>
                            <td> {!! $surgicalFollowup->examination or '' !!}</td>
                            <td> {!! $surgicalFollowup->investigation or '' !!}</td>
                            <td> {!! $surgicalFollowup->management or '' !!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="ui segment olive clearfix">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Refferal
                            </th>
                        </tr>
                        <tr>
                            <th> Refferal </th>
                            <th> Reffered to </th>
                            <th> Report </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->refferal as $refferal)
                        <tr>
                            <td> {!! $refferal->refferal or '' !!}</td>
                            <td> {!! $refferal->reffered_to or '' !!}</td>
                            <td> {!! $refferal->report or '' !!}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
@endsection