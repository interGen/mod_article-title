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
$menuTitle = Factory::getDocument()->getTitle();
$title = $params->get('title-override', $menuTitle);
echo $title;

?>