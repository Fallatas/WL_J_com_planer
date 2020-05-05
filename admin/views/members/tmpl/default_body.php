<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

$user = JFactory::getUser();
?>
<?php foreach ($this->items as $i => $item):
	$canEdit = $user->authorise('core.edit', 'com_planer.category.' . $item->catid);
	?>
	<tr class="row<?php echo $i % 2; ?>">
		<td class="center hidden-phone">
			<?php echo JHtml::_('grid.id', $i, $item->id); ?>
		</td>
		<td class="nowrap has-context">
			<?php if ($canEdit): ?>
				<a href="<?php echo JRoute::_('index.php?option=com_planer&task=job.edit&id='.(int) $item->id); ?>">
					<?php echo $this->escape($item->title); ?></a>
			<?php else: ?>
				<?php echo $this->escape($item->title); ?>
			<?php endif; ?>
		</td>
        <td>
            <?php echo $this->escape($item->catid); ?>
        </td>
        <td>
            <?php echo $this->escape($item->handy); ?>
        </td>
        <td>
            <?php echo $this->escape($item->telefon); ?>
        </td>
        <td>
            <?php echo $this->escape($item->fax); ?>
        </td>
        <td>
            <?php echo $this->escape($item->email); ?>
        </td>
		<td>
            <?php echo $this->escape($item->nametitle); ?>
        </td>
		<td>
            <?php echo $this->escape($item->anrede); ?>
        </td>
		<td>
            <?php echo $this->escape($item->firma); ?>
        </td>
		<td>
            <?php echo $this->escape($item->vorname); ?>
        </td>
		<td>
            <?php echo $this->escape($item->name); ?>
        </td>
		<td>
            <?php echo $this->escape($item->street); ?>
        </td>
		<td>
            <?php echo $this->escape($item->zusatz); ?>
        </td>
		<td>
            <?php echo $this->escape($item->kontonummer); ?>
        </td>
		<td>
            <?php echo $this->escape($item->blz); ?>
        </td>
		<td>
            <?php echo $this->escape($item->kontoinhaber); ?>
        </td>
		<td>
            <?php echo $this->escape($item->bank); ?>
        </td>
		<td>
            <?php echo $this->escape($item->iban); ?>
        </td>
		<td>
            <?php echo $this->escape($item->bic); ?>
        </td>
		<td>
            <?php echo $this->escape($item->datei); ?>
        </td>
		<td>
            <?php echo $this->escape($item->description); ?>
        </td>
		<td class="center hidden-phone">
			<?php echo (int) $item->id; ?>
		</td>
	</tr>
<?php endforeach; ?>