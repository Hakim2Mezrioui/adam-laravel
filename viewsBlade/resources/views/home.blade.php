<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
    {{-- @if(true)
        <h1>Welcome to Home</h1>

    @elseif(false)
        <h1>Hi Person</h1>

    @else
        <h1>You're welcome</h1>
    @endif --}}

    {{-- @if(strlen($name) == 1)
        <h1>Welcome to Home</h1>

    @elseif(strlen($name) > 0)
        <h1>Hi {{ $name }}</h1>
    @else
        <h1>You're welcome</h1>
    @endif --}}
    
    <ul>
        <?php echo count($names) ?>
        <?= count($names) ?>
        @foreach ($names as $name) {{-- like a map in javascript --}}
            <li>-- {{ $name }} --</li>
        @endforeach
    </ul>

    <ul>
        @while($i <= 3)
            <li>{{ $names[$i] }}</li>
            
            <?php $i++ ?>

            {{-- @php $i++ @endphp --}}

        @endwhile
    </ul>

</body>
</html>