<?php
/**
 * @package    Article Title
 *
 * @author     Brian Mitchell <brian.mitchell@intergen.org>
 * @copyright  intergen, inc 2022
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://intergen.org
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
$bkgd = $params->get('module-background');

$style = '.mod-article-title {
    background-image: url("' . $bkgd . '");
}';
$document = Factory::getDocument();
$document->addStyleDeclaration( $style );

$sitename = " - " . $app->getCfg('sitename');

$menuTitle = Factory::getDocument()->getTitle();
$text = preg_replace('/' . $sitename . '/i', '', $menuTitle);
echo '<h1 class="mod-article-title-text">' . $text . '</h1>';

// echo '<img class="mod-article-title-img" src="' . $bkgd . '"/>';
?>