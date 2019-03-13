<?php
/**
 * ProductRequestComponent
 *
 * PHP version 5
 *
 * @category Class
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Aliseeks API
 *
 * AliExpress product searching and product details retrieval API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AliseeksApi\Model;
use \AliseeksApi\ObjectSerializer;

/**
 * ProductRequestComponent Class Doc Comment
 *
 * @category Class
 * @description A component requested from a product request
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductRequestComponent
{
    /**
     * Possible values of this enum
     */
    const SHIPPING = 'shipping';
    const HTML_DESCRIPTION = 'html_description';
    const VARIATIONS = 'variations';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPING,
            self::HTML_DESCRIPTION,
            self::VARIATIONS,
        ];
    }
}


