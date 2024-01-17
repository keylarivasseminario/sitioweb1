<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('twitter_url')) : 'https://twitter.com/share?url=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_TWITTER_FOLLOW') : JText::_('MOD_RSSOCIAL_TWEET');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-twitter-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-twitter"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-twitter-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php } else { ?>
	<li id="rssocial-sharing-button" class="rssocial-sharing-twitter-container <?php echo $params->get('tweet_size'); ?>">
		<a href="//twitter.com/share" class="twitter-share-button" data-url="<?php echo $current_url; ?>" data-size="<?php echo $params->get('tweet_size'); ?>" data-lang="<?php echo $language; ?>"><?php echo JText::_('MOD_RSSOCIAL_TWEET'); ?></a>
		<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
	</li>
<?php } ?>