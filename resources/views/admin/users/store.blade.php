<h1> insert users</h1>
<hr>

<form action="{{route('user.store')}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome Usuário</label><br>
        <input type="text" name="name">
    </p>

    <p>
        <label>Foto</label><br>
        <input type="text" name="foto">
    </p>

    <p>
        <label>Graduação</label><br>
        <input type="text" name="graduacao">
    </p>


    <p>
        <label>Nome Guerra</label><br>
        <input type="text" name="nomeGuerra">
    </p>


    <p>
        <label>Seção</label><br>
        <input type="text" name="secao">
    </p>


    <p>
        <label>Identidade Militar</label><br>
        <input type="text" name="idtMil">
    </p>


    <p>
        <label>CPF</label><br>
        <input type="text" name="cpf">
    </p>

    <p>
        <label>RG</label><br>
        <input type="text" name="rg">
    </p>

    <p>
        <label>Data Nascimento</label><br>
        <input type="text" name="dataNasc">
    </p>

    <p>
        <label>Data Praça</label><br>
        <input type="text" name="dataPraca">
    </p>

    <p>
        <label>Escolaridade</label><br>
        <input type="text" name="escolaridade">
    </p>

    <p>
        <label>Telefone</label><br>
        <input type="text" name="telefone">
    </p>

    <p>
        <label>Endereço</label><br>
        <input type="text" name="endereco">
    </p>

    <p>
        <label>E-mail</label><br>
        <input type="text" name="email">
    </p>

    <p>
        <label>Senha</label><br>
        <input type="text" name="password">
    </p>

    <input type="submit" value="Cadastrar">
</form>