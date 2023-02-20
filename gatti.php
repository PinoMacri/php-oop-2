<div class="container">
    <div class="row text-center">
        <h2 class="p-3">
            Prodotti per Gatti
        </h2>
    </div>
    <div class="row">
      <ul class="col-3"> 
            <?php foreach ($cuccia_peluche as $descrizione_cuccia_peluche) : ?>
            <li>
            <?php echo $descrizione_cuccia_peluche?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($cuccia_cotone as $descrizione_cuccia_cotone) : ?>
            <li>
            <?php echo $descrizione_cuccia_cotone?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($gioco_molla as $descrizione_gioco_molla) : ?>
            <li>
            <?php echo $descrizione_gioco_molla?>
            </li>
            <?php endforeach; ?>
      </ul>
      <ul class="col-3"> 
            <?php foreach ($bocconcini_carne as $descrizione_bocconcini_carne) : ?>
            <li>
            <?php echo $descrizione_bocconcini_carne?>
            </li>
            <?php endforeach; ?>
      </ul>
    </div>
</div>