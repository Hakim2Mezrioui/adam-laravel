<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- 
        int, long
        float, double
        boolean, bool
        string, str
        object
    --}}

    @if(1 == 1)
        {{-- {{ json_encode([1, 2, 3]) }} --}}
        <?= json_encode([1, 2, 3]) ?>
        <?php 
        // fafasdfa php native
        # fasdfsad php native
        ?>
        {{-- comment in laravel --}}
        @php print_r([1, 2, "three" => 3, "four" => 4, 10]) @endphp 
    @endif

    <br />

    @php $array=["HAKIM", "ADAM", 33, 29, true, false, 5.2] @endphp

    @foreach($array as $value)
        {{ $value  }}
    @endforeach


    @php $i = 0 @endphp

    @while($i < count($array)) 
        {{ $array[$i] }}

        @php $i++ @endphp
    @endwhile

    @include('header')

</body>
</html>