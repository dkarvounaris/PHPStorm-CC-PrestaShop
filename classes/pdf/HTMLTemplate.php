<?php
/*
* 2013-2014 Dimitrios Karovounaris, Innovacy
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Please read the included README for instructions.
*
*  @author Dimitrios Karvounaris <d.karvounaris@innovacy.com>
*  @copyright  2013-2014 Dimitrios Karvounaris, Innovacy
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/

abstract class HTMLTemplate extends HTMLTemplateCore
{

}

/**
 * Class HTMLTemplate
 *
 * @property Smarty $smarty
 */
abstract class HTMLTemplateCore
{

}


/**
 * Fixes a wrong @return value in classes\controller\AdminController
 * by defining a not-existent class and extending it from the
 * correct class.
 * Eliminates "Method not found in class" IDE errors for calls
 * like $this->createTemplate()->method();
 * Eventually, this should be fixed in the PHPDoc comments of the core file.
 **/
abstract class Template extends Smarty_Internal_TemplateBase
{

}