<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class CountriesModelCountries extends JModel {
  function getData() {
    if(empty($this->_data)) {
      $query = "SELECT * FROM `#__countries` ORDER BY `name` ASC";
      $this->_data = $this->_getList($query);
    }
    return $this->_data;
  }
}
