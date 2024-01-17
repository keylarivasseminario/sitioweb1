<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url			= ($mode == 'icons') ? 'skype:' . RSSocialHelper::escape($params->get('skype_user_name')) . '?chat' : 'https://web.skype.com/share?url=' . rawurlencode($current_url);
	$caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_SKYPE_CHAT') : JText::_('MOD_RSSOCIAL_SHARE');
	
	RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
?>
	<li>
		<a id="rssocial-skype-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?>>
			<span class="rssocial-icon rssocial-icon-skype"></span>
		</a>
		<?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
		<div id="rssocial-skype-caption" class="rssocial-caption">
			<a target="_blank" href="<?php echo $url; ?>">
				<?php echo $caption_text; ?>
			</a>
		</div>
		<?php } ?>
	</li>
<?php
} else {
$language	= str_replace('_', '-', $language);
$script		= '(function(r, d, s) {
		r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
			var js, sjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(p.id)) { return; }
			js = d.createElement(s);
			js.id = p.id;
			js.src = p.scriptToLoad;
			js.onload = p.callback
			sjs.parentNode.insertBefore(js, sjs);
		};
		var p = {
			scriptToLoad: \'https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js\',
			id: \'skype_web_sdk\'
		};
		r.loadSkypeWebSdkAsync(p);
	})(window, document, \'script\');';
	
	$document->addScriptDeclaration($script);
?>
	<li id="rssocial-sharing-button" class="rssocial-sharing-skype-container <?php echo $params->get('skype_size'); ?>">
		<div class="skype-share" data-href="<?php echo $current_url; ?>" data-lang="<?php echo $language; ?>" data-style="<?php echo $params->get('skype_size'); ?>"></div>
	</li>
<?php } ?>