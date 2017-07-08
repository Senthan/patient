@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.home.index') }}">Home</a></li>
        <li class="active">Patients</li>
    </ul>

<div ng-controller="PatientController">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a ng-href="{{ route('patient.create') }}" class="button ui big positive labeled icon">
                <i class="icon add"></i>Create
            </a>
            <a ng-show="selected" ng-href="@{{ diagnosis_url  }}" class="button ui big positive labeled icon">
                <i class="icon add"></i>First clinic visit
            </a>
            <a ng-show="selected" ng-href="@{{ non_surgical_url  }}" class="button ui big labeled icon olive ">
                <i class="icon add"></i>Non Surgical
            </a>
            <a ng-show="selected" ng-href="@{{ surgical_url  }}" class="button ui big labeled icon violet">
                <i class="icon add"></i>Surgical
            </a>
            <a ng-show="selected" ng-href="@{{ refferal_url  }}" class="button ui big labeled icon pink">
                <i class="icon add"></i>Refferal
            </a>
            <a ng-show="selected" ng-href="@{{ non_surgical_follow_up_url  }}" class="button ui big labeled icon pink">
                <i class="icon add"></i>Non Surgical Follow up
            </a>
            <a ng-show="selected" ng-href="@{{ surgical_follow_up_url  }}" class="button ui big labeled icon pink">
                <i class="icon add"></i>Surgical Follow up
            </a>
            <a ng-show="selected" ng-href="@{{ show_url }}" class="button ui big labeled icon a-load orange">
                <i class="list layout icon"></i>Summary
            </a>
            <a ng-show="selected" ng-href="@{{ delete_url }}" class="button ui big negative labeled icon a-load ">
                <i class="icon trash"></i>Delete
            </a>
        </div>
        <div class="panel-body">
            <div ui-grid="gridOptions" ui-grid-pagination ui-grid-selection ui-grid-edit ui-grid-resize-columns ui-grid-move-columns class="grid"></div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('.ui.dropdown')
                .dropdown();
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
                { displayName: 'OSC No', field: 'patient_uuid', enableCellEdit: false, minWidth: 100, width: 130},
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

                if($scope.mySelections.length == 1) {
                    $scope.selected = $scope.mySelections[0];
                    $scope.show_url = $scope.moduleUrl + $scope.selected.id + '';
                    $scope.edit_url = $scope.moduleUrl + $scope.selected.id + '/edit';
                    $scope.diagnosis_url = $scope.moduleUrl + $scope.selected.id + '/add-diagnosis';
                    $scope.non_surgical_url = $scope.moduleUrl + $scope.selected.id + '/non-surgical';
                    $scope.surgical_url = $scope.moduleUrl + $scope.selected.id + '/surgical';
                    $scope.refferal_url = $scope.moduleUrl + $scope.selected.id + '/refferal';
                    $scope.delete_url = $scope.moduleUrl + $scope.selected.id + '/delete';
                    $scope.non_surgical_follow_up_url = $scope.moduleUrl + $scope.selected.id + '/non-surgical-followup';
                    $scope.surgical_follow_up_url = $scope.moduleUrl + $scope.selected.id + '/surgical-followup';
                    if ($scope.selected.diagnosis && $scope.selected.diagnosis.data.length) {
                        $scope.exist_diagnosis_url = $scope.moduleUrl + $scope.selected.id + '/existing-diagnosis/'+ $scope.selected.diagnosis.data[0].id;
                    }
                }
                else {
                    $scope.selected = null;
                }
            };
        }]);
    </script>
@endsection