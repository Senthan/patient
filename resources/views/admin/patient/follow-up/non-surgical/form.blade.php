<style>
    label {
        font-size: 15px !important;
    }
</style>

<div class="field">
    <label>Date</label><div class="input-group">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        {!! Form::text('date') !!}
    </div>
    <p class="help-block">{!! ($errors->has('date') ? $errors->first('date') : '') !!}</p>
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

@section('script')
    <script>
        $(function () {

            $('#date').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        });
    </script>
@endsection