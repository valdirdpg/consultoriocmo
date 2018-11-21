@extends('Site.templates.template')
@section('content')
<h2>{{$title}}</h2><br>
    <h4><b>Código:</b> {{$medico->id}}</h4> <p>
    <h4><b>Nome:</b> {{$medico->nm_medico}}</h4> <p>
    <h4><b>CRM:</b> {{$medico->nr_crm}} </h4><p>
    <h4> <b>Especialidade:</b> {{$medico->cd_especialidade}}</h4><p>
    <h4><b>Data Registro:</b> {{$medico->created_et}} </h4><p>
<div>
    {!! Form::open(['route'=>['medicos.destroy', $medico->id],'method'=>'DELETE']) !!}
    {!! Form::submit("Deletar Médico: $medico->nm_medico",['class'=>'btn btn-danger']) !!}
    <a href="{{route('medicos.index')}}" class="btn btn-default"><span>Cancelar</span></a>
    {!! Form::close() !!}
</div>

@endsection
