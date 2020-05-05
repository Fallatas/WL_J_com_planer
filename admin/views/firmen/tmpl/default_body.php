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
				<a href="<?php echo JRoute::_('index.php?option=com_planer&task=firmen.edit&id='.(int) $item->id); ?>">
					<?php echo $this->escape($item->firmentitle); ?></a>
			<?php else: ?>
				<?php echo $this->escape($item->firmentitle); ?>
			<?php endif; ?>
		</td>
        <td>
            <?php echo $this->escape($item->kundennummer); ?>
        </td>
        <td>
            <?php echo $this->escape($item->firmenname); ?>
        </td>
        <td>
            <?php echo $this->escape($item->firmenmail); ?>
        </td>
        <td>
            <?php echo $this->escape($item->land); ?>
        </td>
		<td>
            <?php echo $this->escape($item->firmenplz); ?>
        </td>
        <td>
            <?php echo $this->escape($item->ort); ?>
        </td>
        <td>
            <?php echo $this->escape($item->laenge); ?>
        </td>
        <td>
            <?php echo $this->escape($item->breite); ?>
        </td>
		<td class="center hidden-phone">
			<?php echo (int) $item->id; ?>
		</td>
	</tr>
<?php endforeach; ?>