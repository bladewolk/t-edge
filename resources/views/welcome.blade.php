<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" class="row justify-content-between mt-4">
        <div>
            <label for="">Date from:</label>
            <input type="date" name="from" value="{{ request('from') }}">
        </div>
        <div>
            <label for="">Date to:</label>
            <input type="date" name="to" value="{{ request('to') }}">
        </div>
        <div>
            <label for="">Country id</label>
            <select name="country_id">
                <option disabled selected value> -- select --</option>
                @foreach($countries as $country)
                    <option value="{{ $country }}" {{ request('country_id') == $country ? 'selected' :'' }}>
                        {{ $country }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">User id</label>
            <select name="user_id">
                <option disabled selected value> -- select --</option>
                @foreach($users as $user)
                    <option value="{{ $user }}" {{ request('user_id') == $user ? 'selected' :'' }}>
                        {{ $user }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <button class="btn btn-success">
                Submit
            </button>
        </div>
    </form>

    <div class="row mt-4">
        @if(!$logs->isEmpty())
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>Date</td>
                    <td>Success</td>
                    <td>Failed</td>
                </tr>
                </thead>
                <tbody>
                @foreach($logs as $key => $logs)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $logs->where('log_success', true)->count() }}</td>
                        <td>{{ $logs->where('log_success', false)->count() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-info">Sorry, no results</div>
        @endif
    </div>
</body>
</html>
