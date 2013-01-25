<?php

defined('_JEXEC') or die('Restrict access');

jimport('joomla.application.component.view');

class CountriesViewCountries extends JView {
  function display($tpl = null){
    JToolBarHelper::title("Countries", 'Countries');
    JToolBarHelper::deleteList();
    JToolBarHelper::editListX();
    JToolBarHelper::addNewX();
    $items = & $this->get( 'Data');
    $this->assignRef('items', $items);

    parent::display($tpl);
  }
}
