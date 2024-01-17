<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die('Restricted access');
?>

<div id="rssocial-<?php echo $module->id; ?>" class="rssocial-container<?php echo $moduleclass_sfx . ' ' . $container_classes; ?>">
	<?php if ($has_popup_button) { ?>
	<a id="rssocial-popup-button" class="rssocial-popup-button<?php echo $popup_classes; ?>" href="javascript:void(0);"><span class="rssocial-icon rssocial-icon-share"></span></a>
	<?php } ?>
	<ul id="rssocial-ul-<?php echo $module->id; ?>" class="rssocial-<?php echo $mode . ' ' . $list_classes; ?>">
	<?php
	foreach ($socials as $social) {
		if ($params->get($social)) {
			require JModuleHelper::getLayoutPath('mod_rssocial', $social);
		}
	}
	?>
	<?php if ($params->get('icon_positioning') == 'floating' && !$has_popup_button) { ?>
	<li class="rssocial-slide-button">
		<a id="rssocial-slide-button" class="rssocial-link" href="javascript:void(0);"><span class="rssocial-icon rssocial-icon-more"></span></a>
	</li>
	<?php } ?>
	</ul>
</div>
<div class="rssocial-clear"></div>
