<?php
defined( '_JEXEC' ) or die( 'Restrict access' );

jimport( 'joomla.application.component.view' );

class CountriesViewCountries extends JView {
  function display($tpl = null) {
    $model = $this->getModel();
    $countries =$model->getAllCountries();
    $this->assignRef( 'countries', $countries);

    parent::display($tpl);
  }
}
