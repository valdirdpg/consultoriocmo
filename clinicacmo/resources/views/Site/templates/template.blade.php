<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="/assets/painel/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/painel/css/boots.min.css">-->
    <link rel="stylesheet" type="text/css" href="/assets/painel/css/style.css">
    <title>{{$title}}</title>
</head>
<body>
@yield('content')
<div class="form-group ">
    <div class="panel-body">
        <div class="col-sm-6">
            @yield('cont1')
        </div>
    </div>

    <div class="panel-body">
        <div class="col-sm-6">
            @yield('cont2')
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            @yield('cont3')
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            @yield('cont4')
        </div>
    </div>
</div>
</body>
</html>