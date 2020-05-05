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
        <?php echo JHtml::_('grid.sort', 'Kategorie', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="handy">
        <?php echo JHtml::_('grid.sort', 'Handy', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="telefon">
        <?php echo JHtml::_('grid.sort', 'Telefon', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="Fax">
        <?php echo JHtml::_('grid.sort', 'Fax', 'title', $listDirn, $listOrder); ?>
    </th>
    <th class="email">
        <?php echo JHtml::_('grid.sort', 'Email', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="nametitle">
        <?php echo JHtml::_('grid.sort', 'Titel', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="anrede">
        <?php echo JHtml::_('grid.sort', 'Anrede', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="firma">
        <?php echo JHtml::_('grid.sort', 'Firma', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="vorname">
        <?php echo JHtml::_('grid.sort', 'Vorname', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="name">
        <?php echo JHtml::_('grid.sort', 'Name', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="street">
        <?php echo JHtml::_('grid.sort', 'Straße', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="zusatz">
        <?php echo JHtml::_('grid.sort', 'Zusatz', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="kontonummer">
        <?php echo JHtml::_('grid.sort', 'Kontonummer', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="blz">
        <?php echo JHtml::_('grid.sort', 'BLZ', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="kontoinhaber">
        <?php echo JHtml::_('grid.sort', 'Kontoinhaber', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="bank">
        <?php echo JHtml::_('grid.sort', 'Bank', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="iban">
        <?php echo JHtml::_('grid.sort', 'IBAN', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="bic">
        <?php echo JHtml::_('grid.sort', 'BIC', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="datei">
        <?php echo JHtml::_('grid.sort', 'Datei', 'title', $listDirn, $listOrder); ?>
    </th>
	<th class="descirtion">
        <?php echo JHtml::_('grid.sort', 'Beschreibung', 'title', $listDirn, $listOrder); ?>
    </th>
	<th width="1%" class="nowrap center hidden-phone">
		<?php echo JHtml::_('grid.sort', 'JGRID_HEADING_ID', 'id', $listDirn, $listOrder); ?>
	</th>
</tr>
