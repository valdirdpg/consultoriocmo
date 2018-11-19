@extends('Site.templates.listagem')
@section('content')
    <div class="table-bordered">
        <table class="table">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>CRM</th>
                <th>Especialidade</th>
                <th>Situação</th>
                <th>Ação</th>
            </tr>

                @foreach($medico as $medicos)
                <tr>
                    <td>{{$medicos->id}}</td>
                    <td>{{$medicos->nm_medico}}</td>
                    <td>{{$medicos->nr_crm}}</td>
                    <td>{{$medicos->cd_especialidade}}</td>
                    <td>{{$medicos->ativo}}</td>
                    <td><a href="{{route('medicos.destroy',$medicos->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                        <a href="{{route('medicos.edit',$medicos->id)}}"><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                </tr>
                @endforeach

        </table>
    </div>
    <div>{{$medico->links()}}</div>
@endsection
