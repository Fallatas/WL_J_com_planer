<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
?>
<tr>
	<th width="1%" class="hidden-phone center">
		<?php echo JHtml::_('grid.checkall'); ?>
	</th>
	<th class="title">
		<?php echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'title', $listDirn, $listOrder); ?>
	</th>
    <th class="catid">
        <?php echo JHtml::_('grid.sort', 'Kundennummer', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="handy">
        <?php echo JHtml::_('grid.sort', 'Firmenname', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="telefon">
        <?php echo JHtml::_('grid.sort', 'firmenmail', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="Fax">
        <?php echo JHtml::_('grid.sort', 'Land', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="email">
        <?php echo JHtml::_('grid.sort', 'PLZ', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="nametitle">
        <?php echo JHtml::_('grid.sort', 'Ort', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="anrede">
        <?php echo JHtml::_('grid.sort', 'Länge', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="firma">
        <?php echo JHtml::_('grid.sort', 'Breite', 'title', $listDirn, $listOrder); ?>
    </th>
	<th width="1%" class="nowrap center hidden-phone">
		<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'id', $listDirn, $listOrder); ?>
	</th>
</tr>
