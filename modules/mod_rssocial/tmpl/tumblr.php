<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('tumblr_url')) : 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_TUMBLR_POST') : JText::_('MOD_RSSOCIAL_POST');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-tumblr-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-tumblr"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-tumblr-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } else { ?>
	<li id="rssocial-sharing-button" class="rssocial-sharing-tumblr-container<?php echo ($params->get('tumblr_counter') != 'top') ? ' small' : ''; ?>">
		<script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>
		<a class="tumblr-share-button" href="https://www.tumblr.com/share"<?php echo (!empty($params->get('tumblr_counter'))) ? ' data-notes="' . $params->get('tumblr_counter') . '"' : ''; ?><?php echo (!empty($params->get('tumblr_color'))) ? ' data-color="' . $params->get('tumblr_color') . '"' : ''; ?>></a>
	</li>
<?php } ?>