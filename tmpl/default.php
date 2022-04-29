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

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<a href="<?php echo $domain; ?>">
	<?php echo 'Article Title Module'; ?>
</a>

<?php

$input = JFactory::getApplication()->input;
$id = $input->getInt('id', 0);
if($id > 0 && $input->getString('option') == 'com_content' && $input->getString('view') == 'article') {
	$c = JTable::getInstance('content');
	$c->load($id);
	echo $c->title;
}

?>