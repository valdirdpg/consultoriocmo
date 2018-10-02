@extends('Site.templates.template')

@section('content')
    @foreach($convenio as $convenios)
   {{$convenios->nm_convenio}}
    @endforeach
@endsection
