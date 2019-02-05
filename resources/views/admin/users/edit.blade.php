<h1> Edição users</h1>
<hr>

<form action="{{route('user.update', ['user' => $user->id])}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome Usuário</label><br>
        <input type="text" name="name" value="{{$user->name}}"><br>
        @if($errors->has('name'))
            {{$errors->first('name')}}
        @endif
    </p>

    <p>
        <label>Foto</label><br>
        <input type="text" name="foto" value="{{$user->foto}}"><br>
        @if($errors->has('foto'))
            {{$errors->first('foto')}}
        @endif
    </p>

    <p>
        <label>Graduação</label><br>
        <input type="text" name="graduacao" value="{{$user->graduacao}}"><br>
        @if($errors->has('graduacao'))
            {{$errors->first('graduacao')}}
        @endif
    </p>


    <p>
        <label>Nome Guerra</label><br>
        <input type="text" name="nomeGuerra" value="{{$user->nomeGuerra}}"><br>
        @if($errors->has('nomeGuerra'))
            {{$errors->first('nomeGuerra')}}
        @endif
    </p>


    <p>
        <label>Seção</label><br>
        <input type="text" name="secao" value="{{$user->secao}}"><br>
        @if($errors->has('secao'))
            {{$errors->first('secao')}}
        @endif
    </p>


    <p>
        <label>Identidade Militar</label><br>
        <input type="text" name="idtMil" value="{{$user->idtMil}}"><br>
        @if($errors->has('idtMil'))
            {{$errors->first('idtMil')}}
        @endif
    </p>


    <p>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{$user->cpf}}"><br>
        @if($errors->has('cpf'))
            {{$errors->first('cpf')}}
        @endif
    </p>

    <p>
        <label>RG</label><br>
        <input type="text" name="rg" value="{{$user->rg}}"><br>
        @if($errors->has('rg'))
            {{$errors->first('rg')}}
        @endif
    </p>

    <p>
        <label>Data Nascimento</label><br>
        <input type="text" name="dataNasc" value="{{$user->dataNasc}}"><br>
        @if($errors->has('dataNasc'))
            {{$errors->first('dataNasc')}}
        @endif
    </p>

    <p>
        <label>Data Praça</label><br>
        <input type="text" name="dataPraca" value="{{$user->dataPraca}}"><br>
        @if($errors->has('dataPraca'))
            {{$errors->first('dataPraca')}}
        @endif
    </p>

    <p>
        <label>Escolaridade</label><br>
        <input type="text" name="escolaridade" value="{{$user->escolaridade}}"><br>
        @if($errors->has('escolaridade'))
            {{$errors->first('escolaridade')}}
        @endif
    </p>

    <p>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="{{$user->telefone}}"><br>
        @if($errors->has('telefone'))
            {{$errors->first('telefone')}}
        @endif
    </p>

    <p>
        <label>Endereço</label><br>
        <input type="text" name="endereco" value="{{$user->endereco}}"><br>
        @if($errors->has('endereco'))
            {{$errors->first('endereco')}}
        @endif
    </p>

    <p>
        <label>E-mail</label><br>
        <input type="text" name="email" value="{{$user->email}}"><br>
        @if($errors->has('email'))
            {{$errors->first('email')}}
        @endif
    </p>

    <p>
        <label>Senha</label><br>
        <input type="text" name="password" value="{{$user->password}}">
    </p>

    <input type="submit" value="Salvar">
</form>