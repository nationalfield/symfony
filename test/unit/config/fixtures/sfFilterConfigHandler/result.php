<?php
// auto-generated by sfFilterConfigHandler
//

list($class, $parameters) = (array) sfConfig::get('sf_execution_filter', array('sfExecutionFilter', array (
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_default_filter', array('defaultFilterClass', null));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_new_filter', array('newFilterClass', array (
  'key' => 'value',
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);

list($class, $parameters) = (array) sfConfig::get('sf_rendering_filter', array('sfRenderingFilter', array (
  'key' => 'value',
)));
$filter = new $class(sfContext::getInstance(), $parameters);
$this->register($filter);
