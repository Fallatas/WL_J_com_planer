<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_planer'))
{
	new RuntimeException(JText::_('JERROR_ALERTNOAUTHOR'), 403);
}

// Require helper file
JLoader::register('MembersHelper', dirname(__FILE__) . '/helpers/members.php');
JLoader::register('FirmenHelper', dirname(__FILE__) . '/helpers/firmen.php');

// Import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Jobs
$controller = JControllerLegacy::getInstance('Planer');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task', '', 'CMD'));

// Redirect if set by the controller
$controller->redirect();
