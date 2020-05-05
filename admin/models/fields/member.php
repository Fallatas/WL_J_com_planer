<?php


// No direct access to this file
defined('_JEXEC') or die;

JFormHelper::loadFieldClass('list');

/**
 * Job Form Field class for the Jobs component
 *
 * @since  0.0.1
 */
class JFormFieldMember extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	protected $type = 'Member';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db = JFactory::getDBO();

		$query = $db->getQuery(true);
		$query->select('#__planer.id as id, #__planer.title as title, #__planer.name as name, #__categories.title as category,catid');
		$query->from('#__planer');
		$query->leftJoin('#__categories on catid=#__categories.id');

		$db->setQuery((string) $query);

		$members = $db->loadObjectList();

		$options = array();

		if ($members)
		{
			foreach ($members as $member)
			{
				$options[] = JHtml::_('select.option', $member->id, $member->title . $member->name . $member->myimage .($member->catid ? ' (' . $$member->category . ')' : ''));
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
