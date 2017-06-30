
<div class="form-group {!! ($errors->has('consultant')) ? 'has-error' : '' !!} required">
    {!! Form::label('consultant', 'Consultant', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('staff_id', $consultants, null, ['class' => 'form-control']) !!}
        <p class="help-block">{!! ($errors->has('consultant') ? $errors->first('consultant') : '') !!}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('co_mobidities')) ? 'has-error' : '' }} required">
    {!! Form::label('co_mobidities', 'CO - Mobidities', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('co_mobidities', null, ['class' => 'form-control', 'placeholder' => 'CO - Mobidities']) !!}
        <p class="help-block">{{ ($errors->has('co_mobidities') ? $errors->first('co_mobidities') : '') }}</p>
    </div>
</div>

<div class="form-group {{ ($errors->has('drugs_on')) ? 'has-error' : '' }} required">
    {!! Form::label('drugs_on', 'Drugs On', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('drugs_on', null, ['class' => 'form-control', 'placeholder' => 'Drugs On']) !!}
        <p class="help-block">{{ ($errors->has('drugs_on') ? $errors->first('drugs_on') : '') }}</p>
    </div>
</div>


<div class="form-group {!! ($errors->has('height')) ? 'has-error' : '' !!} required">
    <div class="col-md-4">
    {!! Form::text('height', null, ['class' => 'form-control', 'placeholder' => 'Height']) !!}
    </div>
    <div class="col-md-4">
    {!! Form::text('weight', null, ['class' => 'form-control', 'placeholder' => 'Weight']) !!}
    </div>
    <div class="col-md-4">
    {!! Form::text('bmi', null, ['class' => 'form-control', 'placeholder' => 'BMI']) !!}
    </div>
</div>


<div class="form-group {{ ($errors->has('date')) ? 'has-error' : '' }} required">
    {!! Form::label('date', 'Date', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-4">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
        </div>
        <p class="help-block">{{ ($errors->has('date') ? $errors->first('date') : '') }}</p>
    </div>
</div>

<div class="form-group {{ ($errors->has('refferred_from')) ? 'has-error' : '' }} required">
    {!! Form::label('refferred_from', 'Refferred from', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('refferred_from', null, ['class' => 'form-control', 'placeholder' => 'Refferred From']) !!}
        <p class="help-block">{{ ($errors->has('refferred_from') ? $errors->first('refferred_from') : '') }}</p>
    </div>
</div>

<div class="form-group {{ ($errors->has('presenting_complain')) ? 'has-error' : '' }} required">
    {!! Form::label('presenting_complain', 'Presenting Complain', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('presenting_complain', null, ['class' => 'form-control', 'placeholder' => 'Presenting Complain']) !!}
        <p class="help-block">{{ ($errors->has('presenting_complain') ? $errors->first('presenting_complain') : '') }}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('past_surgical_history')) ? 'has-error' : '' }} required">
    {!! Form::label('past_surgical_history', 'Past Surgical History', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('past_surgical_history', null, ['class' => 'form-control', 'placeholder' => 'Past Surgical History']) !!}
        <p class="help-block">{{ ($errors->has('past_surgical_history') ? $errors->first('past_surgical_history') : '') }}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('allergic_history')) ? 'has-error' : '' }} required">
    {!! Form::label('allergic_history', 'Allergic History', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('allergic_history', null, ['class' => 'form-control', 'placeholder' => 'Allergic History']) !!}
        <p class="help-block">{{ ($errors->has('allergic_history') ? $errors->first('allergic_history') : '') }}</p>
    </div>
</div>

<div class="form-group {{ ($errors->has('history')) ? 'has-error' : '' }} required">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3>Motor Examination</h3>
            </div>
            <div class="panel-body">
                <div class="ui green segment">

                    <table class="ui celled table">
                        <thead>
                        <tr>
                            <th class="header">Root</th>
                            <th class="header"> Examination </th>
                            <th colspan="2" class="header"> Grade 0 </th>
                            <th colspan="2" class="header"> Grade 1 </th>
                            <th colspan="2" class="header"> Grade 2 </th>
                            <th colspan="2" class="header"> Grade 3 </th>
                            <th colspan="2" class="header"> Grade 4 </th>
                            <th colspan="2" class="header"> Grade 5 </th>
                        </tr>
                        <tr>
                            <th class="header">  </th>
                            <th class="header">  </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                            <th class="header"> R </th>
                            <th class="header"> L </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="item1">
                            <td>C5</td>
                            <td>Elbow extensors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>C6</td>
                            <td>Wrist extensors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>C8</td>
                            <td>Finger flexors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>T1</td>
                            <td>Small Finger Abductors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>L2</td>
                            <td>Hip flexors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>L3</td>
                            <td>Knee extensors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>L4</td>
                            <td>Ankle dorsiflexors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="item1">
                            <td>L5</td>
                            <td>Long toe extensors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                        <tr class="item1">
                            <td>S1</td>
                            <td>Ankle plantar flexors</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>


                    <table class="ui celled table">
                        <thead>
                            <tr><th colspan="1"></th>
                                <th colspan="1"></th>
                                <th colspan="5">Grading</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="ui ribbon label">Reflexes</div>
                            </td>
                            <td></td>
                            <td>Grade 0</td>
                            <td>Grade 1</td>
                            <td>Grade 2</td>
                            <td>Grade 3</td>
                            <td>Grade 4</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biceps C5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Brachioradialis C6</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Triceps C7</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Fingers C8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Hoffman sign</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Knee L4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ankle S1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>



                </div>

             </div>
        </div>
    </div>
</div>



<div class="form-group {{ ($errors->has('history')) ? 'has-error' : '' }} required">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3>Activities of Daily Living</h3>
            </div>
            <div class="panel-body">
                <div class="ui blue segment">
                    <table class="ui definition table">
                        <thead>
                        <tr>
                            <th>Activities</th>
                            <th>0</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Bowels</td>
                            <td>Incontinent / need enema</td>
                            <td>Occasional</td>
                            <td>Continent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bladder</td>
                            <td>Incontinent / catheterised</td>
                            <td>Occasional</td>
                            <td>Continent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Grooming</td>
                            <td>Needs help</td>
                            <td>Occasional</td>
                            <td>Independent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Toilet use</td>
                            <td>Dependant</td>
                            <td>Need some help</td>
                            <td>Independent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Feeding</td>
                            <td>Unable</td>
                            <td>Need help</td>
                            <td>Independent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Transfer</td>
                            <td>Unable / no sitting Balance</td>
                            <td>Major help, can sit</td>
                            <td>Minor help</td>
                            <td>Indep</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td>Immobile</td>
                            <td>Wheel chair independent</td>
                            <td>walks with help</td>
                            <td>Indep</td>
                        </tr>
                        <tr>
                            <td>Dressing</td>
                            <td>Dependent</td>
                            <td>Needs help</td>
                            <td>Independentp</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Stairs</td>
                            <td>Unable</td>
                            <td>Needs help</td>
                            <td>Independentp</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bathing</td>
                            <td>Dependent</td>
                            <td>Independentp</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Bathal Index</td>
                            <td><input type="text" name="bath_0"/></td>
                            <td><input type="text" name="bath_1"/></td>
                            <td><input type="text" name="bath_2"/></td>
                            <td><input type="text" name="bath_3"/></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui two column grid">
    <div class="column">
        <div class="ui fluid card">
            <div class="image">
                <img src="{{ asset('assets/images/sensory.jpg') }}">
            </div>
            <div class="content">
                <a class="header">Sensory Examination</a>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui fluid card">
            <div class="content">
                {!! Form::textarea('sensory', null, ['class' => 'form-control', 'placeholder' => 'Sensory Examination']) !!}
            </div>
        </div>
    </div>
</div>

<div class="form-group {{ ($errors->has('imaging')) ? 'has-error' : '' }} required">
    {!! Form::label('imaging', 'IMAGING', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('imaging', null, ['class' => 'form-control', 'placeholder' => 'IMAGING']) !!}
        <p class="help-block">{{ ($errors->has('imaging') ? $errors->first('imaging') : '') }}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('x_ray')) ? 'has-error' : '' }} required">
    {!! Form::label('x_ray', 'X-RAY', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('x_ray', null, ['class' => 'form-control', 'placeholder' => 'X-RAY']) !!}
        <p class="help-block">{{ ($errors->has('x_ray') ? $errors->first('x_ray') : '') }}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('ct_scan')) ? 'has-error' : '' }} required">
    {!! Form::label('ct_scan', 'CT SCAN', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('ct_scan', null, ['class' => 'form-control', 'placeholder' => 'CT SCAN']) !!}
        <p class="help-block">{{ ($errors->has('ct_scan') ? $errors->first('ct_scan') : '') }}</p>
    </div>
</div>


<div class="form-group {{ ($errors->has('miri_scan')) ? 'has-error' : '' }} required">
    {!! Form::label('miri_scan', 'MIRI SCAN', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('miri_scan', null, ['class' => 'form-control', 'placeholder' => 'MIRI SCAN']) !!}
        <p class="help-block">{{ ($errors->has('miri_scan') ? $errors->first('miri_scan') : '') }}</p>
    </div>
</div>

<div class="form-group {{ ($errors->has('other_imaging')) ? 'has-error' : '' }} required">
    {!! Form::label('other_imaging', 'OTHER IMAGING', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::textarea('other_imaging', null, ['class' => 'form-control', 'placeholder' => 'OTHER IMAGING']) !!}
        <p class="help-block">{{ ($errors->has('other_imaging') ? $errors->first('other_imaging') : '') }}</p>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Treatment/Operation Process</h2>
    </div>
    <div class="panel-body">

        <div class="form-group required">
            <div class="grid-9">
                <ul class="nav nav-tabs tab-content-tab">
                    @foreach($languages as $key => $language)
                        <li class="{!! $key == 0 ? 'active' : ''!!}"><a href="#treatment_treatment-{!! $key !!}" data-toggle="tab" class="{!! ($errors->has($language->code.'.treatment_template')) ? 'nav-tab-has-error' : '' !!}">{!! $language->language !!}</a></li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach($languages as $key => $language)
                        <div class="tab-pane {!! $key == 0 ? 'active in' : ''!!} {!! ($errors->has($language->code.'.treatment_template')) ? 'has-error' : '' !!}" id="treatment_template-{!! $key !!}">
                            {!! Form::textarea($language->code."_treatment_template", null, ['ck-editor', 'class' => 'form-control', 'placeholder' => '','ng-model'=> $language->code.'treatmentTemplate']) !!}
                            <p class="help-block">{!! ($errors->has($language->code.'.treatment_template') ? $errors->first($language->code.'.treatment_template') : '') !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="grid-3 col-md-3">
                <img src="@{{ treatmentTemplateImageUrl }}" class="img-responsive template-img"/>
{{--                <img src="{!! asset('resources/templates/template-img.jpg') !!}" class="img-responsive template-img"/>--}}
            </div>
        </div>

    </div>
</div>

