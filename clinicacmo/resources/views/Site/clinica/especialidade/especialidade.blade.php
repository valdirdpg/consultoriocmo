@extends('Site.templates.listagem')
@section('content')
    <table class="table table-hover">
        <thead class="thead-light">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Situação</th>
            <th>Ações</th>
        </tr>
        </thead>
        @foreach($especialidade as $especialidades)
            <tr>
                <td>{{$especialidades->id}}</td>
                <td>{{$especialidades->ds_especialidades}}</td>
                <td>{{$especialidades->ativo}}</td>
                <td><a href="{{route('especialidades.show',$especialidades->id )}}"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="{{route('especialidades.edit',$especialidades->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                </td>
            </tr>
        @endforeach
    </table>
    <div>{{$especialidade->links()}}</div>
@endsection
