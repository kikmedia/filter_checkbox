<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FrontendFilter
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */
if (!defined('TL_ROOT'))
{
	die('You cannot access this file directly!');
}


/**
 * filter types
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['checkbox'] = 'Yes/no';


/**
 * fields
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['yesfield']     = array('Yes instead of attribute name', 'Show yes instead of attribute name and provide attribute name as a headline.');

?>