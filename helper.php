<?php
/**
 * Helper class for Article Title module
 * 
 * @package    Article Title
 *
 * @author     Brian Mitchell <brian.mitchell@intergen.org>
 * @copyright  intergen, inc 2022
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://intergen.org
 */

class ModArticleTitleHelper
{
    /**
     * Retrieves the title and the background image
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getArticleTitle($params)
    {
        // set the variable for the background image
        $bkgd = $params->get('module-background');

        // add an inline style so that we can set the image in params as the module background
        $document = Factory::getDocument();
        $document->addStyleDeclaration( $style );

        // find the sitename
        $sitename = " - " . $app->getCfg('sitename');

        // if the sitename is included in the page <title>, remove it
        $menuTitle = Factory::getDocument()->getTitle();
        $text = preg_replace('/' . $sitename . '/i', '', $menuTitle);

        // use the title override if it is set
        $override = $params->get('title-override');
        if (isset($overide)) {
            $text = $overide;
        }
    }
}