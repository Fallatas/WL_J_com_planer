<?php


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Job Controller
 *
 * @since  0.0.1
 */
class PlanerControllerFirma extends JControllerForm
{
    public function apply()
    {
        $this->setRedirect(JRoute::_('index.php?option=com_planer&view=firmen', false), JText::_('Gespeichert'));

    }

    public function add()
    {
        return parent::add(); // TODO: Change the autogenerated stub
    }


    public function save($key = null, $urlVar = null)
   {
       parent::save($key, $urlVar);

       $this->setRedirect(JRoute::_('index.php?option=com_planer&view=firmen', false), JText::_('Gespeichert'));

       // Get a handle to the Joomla! application object
       $application = JFactory::getApplication();

       // Add a message to the message queue
       $application->enqueueMessage(JText::_('sdfsdfsdfsd'), 'notice');
   }
}