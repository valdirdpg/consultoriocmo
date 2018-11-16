@extends('Site.templates.template')

@section('content')
    <h2>{{$title}}</h2>
    <b>Código: </b>{{$exibir->id}}<br>
    <b>Nome: </b>{{$exibir->ds_especialidades}}<br>
    <b>Status: </b>{{$exibir->ativo}}<br>
    <b>Cadastrado em: </b>{{$exibir->created_et}}<p>

    @if(isset($errors)&& count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
        </div>
    @endif
    {!! Form::open(['route'=>['especialidades.destroy',$exibir->id],'method'=>'DELETE']) !!}
    {!! Form::submit("Deletar Especialidade: $exibir->ds_especialidades",['class'=>'btn btn-danger']) !!}
        <a href="{{route('especialidades.index')}}"><span class="btn btn-default">Cancelar</span></a>
    {!! Form::close() !!}


@endsection
