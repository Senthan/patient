@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.home.index') }}">Home</a></li>
        <li class="active">Patients</li>
    </ul>

<div ng-controller="PatientController">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a ng-show="!selected" ng-click="addPatientCode()" class="button ui big positive labeled icon">
                <i class="icon add"></i>Add Patient
            </a>
            <a ng-show="selected" ng-href="@{{ delete_url }}" class="button ui big negative labeled icon a-load ">
                <i class="icon trash"></i>Delete
            </a>
            {{--<a ng-show="selected" ng-href="@{{ diagnosis_url  }}" class="button ui big positive labeled icon">--}}
                {{--<i class="icon add"></i>addDiagnosisCard--}}
            {{--</a>--}}
            <a ng-show="selected" ng-click="addDiagnosisCard();" class="button ui big positive labeled icon">
                <i class="icon add"></i>addDiagnosisCard
            </a>
            {{--<a ng-show="selected" ng-href="@{{ anaesthetic_url  }}" class="button ui big labeled icon a-load blue">--}}
                {{--<i class="icon add"></i>addAnaesthetic--}}
            {{--</a>--}}
            <a ng-show="selected" ng-href="@{{ show_url }}/manage" class="button ui big labeled icon a-load teal"><i class="user icon"></i>Manage Profile</a>
            <a ng-show="selected" ng-href="@{{ show_url }}" class="button ui big labeled icon a-load orange">
                <i class="list layout icon"></i>Full Details
            </a>
            {{--<a target="_blank" ng-show="mySelections.length" ng-href="@{{ print_url }}" class="button ui big labeled icon a-load white">--}}
                {{--<i class="icon print"></i>Patients Grid Print--}}
            {{--</a>--}}
            {{--<a target="_blank" ng-show="selected" ng-href="@{{ diagnosis_print_url }}" class="button ui big labeled icon a-load white">--}}
                {{--<i class="icon print"></i>Patient diagnosis Print--}}
            {{--</a>--}}
            {{--<a ng-href="@{{ mail_url }}" ng-show="mySelections.length"  class="button ui big labeled icon a-load white">--}}
                {{--<i class="icon mail"></i>Mail--}}
            {{--</a>--}}
        </div>
        <div class="panel-body">
            @if (session('message'))
                <div class="alert alert-success alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                    {{ session('message') }}
                </div>
            @endif

            <div>
                <div ui-grid="gridOptions" ui-grid-pagination ui-grid-selection ui-grid-edit ui-grid-resize-columns ui-grid-move-columns class="grid"></div>
            </div>
        </div>
    </div>
    <div class="modal-wrapper">
        <div class="modal fade" id="add-patient-code-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        {!! Form::open(['url' => route('patient.uuid'), 'role' => 'form', 'class' => 'form-horizontal']) !!}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Create Unique Id for patient</h3>
                            </div>
                            <div class="panel-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    {!! Form::text('nic_no', null, ['class' => 'form-control form-size', 'placeholder' => 'Enter Unique No']) !!}
                                </div>

                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="button ui big positive labeled icon">Add</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-wrapper">
        <div class="modal fade" id="select-surgery-type-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Select surgery type on patient</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    {!! Form::select('diagnosis_type', ['new_diagnosis' => 'Create new diagnosis', 'update_diagnosis' => 'Update existing diagnosis'], null, ['class' => 'form-control form-size', 'ng-model' => 'diagnosisType', 'ng-change' => 'diagnosisTypeChange();', 'placeholder' => 'Select Type']) !!}
                                </div>
                                <div class="form-group">
                                    <select name="selectedSurgeryType" ng-model="selectedSurgeryType" class="form-control form-size" ng-show="enableAddDiagnosis" ng-change="surgeryTypeChange();">
                                        <option value="">Select surgery type</option>
                                        <option ng-repeat="selectedSurgeryType in selectedSurgeryTypes" value="@{{ selectedSurgeryType.id }}" >
                                            @{{ selectedSurgeryType.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a type="button" class="btn btn-default" data-dismiss="modal">Cancel</a>
                            <a ng-show="!enableAddDiagnosis" ng-href="@{{ diagnosis_url  }}" type="button" class="button ui big blue labeled icon">OK</a>
                            <a ng-show="enableAddDiagnosis && enableUpdateDiagnosis" ng-href="@{{ exist_diagnosis_url  }}" type="button" class="button ui big orange labeled icon">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(function () {
           $('#date_of_birth').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
        app.controller('PatientController', ['$scope', '$http', function ($scope, $http) {
            $scope.moduleUrl = "{{ route('patient.index') }}/"
            var surgeryTypes = [];
            var diagnosisTypes = {!! $diagnosisTypes !!};

            for(var i =0; i < diagnosisTypes.length; i++) {
                surgeryTypes.push({'id': diagnosisTypes[i], 'surgeryType': diagnosisTypes[i]});

            }

            $scope.patients = [];
            var columnDefs = [
                { displayName: 'Patient ID', field: 'patient_uuid', enableCellEdit: false, minWidth: 100, width: 130},
                { displayName: 'Name', field: 'name', minWidth: 150, width: 150},
                { displayName: 'Age', field: 'age', minWidth: 60, width: 60},
                { displayName: 'Sex', field: 'sex', editableCellTemplate: 'ui-grid/dropdownEditor',
                    editDropdownOptionsArray: [{ id:'Male', ward: 'Male'}, {id:'Female', ward: 'Female'}, {id:'Other', ward: 'Other'}], editDropdownValueLabel: 'ward', minWidth: 80, width: 80},
                { displayName: 'Ward', field: 'ward', editableCellTemplate: 'ui-grid/dropdownEditor',
                    editDropdownOptionsArray: [{ id:'27', ward: '27'}, {id:'28', ward: '28'}, {id:'29', ward: '29'} ,{id:'30', ward: '30'}, {id:'23B', ward: '23B'}, {id:'16A', ward: '16A'}, {id:'16B', ward: '16B'}, {id:'23A', ward: '23A'}, {id:'29A', ward: '29A'}], editDropdownValueLabel: 'ward', minWidth: 80, width: 80},

                { name: 'date', displayName: 'Date Of Surgery' , type: 'date', cellFilter: 'date:"yyyy-MM-dd"', width: '150' },
                { displayName: 'Status', field: 'status', editableCellTemplate: 'ui-grid/dropdownEditor',
                                    editDropdownOptionsArray: [{ id:'Authorised', status: 'Authorised'},{id:'Not Authorised', status: 'Not Authorised'}], editDropdownValueLabel: 'status', minWidth: 100, width: 100},
                { displayName: 'Operation Theater', field: 'operation_theater', editableCellTemplate: 'ui-grid/dropdownEditor',
                    editDropdownOptionsArray: [{ id:'JICA', operation_theater: 'JICA'}, {id:'Casualty OT', operation_theater: 'Casualty OT'}], editDropdownValueLabel: 'operation_theater', minWidth: 180, width: 180},
                { displayName: 'Admission Type', field: 'admission_type', editableCellTemplate: 'ui-grid/dropdownEditor',
                    editDropdownOptionsArray: [{ id:'Routine Surgery', operation_theater: 'Routine Surgery'}, {id:'Casualty Surgery', operation_theater: 'Casualty Surgery'}], editDropdownValueLabel: 'operation_theater', minWidth: 180, width: 180},
                { displayName: 'Consultant Name', field: 'diagnosis.data',  cellTemplate:'<div ng-repeat="(key, item) in row.entity.diagnosis.data track by $index">@{{item.staff.data[0].short_name}}</div>',minWidth: 190, width: 190, enableCellEdit: false},

            ];
//            gridOptions.rowHeight = 50;
            gridOptions.columnDefs = columnDefs;
            gridOptions.enableGridMenu = true;
            gridOptions.enableColumnResizing = true;
            gridOptions.enableSelectAll = true;

            gridOptions.onRegisterApi = function (gridApi) {
                $scope.gridApi = gridApi;
                gridApi.selection.on.rowSelectionChanged($scope,function(rows){
                    $scope.setSelection(gridApi);
                });

                gridApi.edit.on.afterCellEdit($scope,function(rowEntity, colDef, newValue, oldValue){
                    var data = {};
                    data.id = rowEntity.id;
                    data.field_name = colDef.name;
                    data.new_value = newValue;

                    $http.post($scope.moduleUrl + '?ajax=true', data).success(function (response) {

                    });
                });

                gridApi.selection.on.rowSelectionChangedBatch($scope,function(rows){
                    $scope.setSelection(gridApi);
                });
            };
            $scope.gridOptions = gridOptions;
            $http.get($scope.moduleUrl + '?ajax=true').success(function (items) {
                $scope.patients = items.data;
                $scope.gridOptions.data =  $scope.patients;
            });
            $scope.setSelection = function(gridApi) {
                $scope.mySelections = gridApi.selection.getSelectedRows();
                if($scope.mySelections.length > 0) {
                    $scope.selectedPatient = _.pluck($scope.mySelections, 'patient_uuid');
                    $scope.print_url = "{{ route('patient.print.card') }}/"+$scope.selectedPatient;
                    $scope.mail_url = "{{ route('patient.mail') }}/"+$scope.selectedPatient;
                }
                if($scope.mySelections.length == 1) {
                    $scope.selected = $scope.mySelections[0];
                    $scope.selectedSurgeryTypes = $scope.selected.surgeryType.data;
                    $scope.show_url = $scope.moduleUrl + $scope.selected.id + '';
                    $scope.diagnosis_url = $scope.moduleUrl + $scope.selected.id + '/add-diagnosis';
                    $scope.anaesthetic_url = $scope.moduleUrl + $scope.selected.id + '/add-anaesthetic';
                    $scope.delete_url = $scope.moduleUrl + $scope.selected.id + '/delete';
                    $scope.diagnosis_print_url = $scope.moduleUrl + $scope.selected.id + '/diagnosis-print';
                }
                else {
                    $scope.selected = null;
                }
            };
            gridOptions.multiSelect = true;
            $scope.addData = function() {
                $('#add-patient-code-modal').modal('hide');
                var data = {};
                data.id = null;
                data.field_name = 'name';
                data.new_value = 'New Patient Name';
                $http.post($scope.moduleUrl + '?ajax=true', data).success(function (response) {
                    window.location.reload(true);
                });
            };
            $scope.addAnaesthetic = function() {
                myModal.open();
            };

            $scope.addPatientCode = function() {
                $('#add-patient-code-modal').modal('show');
            };

            var nicNoError = '{!! $errors->has('nic_no')  !!}';
            var typeError = '{!! $errors->has('type')  !!}';

            (nicNoError || typeError) ? $('#add-patient-code-modal').modal('show') : $('#add-patient-code-modal').modal('hide')
            $scope.disableNic = false;
            $scope.showNic = false;
            $scope.typeChange = function() {
                if($scope.type == 'nic_no') {
                    $scope.disableNic = false;
                    $scope.showNic = true;
                }
                if($scope.type == 'nic_no_have_not') {
                    $scope.disableNic = true;
                    $scope.showNic = true;
                }
            };
            $scope.addDiagnosisCard = function() {
                $('#select-surgery-type-modal').modal('show');
            };
            $scope.enableAddDiagnosis = false;
            $scope.diagnosisTypeChange = function() {
                $scope.enableAddDiagnosis = false;
                if($scope.diagnosisType == 'update_diagnosis') {
                    $scope.enableAddDiagnosis = true;
                }
            };
            $scope.enableUpdateDiagnosis = false;
            $scope.surgeryTypeChange = function() {
                $scope.enableUpdateDiagnosis = false;
                if($scope.selectedSurgeryType) {
                    $scope.selectedSurgery = _.where($scope.selectedSurgeryTypes, {id: parseInt($scope.selectedSurgeryType)})[0];
                    $scope.enableUpdateDiagnosis = true;
                    $scope.exist_diagnosis_url = $scope.moduleUrl + $scope.selected.id + '/surgery-type/'+ $scope.selectedSurgery.id + '/existing-diagnosis/'+ $scope.selectedSurgery['diagnosis_id'];
                }
            };

            $scope.printCard = function() {
                $scope.selectedPatient = _.pluck($scope.mySelections, 'patient_uuid');
                $scope.print_url = "{{ route('patient.print.card') }}/";
                var data = {};
                data.patients = $scope.selectedPatient;
                $http.post($scope.printCardUrl + '?ajax=true', data).success(function (response) {

                });
            };
            $scope.sendMail = function() {
                swal({
                    title: "Are you sure?",
                    text: "If you send patient from list to mail you can't add back.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, do it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: true,
                    closeOnCancel: true
                }, function (isConfirm) {
                    if (isConfirm) {

                    }
                });
            };


        }]);
    </script>
@endsection