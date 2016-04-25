
<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>

<!-- Exhibit. -->
<div id="exhibit">
  <?php echo nl_getExhibitMarkup(); ?>
</div>

<!-- Exhibit. -->
<div id="buttons">
  <div class="btn-group" data-toggle="buttons">

    <div class="btn btn-primary active">
      <input type="radio" name="layer" value="base" checked>Basemap
    </div>

    <div class="btn btn-primary">
      <input type="radio" name="layer" value="ortelius"> Ortelius
    </div>

    <div class="btn btn-primary">
      <input type="radio" name="layer" value="keere"> Keere
    </div>

    <div class="btn btn-primary" id="confessions_button">
      <input type="radio" name="layer" value="confessions"> Confessions
    </div>

  </div>
</div>

<img id="legend" src="http://cestastanford.org/projects/rhine/files/original/7acd232867017f3dbbefabca40fc1048.png" alt="Legend">

<?php echo foot(); ?>
