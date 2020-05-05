<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * General Controller of Jobs component
 *
 * @since  0.0.1
 */
class PlanerController extends JControllerLegacy
{
	/**
	 * The generic display task
	 *
	 * @param   bool   $cachable   is this view a cachabel one
	 * @param   array  $urlparams  url parameters
	 *
	 * @return  void
	 */
	public function display($cachable = false, $urlparams = array())
	{
		$input =& JFactory::getApplication()->input;

		// Set default view if not set
		$input->set('view', $input->get("view", "Members", "CMD"));

		// Call parent behavior
		parent::display($cachable, $urlparams);
	}
}
