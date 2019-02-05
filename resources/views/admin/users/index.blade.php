<h1>Usuários</h1>

<a href="{{route('user.new')}}">Novo</a>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Criado em</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->created_at}}</td>
            <td>
                <a href="{{route('user.edit', ['user' => $u->id])}}">EDITAR</a>
                <a href="{{route('user.remove', ['id' => $u->id])}}">EXCLUIR</a>

            </td>
        </tr>
    @endforeach

    </tbody>
</table>