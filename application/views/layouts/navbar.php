<!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Abrir Navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url().config_item('logged_in_controller')?>">
                <?= config_item('app_name')?>
            </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse"> 
            <ul class="nav navbar-nav">
                <li><a href="#">Página 1</a></li>
                <li><a href="#about">Página 2</a></li>
                <li><a href="#contact">Página 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs"><a href="#">
                <?php if ($this->session->userdata('avatar')):?>
                <img width="18px" src="<?= base_url('assets/img/profile/'.$this->session->userdata('avatar')) ?>">
                <?php endif;?>
            </a></li>
                <li class="dropdown">
                    <?php if ($this->session->userdata('name1')):?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name1').' '.$this->session->userdata('lastname1')?> <span class="caret"></span></a>
                    <?php elseif ($this->session->userdata('username')):?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('username')?> <span class="caret"></span></a>
                    <?php else :?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('email')?> <span class="caret"></span></a>
                    <?php endif;?>
                    <ul class="dropdown-menu">
                        <?php if ($this->session->userdata('permissions') & PERM['user']):?>
                        <li><a href="#">Nada</a></li>
                        <?php endif;?>
                        <?php if ($this->session->userdata('permissions') & PERM['admin']):?>
                        <li><a href="<?= base_url('users')?>"><i class="fa fa-users fa-fw"></i> Administrar Usuarios</a></li>
                        <li><a href="<?= base_url('enterprises/show/').$this->session->userdata('enterprise_id');?>"><i class="fa fa-building fa-fw"></i> Administrar Empresa</a></li>
                        <?php endif;?>
                        <?php if ($this->session->userdata('permissions') & PERM['sadmin']):?>
                        <li><a href="<?= base_url('users')?>"><i class="fa fa-users fa-fw"></i> Administrar Usuarios</a></li>
                        <li><a href="<?= base_url('groups')?>"><i class="fa fa-cube fa-fw"></i> Administrar Grupos</a></li>
                        <li><a href="<?= base_url('enterprises')?>"><i class="fa fa-building fa-fw"></i> Administrar Empresas</a></li>
                        <?php endif;?>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Mi Cuenta</li>
                        <li><a href="<?= base_url('users/show/'.$this->session->userdata('id'))?>"><i class="fa fa-user fa-fw"></i> Mi Perfil</a></li>
                        <li><a href="#" onclick="ajaxGet('auth/logout')"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
