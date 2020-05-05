<?php

defined('_JEXEC') or die;


/**
 * Template styles list controller class.
 *
 * @since  1.6
 */
class PlanerControllerStatistiken extends JControllerAdmin
{
	public function neu()
    {
	    $model = $this->getModel('Statistiken');
        $model->addUser();

        JFactory::getApplication()->enqueueMessage('SEPP ERFOLGREICH ANGELEGT');

        $this->setRedirect('index.php?option=com_planer&view=Statistiken');
    }
}
