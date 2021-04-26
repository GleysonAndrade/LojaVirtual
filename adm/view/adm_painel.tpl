
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">
        <title>{$TITULO_SITE}</title>

        <!-- Bootstrap core CSS -->
    <link href="painel/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="dashboard.css" rel="stylesheet">
    </head>
    <body>
        
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-3 me-3 px-3" href="#">{$TITULO_SITE}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sair</a>
        </li>
    </ul>
    </header>

    <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{$GET_SITE_ADM}">
                <span data-feather="home"></span>
                Painel Administrador
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{$PAG_ADM_PRODUTO}">
                <span data-feather="file"></span>
                Categorias
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{$PAG_ADM_PRODUTO}">
                <span data-feather="shopping-cart"></span>
                Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{$PAG_ADM_CLIENTE}">
                <span data-feather="users"></span>
                Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{$PAG_ADM_PEDIDO}">
                <span data-feather="bar-chart-2"></span>
                Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
                </a>
            </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
            </h6>
            <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
                </a>
            </li>
            </ul>
        </div>
        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div>
            <h1>{if $LOGADO == true}</h1>
            <p> Olá: {$USER}</p>
            </div>
            <div>
               <h6>
                    <p class="text-center">
                        Último Login : {$DATA} ás {$HORA}
                    </p>            
               </h6>
            </div>
            {/if}
            <div class="btn-group me-2">
                <a href="{$PAG_LOGOFF}" type="button" class="btn btn-sm btn-outline-info">Sair</a><br/>
                <a href="" type="button" class="btn btn-sm btn-outline-warning">Alterar Senha</a>
            </div>
        </div>

        </main>
    </div>
    </div>
        <script src="painel/bootstrap.bundle.min.js"></script>

        <script src="painel/feather.min.js"></script>
        
        <script src="painel/Chart.min.js"></script>
    </body>
    </html>
