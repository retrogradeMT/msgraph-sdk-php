<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NumberColumn File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* NumberColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class NumberColumn extends Entity
{
    /**
    * Gets the decimalPlaces
    *
    * @return string The decimalPlaces
    */
    public function getDecimalPlaces()
    {
        if (array_key_exists("decimalPlaces", $this->_propDict)) {
            return $this->_propDict["decimalPlaces"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decimalPlaces
    *
    * @param string $val The value of the decimalPlaces
    *
    * @return NumberColumn
    */
    public function setDecimalPlaces($val)
    {
        $this->_propDict["decimalPlaces"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    *
    * @param string $val The value of the displayAs
    *
    * @return NumberColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
    /**
    * Gets the maximum
    *
    * @return float The maximum
    */
    public function getMaximum()
    {
        if (array_key_exists("maximum", $this->_propDict)) {
            return $this->_propDict["maximum"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximum
    *
    * @param float $val The value of the maximum
    *
    * @return NumberColumn
    */
    public function setMaximum($val)
    {
        $this->_propDict["maximum"] = $val;
        return $this;
    }
    /**
    * Gets the minimum
    *
    * @return float The minimum
    */
    public function getMinimum()
    {
        if (array_key_exists("minimum", $this->_propDict)) {
            return $this->_propDict["minimum"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimum
    *
    * @param float $val The value of the minimum
    *
    * @return NumberColumn
    */
    public function setMinimum($val)
    {
        $this->_propDict["minimum"] = $val;
        return $this;
    }
}
