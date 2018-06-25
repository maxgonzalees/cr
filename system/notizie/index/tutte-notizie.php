<div class="panel panel-default"><hr>
  <div class="panel-body"><i class="fa fa-clock-o" style="font-size:18px;"></i> Tutte le notizie</div>
</div><br>
<div class="row">
<?php for($i=0;$i<15;$i++){ ?>
  <div class="col-md-6 jasgrid">
    <div class="box-item">              
        <div class="box-post">        
            <h1 class="post-title">
                <a href="#"  class="colore-sfondo-primario notiza-info-data">
                    Nome notizia
                </a>
            </h1>
            <span class="label label-success">
                <a href="#"  class="colore-sfondo-primario notiza-info-data" rel="tag sfondo"><i class="fa fa-folder"></i> Categoria</a> &nbsp; 
                <a href="#"   class="colore-sfondo-primario notiza-info-data" rel="tag"><i class="fa fa-user"></i> Andres</a> 
            </span>
            <span class="meta" class="colore-sfondo-primario">
                <span  class="colore-sfondo-primario notiza-info-data"><i class="fa fa-comment"></i> <a href="http://wordpress.thebebel.com/showcase/newsbook/2015/01/19/meet-asias-best-destinations-for-the-summer/#respond">Nessun commento</a></span>
                <span  class="colore-sfondo-primario notiza-info-data" ><i class="fa fa-clock-o"></i> Settembre 15, 2015</span>
            </span>
        </div>
        <img style="width:585px" src="https://images.cointelegraph.com/images/370_Ly9jb2ludGVsZWdyYXBoLmNvbS9zdG9yYWdlL3VwbG9hZHMvdmlldy8xNTU1OWY3YzE0YzI0NzE1Njc3MjNjODg3NDViYzJmMy5qcGc=.jpg" alt="Cover notizia" class="">        
    </div>
  </div>
<?php } ?>
</div>
