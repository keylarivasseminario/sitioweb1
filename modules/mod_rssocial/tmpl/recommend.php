<?php
/**
* @package RSSocial!
* @copyright (C) 2014 www.rsjoomla.com
* @license GPL, http://www.gnu.org/licenses/gpl-2.0.html
*/

if (substr($mode, 0, 5) == 'icons') {
	$url = RSSocialHelper::getMailToURL();

    if ($url)
    {
        $caption_text	= ($mode == 'icons') ? JText::_('MOD_RSSOCIAL_RECOMMEND_SEND') : JText::_('MOD_RSSOCIAL_RECOMMEND');

        RSSocialHelper::addStyle($module->id, $social, $params, $icon_background);
    ?>
        <li>
            <a id="rssocial-recommend-icon" class="rssocial-link <?php echo $icon_effect; ?>" target="_blank" href="<?php echo $url; ?>"<?php echo !empty($params->get('popup')) ? ' title="' . $caption_text . '"' : ''; ?> onclick="window.open(this.href,'win2','width=550,height=450,menubar=yes,resizable=yes'); return false;">
                <span class="rssocial-icon rssocial-icon-recommend"></span>
            </a>
            <?php if ($params->get('caption') && empty($params->get('popup'))) { ?>
            <div id="rssocial-recommend-caption" class="rssocial-caption">
                <a target="_blank" href="<?php echo $url; ?>" onclick="window.open(this.href,'win2','width=550,height=450,menubar=yes,resizable=yes'); return false;">
                    <?php echo $caption_text; ?>
                </a>
            </div>
            <?php } ?>
        </li>
<?php }
}