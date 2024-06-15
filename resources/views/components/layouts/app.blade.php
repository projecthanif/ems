<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{env('APP_NAME')}}</title>
@include('components.layouts.css')

<body>
<div class="main-wrapper">
    @include('components.layouts.header')
    @include('components.layouts.sidebar')

    {{$slot}}

</div>
@include('components.layouts.script')
</body>

</html>
