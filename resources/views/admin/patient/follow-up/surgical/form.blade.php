<style>
    label {
        font-size: 15px !important;
    }
</style>


<div class="form-group {{ ($errors->has('date')) ? 'has-error' : '' }} required">
    {!! Form::label('date', 'Date', ['class' => 'col-md-3 control-label']) !!}
    <div class="col-md-6">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
        </div>
        <p class="help-block">{{ ($errors->has('date') ? $errors->first('date') : '') }}</p>
    </div>
</div>


<div class="field">
    <label>Post up</label>
    <div class="input-group">
        <div class="col-md-4">
            <div class="ui action input">
                <input type="text" placeholder="Days...">
                <button class="ui button">Days</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ui action input">
                <input type="text" placeholder="Weeks...">
                <button class="ui button">Weeks</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="ui action input">
                <input type="text" placeholder="Month...">
                <button class="ui button">Months</button>
            </div>
        </div>
    </div>
</div>

<div class="field">
    <label>Complain</label>
    {!! Form::textarea('complain', null, ['rows' => '3']) !!}
    <p class="help-block">{!! ($errors->has('complain') ? $errors->first('complain') : '') !!}</p>
</div>

<div class="field">
    <label>Examination</label>
    {!! Form::textarea('examination', null, ['rows' => '3']) !!}
    <p class="help-block">{!! ($errors->has('examination') ? $errors->first('examination') : '') !!}</p>
</div>

<div class="form-group {{ ($errors->has('history')) ? 'has-error' : '' }} required">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3>Motor Examination</h3>
            </div>
            <div class="panel-body">
                <div class="ui green segment">

                    <table class="ui celled table root-examination">
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
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C6</td>
                            <td>Wrist extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>C8</td>
                            <td>Finger flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 22)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>T1</td>
                            <td>Small Finger Abductors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L2</td>
                            <td>Hip flexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L3</td>
                            <td>Knee extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L4</td>
                            <td>Ankle dorsiflexors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>

                        <tr class="item1">
                            <td>L5</td>
                            <td>Long toe extensors</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>


                        <tr class="item1">
                            <td>S1</td>
                            <td>Ankle plantar flexors</td>
                            <td></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 5)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 6)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 7)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 8)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 9)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 10)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 11)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 12)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 13)->where('value', 1)->where('type', 'root_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        </tbody>
                    </table>


                    <table class="ui celled table reflexes-examination">
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
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Brachioradialis C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Triceps C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Fingers C8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Hoffman sign</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Knee L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Ankle S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 5)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 6)->where('value', 1)->where('type', 'reflexes_examination_followup')->first() ? 'active' : '' !!}"></td>
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
                <h3>Sensory Impairment</h3>
            </div>
            <div class="panel-body">
                <div class="ui blue segment">
                    <table class="ui celled table sensory-impairment">
                        <thead>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Cerrvical</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">C8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thoracic</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 6)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 7)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 8)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 9)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 10)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T10</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 11)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T11</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 12)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">T12</td>
                        </tr>
                        <tr>
                            <td>Lumbar</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">L5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sacral</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 5)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">S5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Caccxygeal</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'sensory_impairment_followup')->first() ? 'active' : '' !!}">Cx</td>
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
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group {{ ($errors->has('history')) ? 'has-error' : '' }} required">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <h3>Pain Scale</h3>
            </div>
            <div class="panel-body">
                <div class="ui blue segment">
                    <table class="ui celled table pain-scale">
                        <thead>
                        <tr>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 0)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">1</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">2</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">3</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">4</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">5</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 5)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">6</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 6)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">7</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 7)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">8</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 8)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">9</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 9)->where('value', 1)->where('type', 'pain_scale_followup')->first() ? 'active' : '' !!}">10</td>
                        </tr>
                        </thead>
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
                    <table class="ui definition table activities-examination">
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
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Incontinent / need enema</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 0)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bladder</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Incontinent / catheterised</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Continent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 1)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Grooming</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Occasional</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 2)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Toilet use</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependant</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Need some help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 3)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Feeding</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Need help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 4)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Transfer</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable / no sitting Balance</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Major help, can sit</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Minor help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 5)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Mobility</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Immobile</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Wheel chair independent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">walks with help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 6)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Indep</td>
                        </tr>
                        <tr>
                            <td>Dressing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 7)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Stairs</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Unable</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Needs help</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 8)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathing</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 1)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Dependent</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 2)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}">Independentp</td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 3)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                            <td class="{!! isset($examination) && $examination->where('row', 9)->where('col', 4)->where('value', 1)->where('type', 'activities_examination_followup')->first() ? 'active' : '' !!}"></td>
                        </tr>
                        <tr>
                            <td>Bathal Index</td>
                            <td colspan="4">
                                {!! Form::text('bath_0', null, ['class' => 'form-control', 'placeholder' => '', 'style' => 'width: 100%;', 'id' => 'bath_0', "onkeyup" => "keyupFunction()"]) !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="field">
    <label>Investigation</label>
    {!! Form::textarea('investigation', null, ['rows' => '3']) !!}
    <p class="help-block">{!! ($errors->has('investigation') ? $errors->first('investigation') : '') !!}</p>
</div>


<div class="field">
    <label>Management</label>
    {!! Form::textarea('management', null, ['rows' => '3']) !!}
    <p class="help-block">{!! ($errors->has('management') ? $errors->first('management') : '') !!}</p>
</div>

