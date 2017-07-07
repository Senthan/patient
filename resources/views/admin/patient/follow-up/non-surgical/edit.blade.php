@extends('admin.layouts.master')
@section('content')
    <section class="content">
        {!! Form::model($restaurant, ['url' => route('non.surgical.followup.update', ['restaurant' => $restaurant]), 'role' => 'form', 'class' => 'form-horizontal ui form', 'method' => 'PATCH']) !!}

            <div class="ui segments">
                <div class="ui segment clearfix">
                    <h2 class="pull-left">Edit non surgical followup</h2>
                    <div class="pull-right">
                        <a class="ui small button" href="{{ route('non.surgical.followup.index') }}">Create non surgical followup</a>
                    </div>
                </div>
                <div class="ui green segment">
                    @include('admin.followup.non-surgical.form')
                </div>
                <div class="ui segment">
                    <button class="ui small button blue" type="submit">Update</button>
                    <a class="ui small button" href="{{ route('non.surgical.followup.index') }}">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection