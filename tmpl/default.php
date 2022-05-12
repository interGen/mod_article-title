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

// set the background of the module
$style = '.mod-article-title {
    background-image: url("' . $bkgd . '");
}';

// place the title in the module as heading 1
echo '<h1 class="mod-article-title-text">' . $text . '</h1>';
?>