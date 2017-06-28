@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>{!! link_to_route('admin.home.index', 'Home') !!}</li>
        <li>{!! link_to_route('patient.index', 'patients') !!}</li>
        <li class="active">Create</li>
    </ul>

    {!! Form::model($diagnosis, ['url' => route('patient.exist.diagnosis', ['patient' => $patient->id, 'diagnosis' => $diagnosis->id]),  'role' => 'form', 'class' => 'form-horizontal']) !!}
    <div class="panel panel-default" ng-controller="diagnosisController">
        <div class="panel-heading clearfix">
            <span class="pull-left"><h4>Add Diagnosis Card</h4></span>
            <span class="pull-right">
                @include('admin.patient.back-btn', ['text' => 'Back'])
            </span>
        </div>
        <div class="panel-body">
            @include('admin.patient.diagnosis.form')
        </div>
        <div class="panel-footer text-right">
            @include('admin.patient.submit-btn', ['text' => 'Add Diagnosis', 'class' => 'green'])
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section('script')
    <script>
        app.controller('diagnosisController', ['$scope', '$http', function ($scope, $http) {
            $(function () {
                $('#clinic_day').datetimepicker({
                    format: 'YYYY-MM-DD HH:MM:ss'
                });

                $('#admission_date').datetimepicker({
                    format: 'YYYY-MM-DD'
                });

                $('#discharge_date').datetimepicker({
                    format: 'YYYY-MM-DD'
                });

            });
            var doses = {!! $doses !!};
            $scope.diagnosisTypeNames = {!! $diagnosisTypeNames !!};
            var diagnosisTypes = {!! $diagnosisTypes !!};


            $('.grid-9').addClass('col-md-12');
            $('.grid-3').addClass('hidden');

            if($scope.treatmentTemplateImageUrl && $scope.treatmentTemplateImageUrl != '') {
                $scope.treatmentTemplateImageUrl = "{!! route('admin.home.index') !!}" + '/resources/templates/'+$scope.treatmentTemplateImageUrl;
                var grid = $('.grid-9').removeClass('col-md-12');
                grid.addClass('col-md-9');
                $('.grid-3').removeClass('hidden');
                $('.grid-3').addClass('col-md-3');
            }


            $scope.diagnosisChange = function() {
                if($scope.diagnosis) {
                    var diagnosisType = _.where(diagnosisTypes, {id: parseInt($scope.diagnosis)});
                    var templates = _.pluck(diagnosisType, 'treatment_template');
                    $scope.treatmentTemplateImage = (templates && templates[0][0]) ? templates[0][0].image : null;
                    if($scope.treatmentTemplateImage) {
                        $scope.treatmentTemplateImageUrl = "{!! route('admin.home.index') !!}" + '/resources/templates/'+ $scope.treatmentTemplateImage;
                        var grid = $('.grid-9').removeClass('col-md-12');
                        grid.addClass('col-md-9');
                        $('.grid-3').removeClass('hidden');
                        $('.grid-3').addClass('col-md-3');
                    } else {
                        $('.grid-9').removeClass('col-md-9');
                        $('.grid-9').addClass('col-md-12');
                        $('.grid-3').addClass('hidden');
                    }
                    $scope.entreatmentTemplate = (templates && templates[0][0]) ? templates[0][0].en_template : null;
                    $scope.tatreatmentTemplate = (templates && templates[0][0]) ? templates[0][0].ta_template : null;
                    $scope.sitreatmentTemplate = (templates && templates[0][0]) ? templates[0][0].si_template : null;                    $scope.side = (diagnosisType[0] && diagnosisType[0].side == "Active") ? true : false;
                    $scope.type_of_Anaesthesia = (diagnosisType[0] && diagnosisType[0].type_of_Anaesthesia == "Active") ? true : false;
                }
            };

            $scope.addPatientNoteStatus = false;
            $scope.editStatus = false;
            $scope.patientNotes = [];

            $scope.clearPatientNote = function() {
                $scope.drug = null;
                $scope.dose = null;
                $scope.frequency = null;
                $scope.route = null;
                $scope.duration = null;
            };

            $scope.addPatientNote = function() {
                $scope.addPatientNoteStatus = true;
            };

            $scope.savePatientNote = function() {
                if($scope.drugObject && $scope.doseObject && $scope.frequency && $scope.duration && $scope.route) {
                    $scope.patientNotes.push({drug: $scope.drugObject, dose: $scope.doseObject, frequency: $scope.frequency, duration: $scope.duration, route: $scope.route});
                }
                $scope.clearPatientNote();
            };

            $scope.removePatientNote = function(patientNote) {
                $scope.addPatientNoteStatus = false;
                $scope.patientNotes.splice($scope.patientNotes.indexOf(patientNote),1)
            };

            $scope.addEditPatientNote = function(patientNote) {
                console.log(patientNote);
                $scope.editStatus = true;
                $scope.editData = patientNote;
                $scope.addPatientNoteStatus = true;
                $scope.drug = patientNote.drug.id;
                $scope.dose = patientNote.dose.id;
                $scope.route = patientNote.route;
                $scope.frequency = patientNote.frequency;
                $scope.duration = patientNote.duration;
                $scope.selectedDoseId = patientNote.dose.id;
            };

            $scope.updatePatientNote = function() {
                $scope.editStatus = false;
                var data = $scope.editData;
                $scope.addPatientNoteStatus = false;
                var newObj = {drug: $scope.drug, dose: $scope.dose, frequency: $scope.frequency, duration: $scope.duration};
                $scope.patientNotes.splice($scope.patientNotes.indexOf(data), 1, newObj);
                $scope.clearPatientNote();
            };

            $scope.cancelPatientNote = function() {
                $scope.addPatientNoteStatus = false;
            };

            $scope.drugChange = function() {
                if($scope.drug) {
                    $scope.doses = _.pluck( _.where(doses, {id: parseInt($scope.drug)}), 'dose')[0];
                    $scope.drugObject = _.where(doses, {id: parseInt($scope.drug)})[0];
                }
            };

            $scope.doseChange = function() {
                if($scope.dose) {
                    $scope.doseObject = _.unique(_.where($scope.doses, {id: parseInt(JSON.parse($scope.dose).id)}))[0];
                }
            };

            {{--$scope.selectedDiagnosisId = '{!! $diagnosis->surgery_type_id !!}';--}}
            {{--$scope.cvs_pr = '{!! $examination->cvs_pr !!}';--}}
            {{--$scope.review = '{!! $diagnosis->review !!}';--}}
            {{--var followup = [{!! $followUp !!}][0];--}}
            {{--for(var i=0; i < followup.length; i++) {--}}
                {{--if(followup[i].drug && followup[i].dose && followup[i].frequency && followup[i].duration && followup[i].route) {--}}
                    {{--$scope.patientNotes.push({drug: followup[i].drug, dose: followup[i].dose, frequency: followup[i].frequency, duration: followup[i].duration, route: followup[i].route});--}}
                {{--}--}}
            {{--}--}}
        }]);
    </script>
@endsection