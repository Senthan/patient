<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Teaching Hospital | Admin Panel | Document</title>
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            min-width: 320px;
            background: #fff;
            font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
            font-size: 19px;
            line-height: 1.4285em;
            color: rgba(0,0,0,.87);
            font-smoothing: antialiased;
        }
    </style>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}

</head>
<body>

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h1>{{ $patient->name }}</h1>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date of Admission</th>
                        <th>Date of Discharge</th>
                        <th>Diagnosis</th>
                        <th>Side</th>
                        <th>Consultant</th>
                        <th>Review Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $diagnosis->admission_date }}</td>
                        <td>{{ $diagnosis->discharge_date }}</td>
                        <td>{{ $diagnosis->diagnosis }}</td>
                        <td>{{ $diagnosis->consultant }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="well">
                History:<br>
                {{ $diagnosis->history }}
            </div>
            <div class="well">
                Examination:<br>
                History:<br>
                {{ $diagnosis->examination }}
            </div>
            <div class="well">
                Investigation:<br>
                {{ $diagnosis->investigation }}
            </div>
            <div class="well">
                Treatment:<br>
                {{ $diagnosis->treatment }}
            </div>
            <div class="well">
                follow up Plan &amp; Referrals:
                {{ $diagnosis->follow_up }}
            </div>
        </div>
        <div class="panel-footer">

        </div>
    </div>

</body>
</html>
