<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title></title>
    <link rel="icon" href="favicon.ico">
    <link href="{{asset('style.css')}}" rel="stylesheet">
</head>

<body>

{{$slot}}

<script defer src="{{asset('bundle.js')}}"></script>
</body>
</html>
