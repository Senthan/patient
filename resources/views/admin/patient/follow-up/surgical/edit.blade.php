@extends('admin.layouts.master')
@section('content')
    <section class="content">
        {!! Form::model($surgicalFollowup, ['url' => route('surgical.followup.update', ['surgicalFollowup' => $surgicalFollowup]), 'role' => 'form', 'class' => 'form-horizontal ui form', 'method' => 'PATCH']) !!}

            <div class="ui segments">
                <div class="ui segment clearfix">
                    <h2 class="pull-left">Edit surgical followu</h2>
                    <div class="pull-right">
                        <a class="ui small button" href="{{ route('surgical.followup.index') }}">Surgical followu</a>
                    </div>
                </div>
                <div class="ui green segment">
                    @include('admin.patient.follow-up.form')
                </div>
                <div class="ui segment">
                    <button class="ui small button blue" type="submit">Update</button>
                    <a class="ui small button" href="{{ route('surgical.followup.index') }}">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection