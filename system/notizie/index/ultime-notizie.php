<div class="panel panel-default"><hr>
  <div class="panel-body text-center"><i class="fa fa-clock-o" style="font-size:18px;"></i> Notizie e articoli in ordine cronologico</div><br>
</div>
<div class="row">
<?php for($i=0;$i<12;$i++){ ?> 
<div class="col-md-6 col-sm-6" style="margin-bottom:10px">
  <div class="testo-bianco text-center colore-sfondo-primario"><i class="fa fa-newspaper-o"></i> Nome notizia</div>
  <div class="card sb-3 box-shadow">
    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22350%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20350%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16436f85c74%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16436f85c74%22%3E%3Crect%20width%3D%22350%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22113.84375%22%20y%3D%22120.6%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Copertina notizia">
    <div class="row">
      <div class="col-sm-6"><div class="colore-sfondo-primario colore-sfondo-primario testo-bianco text-center "><i class="fa fa-folder"></i> : Crypto</div></div>
      <div class="col-sm-6"><div class="colore-sfondo-primario testo-bianco text-center "><i class="fa fa-user"></i> : Andres</div></div>
    </div>
    <div class="card-body">
      <p class="card-text">Piccola descrizione notizia</p>
      <small class="text-muted">9 minuti fa</small>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-info">Leggi</button> &nbsp; 
          <button type="button" class="btn btn-sm btn-outline-warning">Modifica</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
