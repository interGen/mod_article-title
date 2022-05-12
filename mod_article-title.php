<?php
/**
 * @package    Article Title
 *
 * @author     Brian Mitchell <brian.mitchell@intergen.org>
 * @copyright  intergen, inc 2022
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://intergen.org
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_article-title', $params->get('layout', 'default'));