<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();


$router->group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => ''], function($router) {
    $router->group(['middleware' => 'auth'], function ($router) {
        $router->get('/', ['uses' => 'HomeController@index', 'as' => 'admin.home.index']);

//         user management
//        $router->group(['prefix' => 'user'], function ($router) {
//            $router->get('/', ['uses' => 'UserController@index', 'as' => 'user.index']);
//            $router->get('create', ['uses' => 'UserController@create', 'as' => 'user.create']);
//            $router->post('/', ['uses' => 'UserController@store', 'as' => 'user.store']);
//            $router->get('{user}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
//            $router->patch('{user}', ['uses' => 'UserController@update', 'as' => 'user.update']);
//            $router->get('{user}/delete', ['uses' => 'UserController@delete', 'as' => 'user.delete']);
//            $router->delete('{user}', ['uses' => 'UserController@destroy', 'as' => 'user.destroy']);
//            $router->get('{user}', ['uses' => 'UserController@show', 'as' => 'staff.show']);
//        });


//        drug management
        $router->group(['prefix' => 'drug'], function ($router) {
            $router->get('/', ['uses' => 'DrugController@index', 'as' => 'drug.index']);
            $router->get('create', ['uses' => 'DrugController@create', 'as' => 'drug.create']);
            $router->post('/', ['uses' => 'DrugController@store', 'as' => 'drug.store']);
            $router->get('{drug}/edit', ['uses' => 'DrugController@edit', 'as' => 'drug.edit']);
            $router->patch('{drug}', ['uses' => 'DrugController@update', 'as' => 'drug.update']);
            $router->get('{drug}/delete', ['uses' => 'DrugController@delete', 'as' => 'drug.delete']);
            $router->delete('{drug}', ['uses' => 'DrugController@destroy', 'as' => 'drug.destroy']);
        });

//        dose management
        $router->group(['prefix' => 'dose'], function ($router) {
            $router->get('/', ['uses' => 'DoseController@index', 'as' => 'dose.index']);
            $router->get('create', ['uses' => 'DoseController@create', 'as' => 'dose.create']);
            $router->post('/', ['uses' => 'DoseController@store', 'as' => 'dose.store']);
            $router->get('{dose}/edit', ['uses' => 'DoseController@edit', 'as' => 'dose.edit']);
            $router->patch('{dose}', ['uses' => 'DoseController@update', 'as' => 'dose.update']);
            $router->get('{dose}/delete', ['uses' => 'DoseController@delete', 'as' => 'dose.delete']);
            $router->delete('{dose}', ['uses' => 'DoseController@destroy', 'as' => 'dose.destroy']);
        });


        // Staff management
        $router->group(['prefix' => 'staff'], function ($router) {
            $router->get('/', ['uses' => 'StaffController@index', 'as' => 'staff.index']);
            $router->get('create', ['uses' => 'StaffController@create', 'as' => 'staff.create']);
            $router->post('/', ['uses' => 'StaffController@store', 'as' => 'staff.store']);
            $router->get('{staff}/edit', ['uses' => 'StaffController@edit', 'as' => 'staff.edit']);
            $router->patch('{staff}', ['uses' => 'StaffController@update', 'as' => 'staff.update']);
            $router->get('{staff}/delete', ['uses' => 'StaffController@delete', 'as' => 'staff.delete']);
            $router->delete('{staff}', ['uses' => 'StaffController@destroy', 'as' => 'staff.destroy']);
            $router->get('{staff}', ['uses' => 'StaffController@show', 'as' => 'staff.show']);
            $router->get('search/{q?}', ['uses' => 'StaffController@search', 'as' => 'staff.search']);
        });


        // patient management
        $router->group(['prefix' => 'patient'], function ($router) {
            $router->get('/', ['uses' => 'PatientController@index', 'as' => 'patient.index']);
            $router->post('/', ['uses' => 'PatientController@store', 'as' => 'patient.store']);
            $router->get('{patient}/existing-diagnosis/{diagnosis}', ['uses' => 'PatientController@existDiagnosis', 'as' => 'patient.exist.diagnosis']);
            $router->post('{patient}/existing-diagnosis/{diagnosis}', ['uses' => 'PatientController@updateDiagnosis', 'as' => 'patient.exist.diagnosis']);
            $router->get('{patient}/add-diagnosis', ['uses' => 'PatientController@addDiagnosis', 'as' => 'patient.add.diagnosis']);
            $router->get('{patient}/add-anaesthetic', ['uses' => 'PatientController@addAnaesthetic', 'as' => 'patient.add.anaesthetic']);
            $router->post('{patient}/add-diagnosis', ['uses' => 'PatientController@storeDiagnosis', 'as' => 'patient.store.diagnosis']);
            $router->post('{patient}/add-anaesthetic', ['uses' => 'PatientController@storeAnaesthetic', 'as' => 'patient.store.anaesthetic']);
            $router->get('{patient}/pdf', ['uses' => 'PatientController@pdf', 'as' => 'patient.pdf']);
            $router->post('patient/UUID', ['uses' => 'PatientController@uuid', 'as' => 'patient.uuid']);
            $router->get('{patient}/delete', ['uses' => 'PatientController@delete', 'as' => 'patient.delete']);
            $router->delete('{patient}', ['uses' => 'PatientController@destroy', 'as' => 'patient.destroy']);
            $router->get('{patient}', ['uses' => 'PatientController@show', 'as' => 'patient.show']);

            $router->get('patient/card/{patients?}', ['uses' => 'PatientController@printCard', 'as' => 'patient.print.card']);
            $router->get('mail/{patients?}', ['uses' => 'PatientController@sendMail', 'as' => 'patient.mail']);
            $router->get('{patient}/manage', ['uses' => 'PatientController@manageProfile', 'as' => 'patient.manage']);
            $router->patch('{patient}/manage', ['uses' => 'PatientController@saveProfile', 'as' => 'patient.save.profile']);
            $router->post('{patient}/update/examination', ['uses' => 'PatientController@updateExamination', 'as' => 'patient.update.examination']);


            // print diagonsis
            $router->get('{patient}/diagnosis-print', ['uses' => 'PatientController@printDiagnosis', 'as' => 'patient.print.diagnosis']);


        });



        // treatment template management
        $router->group(['prefix' => 'treatment-template'], function ($router) {
            $router->get('/', ['uses' => 'TreatmentTemplateController@index', 'as' => 'treatment.template.index']);
            $router->get('create', ['uses' => 'TreatmentTemplateController@create', 'as' => 'treatment.template.create']);
            $router->post('/', ['uses' => 'TreatmentTemplateController@store', 'as' => 'treatment.template.store']);
            $router->get('{treatmentTemplate}/edit', ['uses' => 'TreatmentTemplateController@edit', 'as' => 'treatment.template.edit']);
            $router->patch('{treatmentTemplate}', ['uses' => 'TreatmentTemplateController@update', 'as' => 'treatment.template.update']);
            $router->get('{treatmentTemplate}/delete', ['uses' => 'TreatmentTemplateController@delete', 'as' => 'treatment.template.delete']);
            $router->delete('{treatmentTemplate}', ['uses' => 'TreatmentTemplateController@destroy', 'as' => 'treatment.template.destroy']);
            $router->get('{treatmentTemplate}', ['uses' => 'TreatmentTemplateController@show', 'as' => 'treatment.template.show']);

            $router->get('{treatmentTemplate}/delete-image', ['uses' => 'TreatmentTemplateController@deleteImage', 'as' => 'treatment.template.image.delete']);
            $router->delete('{treatmentTemplate}/destroy-image', ['uses' => 'TreatmentTemplateController@destroyImage', 'as' => 'treatment.template.image.destroy']);


            $router->get('{treatmentTemplate}/add-image', ['uses' => 'TreatmentTemplateController@addImage', 'as' => 'treatment.template.image.add']);
            $router->post('{treatmentTemplate}/upload-image', ['uses' => 'TreatmentTemplateController@uploadImage', 'as' => 'treatment.template.image.upload']);

        });

        // Chat room

        $router->group(['prefix' => 'chat'], function ($router) {
            $router->get('/', ['as' => 'chat.index', 'uses' => 'ChatController@index']);
            $router->get('/{staff}', ['as' => 'chat.staff', 'uses' => 'ChatController@index']);
            $router->post('/group', ['as' => 'group.chat', 'uses' => 'ChatController@groupChat']);
        });

        // Event
        $router->get('meeting/search/{q?}', ['as' => 'meeting.search', 'uses' => 'EventController@searchMeetings']);
        $router->get('event', ['as' => 'event.index', 'uses' => 'EventController@index']);
        $router->get('event/create', ['as' => 'event.create', 'uses' => 'EventController@create']);
        $router->get('event/{event}/edit', ['as' => 'event.edit', 'uses' => 'EventController@edit']);
        $router->get('event/{event}', ['as' => 'event.show', 'uses' => 'EventController@show']);
        $router->get('event/{event}/delete', ['as' => 'event.delete', 'uses' => 'EventController@delete']);

        $router->post('event', ['as' => 'event.store', 'uses' => 'EventController@store']);
        $router->patch('event/{event}', ['as' => 'event.update', 'uses' => 'EventController@update']);
        $router->delete('event/{event}', ['as' => 'event.destroy', 'uses' => 'EventController@destroy']);

        $router->get('event/type/create', ['as' => 'event.type.create', 'uses' => 'EventTypeController@create']);
        $router->get('event/type/{eventType}/edit', ['as' => 'event.type.edit', 'uses' => 'EventTypeController@edit']);
        $router->post('event/type/', ['as' => 'event.type.store', 'uses' => 'EventTypeController@store']);
        $router->patch('event/type/{eventType}', ['as' => 'event.type.update', 'uses' => 'EventTypeController@update']);

    });
});