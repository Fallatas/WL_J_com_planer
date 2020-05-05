<?php

defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');

JFactory::getDocument()->addScriptDeclaration("
	Joomla.submitbutton = function(task)
	{
		if (task == 'firma.cancel' || document.formvalidator.isValid(document.getElementById('firma-form'))) {
			" . $this->form->getField('description')->save() . "
			Joomla.submitform(task, document.getElementById('firma-form'));
		}
	};
");

$params = $this->form->getFieldsets('params');
?>

<form action="<?php echo JRoute::_('index.php?option=com_planer&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="firma-form" class="form-validate">
	<?php echo JLayoutHelper::render('joomla.edit.title_alias', $this); ?>

	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', JText::_('COM_PLANER_FIRMA_DETAILS', true)); ?>
        <h3 style="margin: 50px 0 50px 0">Firmendaten:</h3>
        <hr>
		<?php echo $this->form->getControlGroup('catid'); ?>
        <?php echo $this->form->getControlGroup('kundennummer'); ?>
        <?php echo $this->form->getControlGroup('firmenname'); ?>
        <?php echo $this->form->getControlGroup('firmenmail'); ?>
        <?php echo $this->form->getControlGroup('land'); ?>
        <hr>

		<?php echo $this->form->getControlGroup('firmenplz'); ?>
		<?php echo $this->form->getControlGroup('ort'); ?>

        <?php echo $this->form->getControlGroup('laenge'); ?>

        <?php echo $this->form->getControlGroup('breite'); ?>

		<?php echo JHtml::_('bootstrap.endTab'); ?>
		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'params', JText::_('COM_PLANER_FIRMA_PARAMS', true)); ?>

        <?php foreach ($this->form->getGroup('params') as $field) : ?>
			<?php echo $field->getControlGroup(); ?>
		<?php endforeach; ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>

	</div>

	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
