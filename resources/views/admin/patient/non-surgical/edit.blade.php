@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>{!! link_to_route('admin.home.index', 'Home') !!}</li>
        <li>{!! link_to_route('patient.index', 'Patient Management') !!}</li>
        <li>{!! $patient->patient_uuid !!}</li>
        <li>{!! link_to_route('non.surgical.index', 'Non Surgical Management', ['patient' => $patient->id]) !!}</li>
        <li class="active">Create</li>
    </ul>

    {!! Form::model($nonSurgical, ['url' => route('non.surgical.update', ['patient' => $patient->id, 'nonSurgical' => $nonSurgical->id]),  'role' => 'form', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <span class="pull-left"><h4>Update {!! $patient->patient_uuid !!} Non Surgical</h4></span>
            <span class="pull-right">
                <a class="ui small button" href="{{ route('non.surgical.index', ['patient' => $patient->id]) }}">Back</a>
            </span>
        </div>
        <div class="panel-body">
            @include('admin.patient.non-surgical.form')
        </div>
        <div class="panel-footer text-right">
            @include('admin.patient.submit-btn', ['text' => 'Update Non Surgical', 'class' => 'blue'])
        </div>
    </div>
    {!! Form::close() !!}
@endsection