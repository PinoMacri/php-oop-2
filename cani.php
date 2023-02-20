<div class="container">
    <div class="row text-center">
        <h2 class="p-3">
            Prodotti per Cani
        </h2>
    </div>
    <div class="row text-center">
      <ul class="col-3 d-flex flex-column justify-content-between p-3"> 
            <?php foreach ($cuccia_stoffa as $descrizione_cuccia_stoffa) : ?>
            <li>
            <?php echo $descrizione_cuccia_stoffa?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3 d-flex flex-column justify-content-between p-3"> 
            <?php foreach ($gioco_osso as $descrizione_gioco_osso) : ?>
            <li>
            <?php echo $descrizione_gioco_osso?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3 d-flex flex-column justify-content-between p-3"> 
            <?php foreach ($gioco_palla as $descrizione_gioco_palla) : ?>
            <li>
            <?php echo $descrizione_gioco_palla?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3 d-flex flex-column justify-content-between p-5"> 
            <?php foreach ($scatoletta_carne as $descrizione_scatoletta_carne) : ?>
            <li>
            <?php echo $descrizione_scatoletta_carne?>
            </li>
            <?php endforeach; ?>
      </ul>
    </div>
</div>