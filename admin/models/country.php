<?php
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class CountriesModelCountry extends JModel {
  function __construct() {
    parent::__construct();
    
    $array = JRequest::getVar('cid', 0, '', 'array');
    $this->setId((int)$array[0]);
  }
  
  function setId($id) {
    $this->_id = $id;
    $this->_data = null;
  }
  
  function &getData() {
    if(empty($this->_data)){
      $query = "SELECT * FROM `#__countries` WHERE `id`={$this->_id}";
      $this->_db->setQuery($query);
      $this->_data = $this->_db->loadObject();
    }
    if(!$this->_data) {
      $this->_data = new stdClass();
      $this->_data->id = 0;
      $this->_data->name = null;
    }
    return $this->_data;
  }
  
  function store() {
    $row = &$this->getTable('countries');
    $data = JRequest::get('post');
    
    if (!$row->bind($data)) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }
    
    if (!$row->check()) {
      $this->setError($this->_db->getErrorMsg());
      return false;
    }
    
    if (!$row->store()) {
      $this->setError($row->getErrorMsg());
    }
    
    return true;
  }
  
  function delete() {
    $cids = JRequest::getVar('cid', array(0), 'post', 'array');
    
    $row = &$this->getTable('countries');
    
    if(count($cids)) {
      foreach ($cids as $cid) {
        if (!$row->delete($cid)) {
          $this->setError($row->getErrorMsg());
          return false;
        }
      }
    }
    return true;
  }
}
