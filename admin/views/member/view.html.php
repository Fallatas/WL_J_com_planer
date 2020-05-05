<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Job View
 *
 * @since  0.0.1
 */
class PlanerViewMember extends JViewLegacy
{
	protected $state;

	protected $item;

	protected $form;

	/**
	 * display method of Job view
	 *
	 * @param   string  $tpl  template name
	 *
	 * @return void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
        $this->item = $this->get('Item');
		$this->state = $this->get('State');

        // Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			throw new RuntimeException(implode('<br />', $errors), 500);
		}

		// Set the toolbar
		$this->addToolBar();

		// Add CSS for icon
		JFactory::getDocument()->addStyleDeclaration('.icon-members {background:url(../media/com_planer/images/members-16x16.png)}');

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Setting the toolbar
	 *
	 * @return  void
	 */

	protected function addToolBar()
	{
		JFactory::getApplication()->input->set('hidemainmenu', true);

		$user		= JFactory::getUser();
		$isNew = $this->item->id == 0;
		$canDo = JHelperContent::getActions('com_planer', 'category', $this->item->catid);

		JToolBarHelper::title($isNew ? JText::_('COM_PLANER_MANAGER_JOB_NEW') : JText::_('COM_PLANER_MANAGER_JOB_EDIT'), 'members');

		// If not checked out, can save the item.
		if ($canDo->get('core.edit')||(count($user->getAuthorisedCategories('com_planer', 'core.create'))))
		{
			JToolbarHelper::apply('member.apply');
			JToolbarHelper::save('member.save');
		}

		if (count($user->getAuthorisedCategories('com_planer', 'core.create')))
		{
			JToolbarHelper::save2new('member.save2new');
		}

		// If an existing item, can save to a copy.
		if (!$isNew && (count($user->getAuthorisedCategories('com_planer', 'core.create')) > 0))
		{
			JToolbarHelper::save2copy('member.save2copy');
		}

		JToolbarHelper::cancel('member.cancel');
	}
}
