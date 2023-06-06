<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Bem Vindo, {{$data['nome']}}!!</h1> --}}
     <h2>{{-- COMENTARIO é 2 ifes"--" --}}</h2>
     {{-- <p>{!! $data['html'] !!}</p> --}}

     {{-- @if($data['nome'] === "Miael")
     <h1>Sim</h1>
     @else
     <h1>Não</h1>
     @endif --}}

   <div >
    <h1>For</h1>
    @for ($i = 1; $i < 10; $i++) <p>{{$i}}</p>
        @endfor
        <br>
        <h1>For each</h1>
        @foreach ($ingredientes as $item)
        <p >
            {{ $item }}
            -
            @component('components.botao')
            @slot('href')
                https://google.com
            @endslot
            @slot('cor')
                blueviolet
            @endslot
            Editar
            @endcomponent

            @component('components.botao')
            @slot('cor')
            red
            @endslot
            Deletar
            @endcomponent

        </p>

        @endforeach
   </div>
</body>
</html>
