@extends('admin.layouts.master')
@section('content')
    <section class="content">
        {!! Form::open(['url' => route('surgical.followup.store', ['patient' => $patient]), 'role' => 'form', 'class' => 'form-horizontal ui form']) !!}
            <div class="ui segments">
                <div class="ui segment clearfix">
                    <h2 class="pull-left">Create Surgical Followup</h2>
                    <div class="pull-right">
                        <a class="ui small button" href="{{ route('surgical.followup.create', ['patient' => $patient]) }}">followup</a>
                    </div>
                </div>
                <div class="ui green segment">
                    @include('admin.patient.follow-up.form')
                </div>
                <div class="ui segment">
                    <button class="ui small button green" type="submit">Create</button>
                    <a class="ui small button" href="{{ route('surgical.followup.index', ['patient' => $patient]) }}">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection