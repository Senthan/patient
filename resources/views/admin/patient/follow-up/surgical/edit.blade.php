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
                    @include('admin.patient.follow-up.surgical.form')
                </div>
                <div class="ui segment">
                    <button class="ui small button blue" type="submit">Update</button>
                    <a class="ui small button" href="{{ route('surgical.followup.index') }}">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </section>
@endsection


@section('script')
    <script>
        $(function () {

            $('#date').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        });

        $(".celled.table.pain-scale tr").on("click", "td", function (event) {
            var col = $(this).parent().children().index($(this));
            var row = $(this).parent().parent().children().index($(this).parent());

            var examination = {};
            if($(this).hasClass('active')) {
                $(this).removeClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'pain_scale_followup';
                examination.value = 0;
            } else {
                $(this).addClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'pain_scale_followup';
                examination.value = 1;
            }
            updateExamination(examination, url);
        });

        $(".celled.table.sensory-impairment tr").on("click", "td", function (event) {
            var col = $(this).parent().children().index($(this));
            var row = $(this).parent().parent().children().index($(this).parent());

            var examination = {};
            if ( $( this ).is( ":first-child" ) ) {

            } else if($(this).hasClass('active')) {
                $(this).removeClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'sensory_impairment_followup';
                examination.value = 0;
            } else {
                $(this).addClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'sensory_impairment_followup';
                examination.value = 1;
            }
            updateExamination(examination, url);
        });

        $(".celled.table.root-examination tr").on("click", "td", function (event) {
            var col = $(this).parent().children().index($(this));
            var row = $(this).parent().parent().children().index($(this).parent());

            var examination = {};
            if ( $( this ).is( ":first-child" ) ) {

            } else if($(this).hasClass('active')) {
                $(this).removeClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'root_examination_followup';
                examination.value = 0;
            } else {
                $(this).addClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'root_examination_followup';
                examination.value = 1;
            }
            updateExamination(examination, url);
        });


        $(".celled.table.reflexes-examination tr").on("click", "td", function (event) {
            var col = $(this).parent().children().index($(this));
            var row = $(this).parent().parent().children().index($(this).parent());

            var examination = {};
            if ( $( this ).is( ":first-child" ) || $( this ).is( ":nth-child(2)" ) ) {

            } else if($(this).hasClass('active')) {
                $(this).removeClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'reflexes_examination_followup';
                examination.value = 0;
            } else {
                $(this).addClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'reflexes_examination_followup';
                examination.value = 1;
            }
            updateExamination(examination, url);
        });


        $(".table.activities-examination tr").on("click", "td", function (event) {
            var col = $(this).parent().children().index($(this));
            var row = $(this).parent().parent().children().index($(this).parent());

            var examination = {};
            if ( $( this ).is( ":first-child" ) || (row == 10)) {

            } else if($(this).hasClass('active')) {
                $(this).removeClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'activities_examination_followup';
                examination.value = 0;
            } else {
                $(this).addClass('active');
                examination.row = row;
                examination.col = col;
                examination.type = 'activities_examination_followup';
                examination.value = 1;
            }
            updateExamination(examination, url);
        });

        $( "#bath_0" ).keydown(function() {
            var examination = {};
            examination.row = 10;
            examination.col = 1;
            examination.type = 'activities_examination_followup';
            examination.value = $( "#bath_0" ).val();
            updateExamination(examination, url);
        });

    </script>
@endsection