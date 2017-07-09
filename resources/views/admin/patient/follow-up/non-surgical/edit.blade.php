@extends('admin.layouts.master')
@section('content')
    <section class="content">
        {!! Form::model($nonSurgicalFollowup, ['url' => route('non.surgical.followup.update', ['patient' => $patient, 'nonSurgicalFollowup' => $nonSurgicalFollowup]), 'role' => 'form', 'class' => 'form-horizontal ui form', 'method' => 'PATCH']) !!}

            <div class="ui segments">
                <div class="ui segment clearfix">
                    <h2 class="pull-left">Edit non surgical followup</h2>
                    <div class="pull-right">
                        <a class="ui small button" href="{{ route('non.surgical.followup.index', ['patient' => $patient]) }}">Create non surgical followup</a>
                    </div>
                </div>
                <div class="ui green segment">
                    @include('admin.patient.follow-up.non-surgical.form')
                </div>
                <div class="ui segment">
                    <button class="ui small button blue" type="submit">Update</button>
                    <a class="ui small button" href="{{ route('non.surgical.followup.index', ['patient' => $patient]) }}">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection