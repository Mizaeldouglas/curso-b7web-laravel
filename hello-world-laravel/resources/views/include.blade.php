{{-- <h1>Include @include('components/componente', ['name' => 'Mizael', 'idade' => 39])</h1> --}}
<div style="display: flex;justify-content: space-around;padding-top: 30px">
    @foreach ($pessoas as $pessoa)
        @include('components/avatares', [
            'img' => $pessoa['image'],
            'nome' => $pessoa['nome'],
            'idade' => $pessoa['idade'],
            'aniversario' => $pessoa['birth'],
        ])
    @endforeach
</div>
