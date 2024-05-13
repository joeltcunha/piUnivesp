<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PJ SISTEMA DE SEGURANÇA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url('_imagem/background.jpg');ground.jpg');
        background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            background-size: cover;
        }

        .carousel-inner > .item > img {
            width:100%; /* Adjust as needed */
            height: auto; /* Adjust as needed */
            object-fit: cover;
        }
    </style>
</head>
<body>
<header class="container-fluid bg-dark text-light py-3">
    <h1><span class="badge text-bg-secondary">PJ SISTEMA DE SEGURANÇA</span></h1>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="ordemServicoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordem de Serviço
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ordemServicoDropdown">
                        <li><a class="dropdown-item" href="insert_order.html">Incluir Ordem de Serviço</a></li>
                        <li><a class="dropdown-item" href="delete_order.html">Excluir Ordem de Serviço</a></li>
                        <li><a class="dropdown-item" href="query_order.html">Consultar Ordem de Serviço</a></li>
                        <li><a class="dropdown-item" href="alter_order.html">Alterar Ordem de Serviço</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="produtosServicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos e Serviços
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="produtosServicosDropdown">
                        <li><a class="dropdown-item" href="insert_product.html">Incluir Produto ou Serviço</a></li>
                        <li><a class="dropdown-item" href="delete_product.html">Excluir Produto ou Serviço</a></li>
                        <li><a class="dropdown-item" href="query_product.html">Consultar Produto ou Serviço</a></li>
                        <li><a class="dropdown-item" href="alter_product.html">Alterar Produto ou Serviço</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Clientes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                        <li><a class="dropdown-item" href="insert_client.html">Incluir Cliente</a></li>
                        <li><a class="dropdown-item" href="delete_client.html">Excluir Cliente</a></li>
                        <li><a class="dropdown-item" href="query_client.html">Consultar Cliente</a></li>
                        <li><a class="dropdown-item" href="alter_client.html">Alterar Cliente</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="fornecedoresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fornecedores
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="fornecedoresDropdown">
                        <li><a class="dropdown-item" href="insert_supplier.html">Incluir Fornecedor</a></li>
                        <li><a class="dropdown-item" href="delete_supplier.html">Excluir Fornecedor</a></li>
                        <li><a class="dropdown-item" href="query_supplier.html">Consultar Fornecedor</a></li>
                        <li><a class="dropdown-item" href="alter_supplier.html">Alterar Fornecedor</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="colaboradoresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Colaboradores
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="colaboradoresDropdown">
                        <li><a class="dropdown-item" href="insert_employee.html">Incluir Colaborador</a></li>
                        <li><a class="dropdown-item" href="delete_employee.html">Excluir Colaborador</a></li>
                        <li><a class="dropdown-item" href="query_employee.html">Consultar Colaborador</a></li>
                        <li><a class="dropdown-item" href="alter_employee.html">Alterar Colaborador</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="relatoriosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Relatórios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="relatoriosDropdown">
                        <li><a class="dropdown-item" href="report_product.html">Produtos e Serviços</a></li>
                        <li><a class="dropdown-item" href="report_client.html">Clientes</a></li>
                        <li><a class="dropdown-item" href="report_supplier.html">Fornecedores</a></li>
                        <li><a class="dropdown-item" href="report_service.html">Ordem de Serviço</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
    <h2 class="text-center text-light">Trabalhos Executados</h2>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="_imagem/imagem1.jpg" class="d-block w-50" alt="Trabalho 1">
            </div>
            <div class="carousel-item">
                <img src="_imagem/imagem2.jpg" class="d-block w-50" alt="Trabalho 2">
            </div>
            <div class="carousel-item">
                <img src="_imagem/imagem3.jpg" class="d-block w-50" alt="Trabalho 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<footer class="container-fluid text-center mt-5 bg-dark text-light py-3">
    <p>
        Venha nos Conhecer <br><br>
        <a href="https://www.google.com/maps/place/Av.+S%C3%A3o+Lu%C3%ADs,+1201+-+Rep%C3%BAblica,+S%C3%A3o+Paulo+-+SP,+01046-010/@-23.544747,-46.6433293,3a,75y,143.34h,90t/data=!3m6!1e1!3m4!1s-7q2Ay5Lt6Cu2ziYr_Hz1A!2e0!7i16384!8i8192!4m5!3m4!1s0x94ce584e44894c4d:0x3b864694df750597!8m2!3d-23.5448217!4d-46.6432358" title="Endereço">
            Avenida São Luis, 1201, Centro São Paulo SP
        </a>
    </p>
</footer>
</body>
</html>
