 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                       
      </button>
      <a class="navbar-brand" href="#">Alcaldia Sucre</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a> <?php echo $current_user['nombres']." ".$current_user['apellidos'] ?></a>
        </li>
        <li>
      <?php echo $this->Html->link(__('usuario'), array('controller' => 'users' , 'action' => 'index')); ?>
        </li>
        <li>
			<?php echo $this->Html->link(__('Inmueble'), array('controller' => 'inmuebles' , 'action' => 'index')); ?>
        </li>
        <li>
			<?php echo $this->Html->link(__('Empresa'), array('controller' => 'empresas' , 'action' => 'index')); ?>
        </li>
        <li>
      <?php echo $this->Html->link(__('Solicitud'), array('controller' => 'requests' , 'action' => 'index')); ?>
        </li>
        <li>
      <?php echo $this->Html->link(__('Recuados'), array('controller' => 'collections' , 'action' => 'index')); ?>
        </li>



      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
        	<?php echo $this->Html->link('Salir',array('controller' => 'users', 'action' => 'logout')); ?>
        </li>
      </ul>
    </div>
  </div>
</nav>


