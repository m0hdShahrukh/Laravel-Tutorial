<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Welcome, {{$name ?? "Guest"}}</h1>
    <h1>Your Lucky Number is <span style="color:red;">{{$id}}</span></h1>

        {!! $demo !!}
        {{-- @if ($name == "")
        <h1>{{"Name is Empty Please Enter Your Name"}}</h1>
            @elseif($name == "Mohd Shahrukh")
            <h1>{{"Name is Correct" }} <span style="color:red;">{{$name}}</span></h1>
            @else
            <h1>{{"Name is Incorrect"}}</h1>
        @endif --}}
        @unless ($name == "Mohd Shahrukh")
        {{"Name is correct"}}
        @endunless
        {{"Name is incorrect"}}
</body>
</html>