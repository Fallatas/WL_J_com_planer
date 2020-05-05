<?php

defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

JFactory::getDocument()->addScriptDeclaration("
	Joomla.submitbutton = function(task)
	{
		if (task == 'member.cancel' || document.formvalidator.isValid(document.getElementById('member-form'))) {
			" . $this->form->getField('description')->save() . "
			Joomla.submitform(task, document.getElementById('member-form'));
		}
	};
");

$params = $this->form->getFieldsets('params');
?>

<form action="<?php echo JRoute::_('index.php?option=com_planer&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="member-form" class="form-validate">
	<?php echo JLayoutHelper::render('joomla.edit.title_alias', $this); ?>

	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', JText::_('COM_PLANER_MEMBER_DETAILS', true)); ?>
        <h3 style="margin: 50px 0 50px 0">Kontaktdaten:</h3>
        <hr>
		<?php echo $this->form->getControlGroup('catid'); ?>
        <?php echo $this->form->getControlGroup('handy'); ?>
        <?php echo $this->form->getControlGroup('telefon'); ?>
        <?php echo $this->form->getControlGroup('fax'); ?>
        <?php echo $this->form->getControlGroup('email'); ?>
        <hr>
        <h3 style="margin: 50px 0 50px 0">Persönliche Daten:</h3>
        <hr>
        <?php echo $this->form->getControlGroup('nametitle'); ?>
		<?php echo $this->form->getControlGroup('anrede'); ?>
		<?php echo $this->form->getControlGroup('firma'); ?>
		<?php echo $this->form->getControlGroup('vorname'); ?>
		<?php echo $this->form->getControlGroup('name'); ?>
		<?php echo $this->form->getControlGroup('street'); ?>
		<?php echo $this->form->getControlGroup('zusatz'); ?>
        <hr>
        <h3 style="margin: 50px 0 50px 0">Kontodaten:</h3>
        <hr>
		<?php echo $this->form->getControlGroup('kontonummer'); ?>
		<?php echo $this->form->getControlGroup('blz'); ?>
		<?php echo $this->form->getControlGroup('kontoinhaber'); ?>
		<?php echo $this->form->getControlGroup('bank'); ?>
		<?php echo $this->form->getControlGroup('iban'); ?>
		<?php echo $this->form->getControlGroup('bic'); ?>
        <hr>
        <h3 style="margin: 50px 0 50px 0">Sonstiges:</h3>
        <hr>
		<?php echo $this->form->getControlGroup('datei'); ?>
		<?php echo $this->form->getControlGroup('description'); ?>

		<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'params', JText::_('COM_PLANER_MEMBER_PARAMS', true)); ?>

        <?php foreach ($this->form->getGroup('params') as $field) : ?>
			<?php echo $field->getControlGroup(); ?>
		<?php endforeach; ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	</div>

	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
