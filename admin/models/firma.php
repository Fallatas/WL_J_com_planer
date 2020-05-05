<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Job Model
 *
 * @since  0.0.1
 */
class PlanerModelFirma extends JModelAdmin
{
    /**
     * The type alias for this content type (for example, 'com_content.article').
     *
     * @var    string
     * @since  3.2
     */
    public $typeAlias = 'com_planer.Firma';

    /**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param   string  $type    The table type to instantiate
	 * @param   string  $prefix  A prefix for the table class name. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A database table object
	 */
	/* jobs jobs */
	public function getTable($type = 'Firmen', $prefix = 'PlanerTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed	A JForm object on success, false on failure
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_planer.firma', 'firma', array('control' => 'jform', 'load_data' => $loadData));

        if (empty($form))
		{
			return false;
		}

		return $form;
	}

    /**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState('com_planer.edit.firma.data', array());

		if (empty($data))
		{
			$data = $this->getItem();

			// Prime some default values.
			if ($this->getState('firma.id') == 0)
			{
				$app = JFactory::getApplication();
				$data->set('catid', $app->input->get('catid', $app->getUserState('com_planer.firmen.filter.category_id'), 'int'));
			}
		}

		$this->preprocessData('com_planer.firma', $data);

		return $data;
	}
}
