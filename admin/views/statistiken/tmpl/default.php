<?php


defined('_JEXEC') or die;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

//Chart.js
HTMLHelper::_('script', 'https://cdn.jsdelivr.net/npm/chart.js@2.8.0', array('version' => 'auto', 'relative' => true));
//leaflet.js
HTMLHelper::_('stylesheet', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css', array('version' => 'auto', 'relative' => true));
HTMLHelper::_('script', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', array('version' => 'auto', 'relative' => true));

$this->statistics;
$this->map;
?>


<form action="<?php echo JRoute::_('index.php?option=com_planer&view=statistiken'); ?>" method="post" name="adminForm" id="adminForm">
    <h3>Statistiken</h3>
    <hr>
    <strong>Kundenanzahl: <?php Text::_('MOD_WL_TYPED_MODULE_PLACEHOLDER')?></strong> <br>
    <hr>
    <?php echo JHtml::_('form.token'); ?>
    <canvas id="myChart"></canvas>
    <hr>
    <h3>Kundenstandorte:</h3>
    <hr>
    <div id="Map" style="width: 2000px; height: 2000px;"></div>
</form>
