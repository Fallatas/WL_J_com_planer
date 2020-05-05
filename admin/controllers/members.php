<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Jobs Controller
 *
 * @since  0.0.1
 */
class PlanerControllerMembers extends JControllerAdmin
{
	/**
	 * Description
	 *
	 * @param   string  $name    model name
	 * @param   string  $prefix  model prefix
	 *
	 * @return bool|JModelLegacy
	 */
	public function getModel($name = 'Member', $prefix = 'MembersModel')
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;

	}
}
