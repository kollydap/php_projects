{{-- <html>
    <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <h1 class="ine bac">Helllo</h1>
    </body>
</html> --}}
@extends('layout')
@section('content')
<h2>{{$gig['title']}}</h2>
</br>
{{$gig['description']}}
@endsection