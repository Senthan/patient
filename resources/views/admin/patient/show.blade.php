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

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Motor Examination
                            </th>
                        </tr>
                        <tr>
                            <th class="header">Root</th>
                            <th class="header"> Examination </th>
                            <th colspan="2" class="header"> Grade 0 </th>
                            <th colspan="2" class="header"> Grade 1 </th>
                            <th colspan="2" class="header"> Grade 2 </th>
                            <th colspan="2" class="header"> Grade 3 </th>
                            <th colspan="2" class="header"> Grade 4 </th>
                            <th colspan="2" class="header"> Grade 5 </th>
                        </tr>
                        <tr>
                            <th class="header">  </th>
                            <th class="header">  </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="item1">
                            <td>C5</td>
                            <td>Elbow extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C6</td>
                            <td>Wrist extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C8</td>
                            <td>Finger flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 22)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>T1</td>
                            <td>Small Finger Abductors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L2</td>
                            <td>Hip flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L3</td>
                            <td>Knee extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L4</td>
                            <td>Ankle dorsiflexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L5</td>
                            <td>Long toe extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>


                        <tr class="item1">
                            <td>S1</td>
                            <td>Ankle plantar flexors</td>
                            <td></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 5)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 6)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 7)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 8)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 9)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 10)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 11)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 12)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 13)->where('value', 1)->where('type', 'root_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        </tbody>
                    </table>


                    <table class="ui celled table">
                        <thead>
                        <tr><th colspan="1"></th>
                            <th colspan="1"></th>
                            <th colspan="5">Grading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="ui ribbon label">Reflexes</div>
                            </td>
                            <td></td>
                            <td>Grade 0</td>
                            <td>Grade 1</td>
                            <td>Grade 2</td>
                            <td>Grade 3</td>
                            <td>Grade 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biceps C5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Brachioradialis C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Triceps C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Fingers C8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Hoffman sign</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Knee L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ankle S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="ui celled table sensory-impairment">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Sensory Impairment
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Cerrvical</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">C8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thoracic</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T10</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T11</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">T12</td>
                        </tr>
                        <tr>
                            <td>Lumbar</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">L1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">L2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">L3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">L5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sacral</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">S2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">S3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">S4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">S5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Caccxygeal</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment')->first() ? 'active' : '' !!}">Cx</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="ui celled table pain-scale">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Pain Scale
                            </th>
                        </tr>
                        <tr>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 0)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'pain_scale')->first() ? 'active' : '' !!}">10</td>
                        </tr>
                        </thead>
                    </table>

                    <table class="ui definition table activities-examination">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Activities of Daily Living
                            </th>
                        </tr>
                        <tr>
                            <th>Activities</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Bowels</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Incontinent / need enema</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bladder</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Incontinent / catheterised</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Grooming</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Toilet use</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Dependant</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Need some help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Feeding</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Need help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Transfer</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Unable / no sitting Balance</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Major help, can sit</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Minor help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Immobile</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Wheel chair independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">walks with help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Dressing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Stairs</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 1)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 2)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 3)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 4)->where('value', 1)->where('type', 'activities_examination')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathal Index</td>
                            <td colspan="4">
                                {!! Form::text('bath_0', null, ['class' => 'form-control', 'placeholder' => '', 'style' => 'width: 100%;']) !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>


                </div>

                @if(count($patient->surgical))

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


                @endif
                @if(count($patient->surgicalFollowup))
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

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Motor Examination
                            </th>
                        </tr>
                        <tr>
                            <th class="header">Root</th>
                            <th class="header"> Examination </th>
                            <th colspan="2" class="header"> Grade 0 </th>
                            <th colspan="2" class="header"> Grade 1 </th>
                            <th colspan="2" class="header"> Grade 2 </th>
                            <th colspan="2" class="header"> Grade 3 </th>
                            <th colspan="2" class="header"> Grade 4 </th>
                            <th colspan="2" class="header"> Grade 5 </th>
                        </tr>
                        <tr>
                            <th class="header">  </th>
                            <th class="header">  </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="item1">
                            <td>C5</td>
                            <td>Elbow extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C6</td>
                            <td>Wrist extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C8</td>
                            <td>Finger flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 22)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>T1</td>
                            <td>Small Finger Abductors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L2</td>
                            <td>Hip flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L3</td>
                            <td>Knee extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L4</td>
                            <td>Ankle dorsiflexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L5</td>
                            <td>Long toe extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>


                        <tr class="item1">
                            <td>S1</td>
                            <td>Ankle plantar flexors</td>
                            <td></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        </tbody>
                    </table>


                    <table class="ui celled table reflexes-examination">
                        <thead>
                        <tr><th colspan="1"></th>
                            <th colspan="1"></th>
                            <th colspan="5">Grading</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="ui ribbon label">Reflexes</div>
                            </td>
                            <td></td>
                            <td>Grade 0</td>
                            <td>Grade 1</td>
                            <td>Grade 2</td>
                            <td>Grade 3</td>
                            <td>Grade 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biceps C5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Brachioradialis C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Triceps C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Fingers C8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Hoffman sign</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Knee L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ankle S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="ui celled table sensory-impairment">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Sensory Impairment
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Cerrvical</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thoracic</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T10</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T11</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T12</td>
                        </tr>
                        <tr>
                            <td>Lumbar</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sacral</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Caccxygeal</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">Cx</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="ui celled table pain-scale">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Pain Scale
                            </th>
                        </tr>
                        <tr>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 0)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">10</td>
                        </tr>
                        </thead>
                    </table>

                    <table class="ui definition table activities-examination">
                        <thead>
                        <tr>
                            <th colspan="7">
                                Activities of Daily Living
                            </th>
                        </tr>
                        <tr>
                            <th>Activities</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Bowels</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Incontinent / need enema</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bladder</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Incontinent / catheterised</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Grooming</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Toilet use</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependant</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Need some help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Feeding</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Need help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Transfer</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable / no sitting Balance</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Major help, can sit</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Minor help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Immobile</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Wheel chair independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">walks with help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Dressing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Stairs</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathal Index</td>
                            <td colspan="4">
                                {!! Form::text('bath_0', null, ['class' => 'form-control', 'placeholder' => '', 'style' => 'width: 100%;']) !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>


                </div>

                @endif

                @if(count($patient->nonSurgical))
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

                @endif
                @if(count($patient->nonSurgicalFollowup))
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
                @endif
                @if(count($patient->refferal))
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
                @endif
            </div>
        </section>
    </div>
@endsection