<?php

defined('_JEXEC') or die('Restricted access');

class CountriesControllerCountry extends CountriesController {
  function __construct() {
    parent::__construct();
    
    $this->registerTask('add', 'edit');
    $this->registerTask('publish', 'publish');
    $this->registerTask('unpublish', 'ubpublish');    
  }
  
  function edit() {
    JRequest::setVar('view', 'country');
    JRequest::setVar('layout', 'form');
    JRequest::setVar('hidemainmenu', 1);
    
    parent::display();
  }
  
  function save() {
    $model = $this->getModel('country');
    
    if($model->store(JRequest::get('post'))) {
      $msg = JText::_('Компонент "Страны" сохранение прошло успешно');
    } else {
      $msg = JText::_('Ошибка сохранения в компоненте "Страны"');
    }
    
    $link = 'index.php?option=com_countries';
    $this->setRedirect($link, $msg);
  }
  
  function apply() {
    $model = $this->getModel('country');
    
    if($model->store(JRequest::get('post'))) {
      $msg = JText::_('Компонент "Страны" сохранение прошло успешно');
    } else {
      $msg = JText::_('Ошибка сохранения в компоненте "Страны"');
    }

    $id = JRequest::getVar('id');
    $link = "index.php?option=com_countries&controller=country&task=edit&cid[]={$id}";
    $this->setRedirect($link, $msg);
  }

  function remove() {
    $model = $this->getModel('country');
    
    if(!$model->delete()) {
      $msg = JText::_('Ошибка удаления в компоненте "Страны"');
    } else {
      $msg = JText::_('Компонент "Страны" удаление прошло успешно');
    }

    $link = "index.php?option=com_countries";
    $this->setRedirect($link, $msg);
  }
  
  function cancel() {
    $msg = JText::_('Операция выполнена');
    $this->setRedirect("index.php?option=com_countries", $msg);
  }
}
