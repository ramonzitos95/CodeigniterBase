
    <div class="container-fluid">
        <nav class="navbar navbar-default">
            <div class="container-fluid">


                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('menu'); ?> ">Sistema de Horários</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Curso <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('Curso'); ?>">Cadastrar</a></li>
                                <li><a href="../../controller/listas/listarCursos.php">Listar Cursos</a></li>
                                <li><a href="../../view/colaborador/buscarCursos.php">Editar Curso</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Disciplina<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cadastrar Disciplina</a></li>
                                <li><a href="#">Listar Disciplinas</a></li>
                                <li><a href=".#">Editar Disciplina</a></li>
                                <li><a href="#">Enviar Por Email</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Grade <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cadastrar</a></li>
                                <li><a href="#">Lista Grades</a></li>
                                <li><a href="#">Editar Grades</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Inativar Grade</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Administrador <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('login/cadastrar'); ?>">Cadastrar Usuários</a></li>
                            </ul>
                        </li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
