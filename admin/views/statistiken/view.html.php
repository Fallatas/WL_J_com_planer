<?php


defined('_JEXEC') or die;

/**
 * View class for a list of users.
 *
 * @since  1.6
 */
class PlanerViewStatistiken extends JViewLegacy
{
	/**
	 * The item data.
	 *
	 * @var   object
	 * @since 1.6
	 */
	protected $items;

    /**
     * The item data.
     *
     * @var   object
     * @since 1.6
     */
    protected $hans;


    /*
     * The chartObject data.
     * @var   Chartobject
     */

    protected $statistics;

    /*
     * The chartObject data.
     * @var   Leafletobject
     */

    protected $map;


	/**
	 * Display the view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */

	public function display($tpl = null)
	{
		$this->items         = $this->get('Items');
        $this->statistics    = $this->get('Statistics');
        $this->map           = $this->get('Map');

        $this->addToolbar();

        parent::display($tpl);
	}

    /**
     * Add the page title and toolbar.
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function addToolbar()
    {
        $state = $this->get('State');
        $canDo = JHelperContent::getActions('com_planer', 'category', $state->get('filter.category_id'));
        $user  = JFactory::getUser();

        JToolBarHelper::title(JText::_('COM_PLANER_MANAGER_STATISTIKEN'), 'members');


    }
}
