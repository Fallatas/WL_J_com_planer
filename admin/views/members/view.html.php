<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Jobs View
 *
 * @since  1.0.0
 */
class PlanerViewMembers extends JViewLegacy
{
	protected $items;

	protected $pagination;

	protected $state;

	/**
	 * Jobs view display method
	 *
	 * @param   string  $tpl  templae name
	 *
	 * @return void
	 */
	public function display($tpl = null)
	{
		// Get data from the model
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			throw new RuntimeException(implode('<br />', $errors), 500);
		}

		// Set the toolbar
		MembersHelper::addSubmenu('members');

		$this->addToolBar();
		$this->sidebar = JHtmlSidebar::render();

		// Add CSS for icon
		JFactory::getDocument()->addStyleDeclaration('.icon-members {background:url(../media/com_planer/images/members-16x16.png)}');

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Setting the toolbar
	 *
	 * @return void
	 */
	protected function addToolBar()
	{
		$state = $this->get('State');
		$canDo = JHelperContent::getActions('com_planer', 'category', $state->get('filter.category_id'));
		$user  = JFactory::getUser();

		JToolBarHelper::title(JText::_('COM_PLANER_MANAGER_MEMBERS'), 'members');

		if ($canDo->get('core.create'))
		{
			JToolBarHelper::addNew('member.add');
		}

		if ($canDo->get('core.edit'))
		{
			JToolBarHelper::editList('member.edit');
		}

		if ($canDo->get('core.delete'))
		{
			JToolBarHelper::deleteList('', 'members.delete');
		}

		if ($user->authorise('core.admin', 'com_planer') || $user->authorise('core.options', 'com_planer'))
		{
			JToolBarHelper::divider();
			JToolBarHelper::preferences('com_planer');
		}

		JHtmlSidebar::setAction('index.php?option=com_planer&view=members');

		JHtmlSidebar::addFilter(
			JText::_('JOPTION_SELECT_CATEGORY'),
			'filter_category_id',
			JHtml::_('select.options', JHtml::_('category.options', 'com_planer'), 'value', 'text', $state->get('filter.category_id'))
		);
	}
}
