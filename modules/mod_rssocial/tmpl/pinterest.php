<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

$pinit_data = '';

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('pinterest_url')) : 'https://www.pinterest.com/pin/create/button/';
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_PINTEREST_FOLLOW') : JText::_('MOD_RSSOCIAL_PIN');
	
	if ($mode == 'icons-sharing') {
		if (!empty($params->get('pinit_type'))) {
			$pinit_data .= ' data-pin-do="' . $params->get('pinit_type') . '"';
		}
		if (!empty($params->get('pinit_image')) && ($params->get('pinit_type') == 'buttonPin')) {
			$pinit_data .= ' data-pin-media="' . RSSocialHelper::escape($params->get('pinit_image')) . '"';
		}
		if (!empty($params->get('pinit_description')) && ($params->get('pinit_type') == 'buttonPin')) {
			$pinit_data .= ' data-pin-description="' . RSSocialHelper::escape($params->get('pinit_description')) . '"';
		}
		$pinit_data .= ' data-pin-custom="true"';
	}
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
	<?php if ($mode == 'icons-sharing') { ?>
		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
	<?php } ?>
		<a id="rssocial-pinterest-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo $pinit_data; ?><?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-pinterest"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-pinterest-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>"<?php echo $pinit_data; ?>>
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php
} else {
	if (!empty($params->get('pinit_type'))) {
		$pinit_data .= ' data-pin-do="' . $params->get('pinit_type') . '"';
	}
	if (!empty($params->get('pinit_size'))) {
		$pinit_data .= ' data-pin-tall="' . $params->get('pinit_size') . '"';
	}
	if (!empty($params->get('pinit_counter')) && ($params->get('pinit_type') == 'buttonPin')) {
		$pinit_data .= ' data-pin-count="' . $params->get('pinit_counter') . '"';
	}
	if (!empty($params->get('pinit_image')) && ($params->get('pinit_type') == 'buttonPin')) {
		$pinit_data .= ' data-pin-media="' . RSSocialHelper::escape($params->get('pinit_image')) . '"';
	}
	if (!empty($params->get('pinit_description')) && ($params->get('pinit_type') == 'buttonPin')) {
		$pinit_data .= ' data-pin-description="' . RSSocialHelper::escape($params->get('pinit_description')) . '"';
	}
?>
	<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
	<li id="rssocial-sharing-button" class="rssocial-sharing-pinterest-container<?php echo ($params->get('pinit_size') == 'false') ? ' small' : ''; ?>">
		<a href="https://www.pinterest.com/pin/create/button/"<?php echo $pinit_data; ?>></a>
	</li>
<?php } ?>