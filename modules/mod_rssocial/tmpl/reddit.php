<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('reddit_url')) : 'https://www.reddit.com/submit?url=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_REDDIT_FRIEND') : JText::_('MOD_RSSOCIAL_SHARE');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-reddit-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-reddit"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-reddit-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } ?>