<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-M88GLMP"></script>
    <meta charset="UTF-8">
    <title>Ratisbone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Loja Integrada I Crie sua loja virtual">
    <meta name="description"
        content="Com a Loja Integrada você cria sua loja virtual rapidinho e não paga comissão sobre as vendas!">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{mix('assets/css/app.css')}}">
    @stack('head')
    @stack('css')
</head>

<body>
    <header class="">
        <div class="container-fluid">
            @include('site.template.nav')
        </div>
    </header>

    @yield('content')


    @include('site.template.footer')
    <!--Janela Modal-->

    <!-- The Modal -->
    <div class="modal fade modal-info" id="modalCidades" tabindex="-1" aria-labelledby="modalCidades"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">

                <div class="modal-body">
                    <div>
                        <button type="button" class="btn-close pull-right" data-bs-dismiss="modal"
                            aria-label="close"></button>
                    </div>
                    <div class="form-cidade">
                        <select class="form-control select2 " multiple>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{mix('assets/js/app.js')}}"></script>
    @stack('scripts')
</body>

</html>