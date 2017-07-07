@extends('admin.layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.home.index') }}">Home</a></li>
        <li class="active">Patients</li>
    </ul>

<div ng-controller="NonSurgicalController">
    <div class="panel panel-default">
        <div class="panel-heading">
            <a ng-show="!selected" ng-href="{{ route('non.surgical.create') }}" class="button ui big positive labeled icon">
                <i class="icon add"></i>Create
            </a>
            <a ng-show="selected" ng-href="@{{ delete_url }}" class="button ui big negative labeled icon a-load ">
                <i class="icon trash"></i>Delete
            </a>
            <a ng-show="selected" ng-href="@{{ diagnosis_url  }}" class="button ui big positive labeled icon">
                <i class="icon add"></i>Edit
            </a>
            <a ng-show="selected" ng-href="@{{ show_url }}" class="button ui big labeled icon a-load orange">
                <i class="list layout icon"></i>Full Details
            </a>
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
                <div ui-grid="gridOptions" ui-grid-pagination ui-grid-selection ui-grid-resize-columns ui-grid-move-columns class="grid"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        app.controller('NonSurgicalController', ['$scope', '$http', function ($scope, $http) {
            $scope.moduleUrl = "{{ route('non.surgical.index') }}/";
            $scope.patients = [];
            var columnDefs = [
                { displayName: 'Patient ID', field: 'patient_uuid', minWidth: 100, width: 130},
                { displayName: 'Name', field: 'name', minWidth: 150, width: 150},
                { displayName: 'Age', field: 'age', minWidth: 60, width: 60},
                { displayName: 'Sex', field: 'sex', minWidth: 80, width: 80}
            ];

            gridOptions.columnDefs = columnDefs;
            gridOptions.onRegisterApi = function (gridApi) {
                $scope.gridApi = gridApi;
                gridApi.selection.on.rowSelectionChanged($scope,function(rows){
                    $scope.setSelection(gridApi);
                });
                gridApi.selection.on.rowSelectionChangedBatch($scope,function(rows){
                    $scope.setSelection(gridApi);
                });
            };
            $scope.gridOptions = gridOptions;
            $http.get($scope.moduleUrl + '?ajax=true').success(function (items) {
                $scope.gridOptions.data =  items;
            });
            $scope.setSelection = function(gridApi) {
                $scope.mySelections = gridApi.selection.getSelectedRows();
                if($scope.mySelections.length == 1) {
                    $scope.selected = $scope.mySelections[0];
                    $scope.show_url = $scope.moduleUrl + $scope.selected.id + '/policy';
                    $scope.edit_url = $scope.moduleUrl + $scope.selected.id + '/edit';
                    $scope.delete_url = $scope.moduleUrl + $scope.selected.id + '/delete';
                } else {
                    $scope.selected = null;
                }
            };


        }]);
    </script>
@endsection