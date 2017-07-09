@extends('admin.layouts.master')
@section('content')
    <div class="block-header">
        <h1>Delete surgical followup</h1>
    </div>
    <div class="row clearfix">
        <div class="ui segments">
            <div class="ui green segment">
                {!! Form::model($surgicalFollowup, ['url' => route('surgical.destroy', ['patient' => $patient->id, 'surgicalFollowup' => $surgicalFollowup]), 'role' => 'form', 'class' => 'form-horizontal ui form', 'method' => 'DELETE']) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a class="ui button" href="{{ route('surgical.index', ['patient' => $patient->id]) }}">SurgicalFollowup?</a>
                    </div>
                    <div class="panel-body">
                        <p>Do you really want to delete this ({{ $surgicalFollowup->date }}) SurgicalFollowup?</p>
                    </div>
                    <div class="panel-footer">
                        <button class="ui button red" type="submit">Delete</button>
                        <a class="ui button" href="{{ route('surgical.index', ['patient' => $patient->id]) }}">Cancel</a>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection