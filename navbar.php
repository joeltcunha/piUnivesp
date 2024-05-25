<?php


?>
<section>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="ordemServicoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/lista-de-controle-icon.png" alt="Icone lista de desejos" style="width: 25px; padding-right: 8px">Ordem de Serviço
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="ordemServicoDropdown">
                                <li><a class="dropdown-item" href="insert_order.php">Incluir Ordem de Serviço</a></li>
                                <li><a class="dropdown-item" href="delete_order.html">Excluir Ordem de Serviço</a></li>
                                <li><a class="dropdown-item" href="query_order.html">Consultar Ordem de Serviço</a></li>
                                <li><a class="dropdown-item" href="alter_order.html">Alterar Ordem de Serviço</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="produtosServicosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/cctv-icon.png" alt="Icone CCTV" style="width: 25px; padding-right: 8px">Produtos e Serviços
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="produtosServicosDropdown">
                                <li><a class="dropdown-item" href="insert_product.php">Incluir Produto ou Serviço</a></li>
                                <li><a class="dropdown-item" href="delete_product.php">Excluir Produto ou Serviço</a></li>
                                <li><a class="dropdown-item" href="query_product.php">Consultar Produto ou Serviço</a></li>
                                <li><a class="dropdown-item" href="alter_product.php">Alterar Produto ou Serviço</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="clientesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/cliente-icon.png" alt="Icone cliente" style="width: 25px; padding-right: 8px">Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="clientesDropdown">
                                <li><a class="dropdown-item" href="insert_client.php">Cadastro</a></li>
                                <li><a class="dropdown-item" href="delete_client.php">Excluir Cliente</a></li>
                                <li><a class="dropdown-item" href="query_client.php">Consultar Cliente</a></li>
                                <li><a class="dropdown-item" href="alter_client.php">Alterar Cliente</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fornecedoresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/industria-alimenticia.png" alt="Icone indústria" style="width: 25px; padding-right: 8px">Fornecedores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="fornecedoresDropdown">
                                <li><a class="dropdown-item" href="insert_supplier.php">Incluir Fornecedor</a></li>
                                <li><a class="dropdown-item" href="delete_supplier.php">Excluir Fornecedor</a></li>
                                <li><a class="dropdown-item" href="query_supplier.php">Consultar Fornecedor</a></li>
                                <li><a class="dropdown-item" href="alter_supplier.php">Alterar Fornecedor</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="colaboradoresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/worker-icon.png" alt="Icone Worker" style="width: 25px; padding-right: 8px">Colaboradores
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="colaboradoresDropdown">
                                <li><a class="dropdown-item" href="insert_employee.php">Incluir Colaborador</a></li>
                                <li><a class="dropdown-item" href="delete_employee.php">Excluir Colaborador</a></li>
                                <li><a class="dropdown-item" href="query_employee.php">Consultar Colaborador</a></li>
                                <li><a class="dropdown-item" href="alter_employee.php">Alterar Colaborador</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="relatoriosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="_imagem/relatorio-icon.png" alt="Icone Relatório" style="width: 25px; padding-right: 8px">Relatórios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="relatoriosDropdown">
                                <li><a class="dropdown-item" href="report_product.php">Produtos e Serviços</a></li>
                                <li><a class="dropdown-item" href="report_client.php">Clientes</a></li>
                                <li><a class="dropdown-item" href="report_supplier.php">Fornecedores</a></li>
                                <li><a class="dropdown-item" href="report_service.php">Ordem de Serviço</a></li>
                            </ul>
                        </li>
                    </ul>
<!--                    <form class="d-flex" role="search">-->
<!--                        <input type="search" class="form-control me-2 placeholder="Pesquisa" aria-label="Search">-->
<!--                        <button class="btn btn-outline-dark" type="submit">Pesquisa</button>-->
<!--                    </form>-->
                </div>
            </div>
        </nav>
    </div>
</section>
