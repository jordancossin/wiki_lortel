<div class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-left" >
        <a class="navbar-brand" href=".">
          Wiki-Lortel
        </a>
      </ul>
      <ul class="nav navbar-nav navbar-left" >
        <li><?= $this->Html->link('Fournisseur',array('controller' => 'Providers', 'action' => 'index')); ?></li>
        <li><?= $this->Html->link('Catalogue',array('controller' => 'Categories', 'action' => 'index'));  ?></li>
        <li>
          <form role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Rechercher">
            </div>
          </form>
        </li>
      </ul>
      
      <div class="form-group navbar-right">
        <a href="#"><?= $this->Html->link('<i class="fa fa-power-off"></i> Déconnexion', 
                                        array('controller' => 'Users', 'action' => 'logout'),
                                        array('class' => 'btn btn-danger btn-logout', 'escape'=>false)); ?></a>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>