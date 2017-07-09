@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>{!! link_to_route('admin.home.index', 'Home') !!}</li>
        <li>{!! link_to_route('patient.index', 'patients') !!}</li>
        <li>{!! $patient->patient_uuid !!}</li>
        <li class="active">Create</li>
    </ul>

    {!! Form::model($refferal, ['url' => route('refferal.update', ['patient' => $patient->id, 'refferal' => $refferal->id]),  'role' => 'form', 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <span class="pull-left"><h4>Update Reffercal</h4></span>
            <span class="pull-right">
                @include('admin.patient.back-btn', ['text' => 'Back'])
            </span>
        </div>
        <div class="panel-body">
            @include('admin.patient.refferal.form')
        </div>
        <div class="panel-footer text-right">
            @include('admin.patient.submit-btn', ['text' => 'Update Reffercal', 'class' => 'blue'])
        </div>
    </div>
    {!! Form::close() !!}
@endsection