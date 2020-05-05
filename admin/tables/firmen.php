<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Jobs Table class
 *
 * @since  0.0.1
 */
class PlanerTableFirmen extends JTable
{
	/**
	 * Ensure the params and metadata in json encoded in the bind method
	 *
	 * @var    array
	 */
	protected $_jsonEncode = array('params');

	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  connector object
	 */
	public  function __construct(&$db)
	{
		parent::__construct('#__planer', 'id', $db);
	}
}
