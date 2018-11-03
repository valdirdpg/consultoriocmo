@extends('Site.templates.template')

@section('content')

    <h1 class="title-pg">
        <a href="{{route('convenios.index')}}"><span class="glyphicon glyphicon-fast-backward"></span></a>
        Convênio: <b>{{$convenio->nm_convenio}}</b>
    </h1>
    <p><b>Código Registro:</b> {{$convenio->id}}</p>
    <p><b>Ativo:</b> {{$convenio->ativo}}</p>
    <p><b>Nome:</b> {{$convenio->nm_convenio}}</p>
    <p><b>Abrangência:</b> {{$convenio->ds_regioes}}</p>
    <p><b>Data Cadastro:</b> {{$convenio->created_at}}</p>

    <hr>
       @if(isset($errors)&& count($errors)>0)
           <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                 <p>{{$error}}</p>
              @endforeach
           </div>
       @endif
    {!! Form::open(['route'=>['convenios.destroy',$convenio->id], 'method'=>'DELETE']) !!}
    {!! Form::submit("Deletar Convênio: $convenio->nm_convenio",['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection   

