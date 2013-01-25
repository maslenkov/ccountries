<?php
defined('_JEXEC') or die ('Restricted access');

jimport('joomla.application.component.model');

class CountriesModelCountries extends JModel {
  function getAllCountries() {
    $db = JFactory::getDBO();

    $query = 'SELECT * FROM `#__countries` ORDER BY `name` ASC';
    $db->setQuery($query);
    $row = $db->loadObjectlist();
    return $row;
  }
}
