<?php

/**
 * Options du plugin Knowledgeau chargement.
 *
 * @plugin     Knowledge
 *
 * @copyright  2015
 * @author     Teddy Payet
 * @licence    BY-NC-ND
 */
if (!defined('_ECRIRE_INC_VERSION')) {
    return;
}

ini_set('xdebug.max_nesting_level', 300);
ini_set('memory_limit', '256M');
ini_set('max_execution_time', '240');
ini_set('pcre.backtrack_limit', '100000000');

if (!isset($GLOBALS['z_blocs'])) {
    $GLOBALS['z_blocs'] = array('content','aside','breadcrumb','head','head_js','header','footer');
}
