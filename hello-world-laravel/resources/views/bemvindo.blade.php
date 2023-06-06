<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="display: flex;justify-content: space-around;padding-top: 30px">
        @foreach ($pessoas as $pessoa)
            @component('components.avatares')
                @slot('img')
                    {{ $pessoa['image'] }}
                @endslot
                @slot('nome')
                    {{ $pessoa['nome'] }}
                @endslot
                @slot('aniversario')
                    {{ $pessoa['birth'] }}
                @endslot
                @slot('idade')
                    {{ $pessoa['idade'] }}
                @endslot
            @endcomponent
        @endforeach
    </div>
</body>

</html>
