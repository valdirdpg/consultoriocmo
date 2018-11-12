@extends('Site.templates.nav')
        <div class="container">
            <header class="row">

            </header>
            <div class="row">
                <div role="main" class="col-md-12 col-md-push-3 jumbotron">
                    @yield('content')
                </div>
                <aside role="complementary" class="col-md-3 col-md-push-3">

                </aside>
                <nav class="col-md-3 col-md-pull-9">

                </nav>
            </div>
            <footer class="row">

            </footer>
        </div>

        <div class="jumbotron centered">
            <div class="panel-body col-sm-offset-1 container">

            </div>
        </div>

            <script src="/assets/painel/js/jquery.min.js"></script>
            <script src="/assets/painel/js/bootstrap.min.js"></script>

</body>
</html>
