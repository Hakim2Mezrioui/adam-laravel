<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/inscription.css ">
</head>
<body>    
    <form method="post" action="store-inscription" enctype="multipart/form-data">
        @csrf
        {{-- {{ csrf_filed() }}  --}}
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" /> --}}
        <div>
            <label for="nom_complet">Nom Complet</label>
            <input value="{{old('nom_complet')}}" id="nom_complet" name="nom_complet" />

            @error('nom_complet')
            <p>{{$message}}</p>
            @enderror

        </div>
        <div> 
            <label for="age">Age</label>
            <input value="{{ old('age') }}" id="age" name="age" type="number" />
            @error('age')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="diplome">Diplome</label>
            <select name="diplome" id="diplome">
                <option value="esa">ESA</option>
                <option value="dev_fs">DEV_FS</option>
                <option value="fm">FM</option>
            </select>
        </div>
        
        <div>
            <label id="date_obtention">Date d'obtention</label>
            <input value="{{ old('date_obtention') }}" type="date" name="date_obtention" id="date_obtention" />
            @error('date_obtention')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="cv_user">Cv</label>
            <input value="{{ old('cv') }}" name="cv" id="cv_user" type="file" />
        </div>

        <div>
            <label for="email">Email</label>
            <input value="{{ old('email') }}" name="email" id="email" type="email" />
            @error("email")
                {{ $message }}
            @enderror
        </div>

        <button type="submit">envoyer</button>
    </form>

    {{-- {{ $errors }} --}}

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</body>
</html>

