<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? RSSocialHelper::escape($params->get('facebook_url')) : 'https://www.facebook.com/sharer/sharer.php?u=' . $current_url;
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_FACEBOOK_FOLLOW') : JText::_('MOD_RSSOCIAL_SHARE');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-facebook-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-facebook"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-facebook-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php
} else {
	$facebook_width		= (int)RSSocialHelper::escape($params->get('facebook_width'));
	$facebook_height	= (int)RSSocialHelper::escape($params->get('facebook_height'));
	$facebook_args		= array(
		'locale'		=> $language,
		'href'			=> $current_url,
		'layout'		=> $params->get('facebook_like_type'),
		'action'		=> $params->get('facebook_like_action'),
		'show_faces'	=> $params->get('facebook_like_show_faces') ? 'true' : 'false',
		'share'			=> $params->get('facebook_share_button') ? 'true' : 'false'
	);
	$facebook_url		= 'https://www.facebook.com/plugins/like.php?' . http_build_query($facebook_args, '', '&amp;');
	
	$document->addStyleDeclaration('#rssocial-' . $module->id . ' .rssocial-sharing-facebook-container { width: ' . $facebook_width . 'px; height: ' . $facebook_height . 'px; }');
?>
	<li id="rssocial-sharing-button" class="rssocial-sharing-facebook-container">
		<iframe src="<?php echo $facebook_url; ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $facebook_width; ?>px; height:<?php echo $facebook_height; ?>px;" allowTransparency="true"></iframe>
	</li>
<?php } ?>