<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$version		= RSSocialHelper::isMobileDevice() ? 'api' : 'web';
	$url			= ($mode == 'icons') ? 'https://' . $version . '.whatsapp.com/send?phone=' . RSSocialHelper::phoneNumber($params->get('whatsapp_phone')) : 'https://' . $version . '.whatsapp.com/send?text=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_WHATSAPP_CHAT') : JText::_('MOD_RSSOCIAL_SHARE');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-whatsapp-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-whatsapp"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-whatsapp-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } ?>