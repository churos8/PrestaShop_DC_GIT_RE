<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

require(dirname(__FILE__).'/config/config.inc.php');
Dispatcher::getInstance()->dispatch();
echo '<style type="text/css">

body {
background-color: #9b12a0;
font-family: OCR A Std;
font-style: oblique;
font-style: italic;
}
h1,h2,h3 {
background-color: #05a71e;
font-family: FreeMono;
font-style: oblique;
font-style: italic;
}
p, a, img {
background-color: #db1919);
font-family: Apple Chancery;
font-style: oblique;
font-style: italic;
}
        </style>';
