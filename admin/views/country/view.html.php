<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

class CountriesViewCountry extends JView {
  function display($tpl = null) {
    $hello = &$this->get('Data');
    $isNew = ($hello->id < 1);
    
    $text = $isNew ? JText::_('New') : JText::_('Edit');
    JToolBarHelper::title(JText::_('Countries').': <small><small>[' . $text . ']</small></small>');
    if (!$isNew) JToolBarHelper::apply();
    JToolBarHelper::save();
    if ($isNew) {
      JToolBarHelper::cancel();
    } else {
      JToolBarHelper::cancel('cancel', 'Close');
    }
    
    $this->assignRef('hello', $hello);
    
    parent::display($tpl);
  }
}
