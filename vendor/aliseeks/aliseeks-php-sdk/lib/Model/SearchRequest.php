<?php
/**
 * SearchRequest
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

use \ArrayAccess;
use \AliseeksApi\ObjectSerializer;

/**
 * SearchRequest Class Doc Comment
 *
 * @category Class
 * @description Non realtime search request body
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'text' => 'string',
        'sort' => 'string',
        'currency' => '\AliseeksApi\Model\NonRealtimeCurrency',
        'category' => 'int',
        'include_subcategories' => 'bool',
        'sort_direction' => 'string',
        'ratings_range' => '\AliseeksApi\Model\DoubleRange',
        'quantity_range' => '\AliseeksApi\Model\IntegerRange',
        'price_range' => '\AliseeksApi\Model\DoubleRange',
        'unit_price_range' => '\AliseeksApi\Model\DoubleRange',
        'order_range' => '\AliseeksApi\Model\IntegerRange',
        'item_id_range' => '\AliseeksApi\Model\StringRange',
        'freight_types' => 'string[]',
        'skip' => 'int',
        'limit' => 'int',
        'scroll_pagination' => 'bool',
        'scroll_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'text' => null,
        'sort' => null,
        'currency' => null,
        'category' => 'int32',
        'include_subcategories' => null,
        'sort_direction' => null,
        'ratings_range' => null,
        'quantity_range' => null,
        'price_range' => null,
        'unit_price_range' => null,
        'order_range' => null,
        'item_id_range' => null,
        'freight_types' => null,
        'skip' => 'int32',
        'limit' => 'int32',
        'scroll_pagination' => null,
        'scroll_identifier' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'text' => 'text',
        'sort' => 'sort',
        'currency' => 'currency',
        'category' => 'category',
        'include_subcategories' => 'includeSubcategories',
        'sort_direction' => 'sortDirection',
        'ratings_range' => 'ratingsRange',
        'quantity_range' => 'quantityRange',
        'price_range' => 'priceRange',
        'unit_price_range' => 'unitPriceRange',
        'order_range' => 'orderRange',
        'item_id_range' => 'itemIdRange',
        'freight_types' => 'freightTypes',
        'skip' => 'skip',
        'limit' => 'limit',
        'scroll_pagination' => 'scrollPagination',
        'scroll_identifier' => 'scrollIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'sort' => 'setSort',
        'currency' => 'setCurrency',
        'category' => 'setCategory',
        'include_subcategories' => 'setIncludeSubcategories',
        'sort_direction' => 'setSortDirection',
        'ratings_range' => 'setRatingsRange',
        'quantity_range' => 'setQuantityRange',
        'price_range' => 'setPriceRange',
        'unit_price_range' => 'setUnitPriceRange',
        'order_range' => 'setOrderRange',
        'item_id_range' => 'setItemIdRange',
        'freight_types' => 'setFreightTypes',
        'skip' => 'setSkip',
        'limit' => 'setLimit',
        'scroll_pagination' => 'setScrollPagination',
        'scroll_identifier' => 'setScrollIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'sort' => 'getSort',
        'currency' => 'getCurrency',
        'category' => 'getCategory',
        'include_subcategories' => 'getIncludeSubcategories',
        'sort_direction' => 'getSortDirection',
        'ratings_range' => 'getRatingsRange',
        'quantity_range' => 'getQuantityRange',
        'price_range' => 'getPriceRange',
        'unit_price_range' => 'getUnitPriceRange',
        'order_range' => 'getOrderRange',
        'item_id_range' => 'getItemIdRange',
        'freight_types' => 'getFreightTypes',
        'skip' => 'getSkip',
        'limit' => 'getLimit',
        'scroll_pagination' => 'getScrollPagination',
        'scroll_identifier' => 'getScrollIdentifier'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const SORT_PRODUCT_ID = 'PRODUCT_ID';
    const SORT_UPDATE_TIME = 'UPDATE_TIME';
    const SORT_WHOLESALE_PRICE = 'WHOLESALE_PRICE';
    const SORT_ITEM_RATING = 'ITEM_RATING';
    const SORT_ORDERS = 'ORDERS';
    const SORT_BEST_MATCH = 'BEST_MATCH';
    const SORT_DIRECTION_ASC = 'ASC';
    const SORT_DIRECTION_DESC = 'DESC';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_PRODUCT_ID,
            self::SORT_UPDATE_TIME,
            self::SORT_WHOLESALE_PRICE,
            self::SORT_ITEM_RATING,
            self::SORT_ORDERS,
            self::SORT_BEST_MATCH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortDirectionAllowableValues()
    {
        return [
            self::SORT_DIRECTION_ASC,
            self::SORT_DIRECTION_DESC,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : 'BEST_MATCH';
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['include_subcategories'] = isset($data['include_subcategories']) ? $data['include_subcategories'] : false;
        $this->container['sort_direction'] = isset($data['sort_direction']) ? $data['sort_direction'] : 'ASC';
        $this->container['ratings_range'] = isset($data['ratings_range']) ? $data['ratings_range'] : null;
        $this->container['quantity_range'] = isset($data['quantity_range']) ? $data['quantity_range'] : null;
        $this->container['price_range'] = isset($data['price_range']) ? $data['price_range'] : null;
        $this->container['unit_price_range'] = isset($data['unit_price_range']) ? $data['unit_price_range'] : null;
        $this->container['order_range'] = isset($data['order_range']) ? $data['order_range'] : null;
        $this->container['item_id_range'] = isset($data['item_id_range']) ? $data['item_id_range'] : null;
        $this->container['freight_types'] = isset($data['freight_types']) ? $data['freight_types'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['scroll_pagination'] = isset($data['scroll_pagination']) ? $data['scroll_pagination'] : false;
        $this->container['scroll_identifier'] = isset($data['scroll_identifier']) ? $data['scroll_identifier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($this->container['sort_direction']) && !in_array($this->container['sort_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sort_direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['skip']) && ($this->container['skip'] > 10000)) {
            $invalidProperties[] = "invalid value for 'skip', must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['skip']) && ($this->container['skip'] < 0)) {
            $invalidProperties[] = "invalid value for 'skip', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['limit']) && ($this->container['limit'] > 50)) {
            $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['limit']) && ($this->container['limit'] < 5)) {
            $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 5.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The search query
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $allowedValues = $this->getSortAllowableValues();
        if (!is_null($sort) && !in_array($sort, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \AliseeksApi\Model\NonRealtimeCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \AliseeksApi\Model\NonRealtimeCurrency|null $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category The AliExpress category to search in
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets include_subcategories
     *
     * @return bool|null
     */
    public function getIncludeSubcategories()
    {
        return $this->container['include_subcategories'];
    }

    /**
     * Sets include_subcategories
     *
     * @param bool|null $include_subcategories When this flag is set to `true` the `category` field will be expanded so that all items in sub-categories will be included
     *
     * @return $this
     */
    public function setIncludeSubcategories($include_subcategories)
    {
        $this->container['include_subcategories'] = $include_subcategories;

        return $this;
    }

    /**
     * Gets sort_direction
     *
     * @return string|null
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     *
     * @param string|null $sort_direction The direction to sort the results by. Only valid for certain `sort` values
     *
     * @return $this
     */
    public function setSortDirection($sort_direction)
    {
        $allowedValues = $this->getSortDirectionAllowableValues();
        if (!is_null($sort_direction) && !in_array($sort_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sort_direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets ratings_range
     *
     * @return \AliseeksApi\Model\DoubleRange|null
     */
    public function getRatingsRange()
    {
        return $this->container['ratings_range'];
    }

    /**
     * Sets ratings_range
     *
     * @param \AliseeksApi\Model\DoubleRange|null $ratings_range ratings_range
     *
     * @return $this
     */
    public function setRatingsRange($ratings_range)
    {
        $this->container['ratings_range'] = $ratings_range;

        return $this;
    }

    /**
     * Gets quantity_range
     *
     * @return \AliseeksApi\Model\IntegerRange|null
     */
    public function getQuantityRange()
    {
        return $this->container['quantity_range'];
    }

    /**
     * Sets quantity_range
     *
     * @param \AliseeksApi\Model\IntegerRange|null $quantity_range quantity_range
     *
     * @return $this
     */
    public function setQuantityRange($quantity_range)
    {
        $this->container['quantity_range'] = $quantity_range;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return \AliseeksApi\Model\DoubleRange|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param \AliseeksApi\Model\DoubleRange|null $price_range price_range
     *
     * @return $this
     */
    public function setPriceRange($price_range)
    {
        $this->container['price_range'] = $price_range;

        return $this;
    }

    /**
     * Gets unit_price_range
     *
     * @return \AliseeksApi\Model\DoubleRange|null
     */
    public function getUnitPriceRange()
    {
        return $this->container['unit_price_range'];
    }

    /**
     * Sets unit_price_range
     *
     * @param \AliseeksApi\Model\DoubleRange|null $unit_price_range unit_price_range
     *
     * @return $this
     */
    public function setUnitPriceRange($unit_price_range)
    {
        $this->container['unit_price_range'] = $unit_price_range;

        return $this;
    }

    /**
     * Gets order_range
     *
     * @return \AliseeksApi\Model\IntegerRange|null
     */
    public function getOrderRange()
    {
        return $this->container['order_range'];
    }

    /**
     * Sets order_range
     *
     * @param \AliseeksApi\Model\IntegerRange|null $order_range order_range
     *
     * @return $this
     */
    public function setOrderRange($order_range)
    {
        $this->container['order_range'] = $order_range;

        return $this;
    }

    /**
     * Gets item_id_range
     *
     * @return \AliseeksApi\Model\StringRange|null
     */
    public function getItemIdRange()
    {
        return $this->container['item_id_range'];
    }

    /**
     * Sets item_id_range
     *
     * @param \AliseeksApi\Model\StringRange|null $item_id_range item_id_range
     *
     * @return $this
     */
    public function setItemIdRange($item_id_range)
    {
        $this->container['item_id_range'] = $item_id_range;

        return $this;
    }

    /**
     * Gets freight_types
     *
     * @return string[]|null
     */
    public function getFreightTypes()
    {
        return $this->container['freight_types'];
    }

    /**
     * Sets freight_types
     *
     * @param string[]|null $freight_types Filter by freight types
     *
     * @return $this
     */
    public function setFreightTypes($freight_types)
    {
        $this->container['freight_types'] = $freight_types;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int|null $skip Skip a number of items, if you need to skip more than 10000 items then use the scroll feature
     *
     * @return $this
     */
    public function setSkip($skip)
    {

        if (!is_null($skip) && ($skip > 10000)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling SearchRequest., must be smaller than or equal to 10000.');
        }
        if (!is_null($skip) && ($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling SearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Limit the request to a number of items
     *
     * @return $this
     */
    public function setLimit($limit)
    {

        if (!is_null($limit) && ($limit > 50)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling SearchRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($limit) && ($limit < 5)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling SearchRequest., must be bigger than or equal to 5.');
        }

        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets scroll_pagination
     *
     * @return bool|null
     */
    public function getScrollPagination()
    {
        return $this->container['scroll_pagination'];
    }

    /**
     * Sets scroll_pagination
     *
     * @param bool|null $scroll_pagination When this value is `true` then you will receive a scroll identifier which you can use to request the next page of results. The scroll identifier is good for 60 seconds.
     *
     * @return $this
     */
    public function setScrollPagination($scroll_pagination)
    {
        $this->container['scroll_pagination'] = $scroll_pagination;

        return $this;
    }

    /**
     * Gets scroll_identifier
     *
     * @return string|null
     */
    public function getScrollIdentifier()
    {
        return $this->container['scroll_identifier'];
    }

    /**
     * Sets scroll_identifier
     *
     * @param string|null $scroll_identifier The scroll identifier which can be retrieved by sending an initial search request with `scrollPagination` set to `true`. Scroll identifiers are good for 60 seconds.
     *
     * @return $this
     */
    public function setScrollIdentifier($scroll_identifier)
    {
        $this->container['scroll_identifier'] = $scroll_identifier;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


