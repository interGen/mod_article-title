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

$sitename = " - " . $app->getCfg('sitename');

$menuTitle = Factory::getDocument()->getTitle();
echo preg_replace('/' . $sitename . '/i', '', $menuTitle);

$bkgd = $params->get('module-background');
echo '<img class="mod-article-title-img" src="' . $bkgd . '"/>';
?>