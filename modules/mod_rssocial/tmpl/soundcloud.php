<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if ($mode == 'icons') {
	$url			= RSSocialHelper::escape($params->get('soundcloud_url'));
	$caption_text	= JText::_('MOD_RSSOCIAL_SOUNDCLOUD_FOLLOW');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-soundcloud-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-soundcloud"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-soundcloud-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } ?>