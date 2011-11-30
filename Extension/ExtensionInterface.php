<?php
/**
 * This file is part of NoiseLabs-SmartyBundle
 *
 * NoiseLabs-SmartyBundle is free software; you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * NoiseLabs-SmartyBundle is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with NoiseLabs-SmartyBundle; if not, see
 * <http://www.gnu.org/licenses/>.
 *
 * Copyright (C) 2011 Vítor Brandão
 *
 * @category    NoiseLabs
 * @package     SmartyBundle
 * @author      Vítor Brandão <noisebleed@noiselabs.org>
 * @copyright   (C) 2011 Vítor Brandão <noisebleed@noiselabs.org>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL-3
 * @link        http://www.noiselabs.org
 * @since       0.1.0
 */

namespace NoiseLabs\Bundle\SmartyBundle\Extension;

interface ExtensionInterface
{
	/**
	* Returns a list of Plugins to add to the existing list.
	*
	* @return array An array of Plugins
	*
	* @since  0.1.0
	* @author Vítor Brandão <noisebleed@noiselabs.org>
	*/
	function getPlugins();

	/**
	 * Returns a list of Filters to add to the existing list.
	 *
	 * @return array An array of Filters
	 *
	 * @since  0.1.0
	 * @author Vítor Brandão <noisebleed@noiselabs.org>
	 */
	function getFilters();

	/**
	 * Returns a list of Globals to add to the existing list.
	 *
	 * @return array An array of Globals
	 *
	 * @since  0.1.0
	 * @author Vítor Brandão <noisebleed@noiselabs.org>
	 */
	function getGlobals();

	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
    function getName();
}