<?php


// No direct access to this file
defined('_JEXEC') or die;

/**
 * Class JobsHelper
 *
 * @since  0.0.1
 */
abstract class MembersHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  The name of the active view.
	 *
	 * @return  void
	 */
	public static function addSubmenu($vName = 'members')
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_PLANER_SUBMENU_MESSAGES'),
			'index.php?option=com_planer',
			$vName == 'members'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_PLANER_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&extension=com_planer',
			$vName == 'categories'
		);
	}
}
