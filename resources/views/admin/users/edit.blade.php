<h1> Edição users</h1>
<hr>

<form action="{{route('user.update', ['user' => $user->id])}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome Usuário</label><br>
        <input type="text" name="name" value="{{$user->name}}">
    </p>

    <p>
        <label>Foto</label><br>
        <input type="text" name="foto" value="{{$user->foto}}">
    </p>

    <p>
        <label>Graduação</label><br>
        <input type="text" name="graduacao" value="{{$user->graduacao}}">
    </p>


    <p>
        <label>Nome Guerra</label><br>
        <input type="text" name="nomeGuerra" value="{{$user->nomeGuerra}}">
    </p>


    <p>
        <label>Seção</label><br>
        <input type="text" name="secao" value="{{$user->secao}}">
    </p>


    <p>
        <label>Identidade Militar</label><br>
        <input type="text" name="idtMil" value="{{$user->idtMil}}">
    </p>


    <p>
        <label>CPF</label><br>
        <input type="text" name="cpf" value="{{$user->cpf}}">
    </p>

    <p>
        <label>RG</label><br>
        <input type="text" name="rg" value="{{$user->rg}}">
    </p>

    <p>
        <label>Data Nascimento</label><br>
        <input type="text" name="dataNasc" value="{{$user->dataNasc}}">
    </p>

    <p>
        <label>Data Praça</label><br>
        <input type="text" name="dataPraca" value="{{$user->dataPraca}}">
    </p>

    <p>
        <label>Escolaridade</label><br>
        <input type="text" name="escolaridade" value="{{$user->escolaridade}}">
    </p>

    <p>
        <label>Telefone</label><br>
        <input type="text" name="telefone" value="{{$user->telefone}}">
    </p>

    <p>
        <label>Endereço</label><br>
        <input type="text" name="endereco" value="{{$user->endereco}}">
    </p>

    <p>
        <label>E-mail</label><br>
        <input type="text" name="email" value="{{$user->email}}">
    </p>

    <p>
        <label>Senha</label><br>
        <input type="text" name="password" value="{{$user->password}}">
    </p>

    <input type="submit" value="Salvar">
</form>