<?php

class TableCountries extends JTable {
  var $id = null;
  var $name = null;
  
  function TableCountries(&$db) {
    parent::__construct('#__countries', 'id', $db);
  }
}
