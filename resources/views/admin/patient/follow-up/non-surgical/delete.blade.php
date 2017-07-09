@extends('admin.layouts.master')
@section('content')
    <div class="block-header">
        <h1>Delete Non Surgical Followup</h1>
    </div>
    <div class="row clearfix">
        <div class="ui segments">
            <div class="ui green segment">
                {!! Form::model($nonSurgicalFollowup, ['url' => route('non.surgical.followup.destroy', ['patient' => $patient, 'nonSurgicalFollowup' => $nonSurgicalFollowup]), 'role' => 'form', 'class' => 'form-horizontal ui form', 'method' => 'DELETE']) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="ui button" href="{{ route('non.surgical.followup.index', ['patient' => $patient]) }}">SurgicalFollowup?</a>
                    </div>
                    <div class="panel-body">
                        <p>Do you really want to delete this ({{ $nonSurgicalFollowup->date }}) {!! $patient->patient_uuid !!} SurgicalFollowup?</p>
                    </div>
                    <div class="panel-footer">
                        <button class="ui button red" type="submit">Delete</button>
                        <a class="ui button" href="{{ route('non.surgical.followup.index', ['patient' => $patient]) }}">Cancel</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection