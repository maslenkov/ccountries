<?php
defined( '_JEXEC' ) or die( 'Restrict access' );
?>
<?php foreach ($this->countries as $country): ?>
  <?php echo $country->name ?>(<?php echo $country->id ?>)
  <br />
<?php endforeach ?>
