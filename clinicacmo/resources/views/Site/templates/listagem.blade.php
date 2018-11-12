@extends('Site.templates.nav')
<div id="main" class="container jumbotron">
    <div id="top" class="row">
        <div class="col-md-4">
            <h2>{{$tela ?? 'Resultado da Busca'}}</h2>
        </div>
        <form  action= "{{route($rotaSearch ?? null)}}" method="GET">
            <div class="col-md-5">
                <div class="input-group h2">

                    <input name="search" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
                    <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
             </span>
                </div>
            </div>
        </form>

        <div class="col-md-3">
            <a href="{{route($rotaCreate ?? null)}}" class="btn btn-primary pull-right h2">
                <span class="glyphicon glyphicon-plus"></span> Cadastrar
            </a>

        </div>
    </div> <!-- /#top -->

    <hr />
    <div id="list" class="row">
        @yield('content')
    </div> <!-- /#list -->

    <div id="bottom" class="row">

    </div> <!-- /#bottom -->
</div>  <!-- /#main -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
