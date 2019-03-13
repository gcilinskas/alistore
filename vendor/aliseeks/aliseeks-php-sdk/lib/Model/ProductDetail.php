<?php
/**
 * ProductDetail
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
 * ProductDetail Class Doc Comment
 *
 * @category Class
 * @description AliExpress product details
 * @package  AliseeksApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'category_id' => 'string',
        'company_id' => 'string',
        'seller_id' => 'string',
        'title' => 'string',
        'product_images' => 'string[]',
        'status_id' => 'int',
        'count_per_lot' => 'int',
        'wish_list_count' => 'int',
        'unit' => 'string',
        'multi_unit' => 'string',
        'promotions' => '\AliseeksApi\Model\PromotionOption[]',
        'attributes' => '\AliseeksApi\Model\ProductAttribute[]',
        'prices' => '\AliseeksApi\Model\ProductPriceOption[]',
        'reviews' => '\AliseeksApi\Model\ProductReviews',
        'trade' => '\AliseeksApi\Model\TradeInformation',
        'sku_properties' => '\AliseeksApi\Model\SkuProperty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'category_id' => null,
        'company_id' => null,
        'seller_id' => null,
        'title' => null,
        'product_images' => null,
        'status_id' => 'int32',
        'count_per_lot' => 'int32',
        'wish_list_count' => 'int32',
        'unit' => null,
        'multi_unit' => null,
        'promotions' => null,
        'attributes' => null,
        'prices' => null,
        'reviews' => null,
        'trade' => null,
        'sku_properties' => null
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
        'id' => 'id',
        'category_id' => 'categoryId',
        'company_id' => 'companyId',
        'seller_id' => 'sellerId',
        'title' => 'title',
        'product_images' => 'productImages',
        'status_id' => 'statusId',
        'count_per_lot' => 'countPerLot',
        'wish_list_count' => 'wishListCount',
        'unit' => 'unit',
        'multi_unit' => 'multiUnit',
        'promotions' => 'promotions',
        'attributes' => 'attributes',
        'prices' => 'prices',
        'reviews' => 'reviews',
        'trade' => 'trade',
        'sku_properties' => 'skuProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'category_id' => 'setCategoryId',
        'company_id' => 'setCompanyId',
        'seller_id' => 'setSellerId',
        'title' => 'setTitle',
        'product_images' => 'setProductImages',
        'status_id' => 'setStatusId',
        'count_per_lot' => 'setCountPerLot',
        'wish_list_count' => 'setWishListCount',
        'unit' => 'setUnit',
        'multi_unit' => 'setMultiUnit',
        'promotions' => 'setPromotions',
        'attributes' => 'setAttributes',
        'prices' => 'setPrices',
        'reviews' => 'setReviews',
        'trade' => 'setTrade',
        'sku_properties' => 'setSkuProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'category_id' => 'getCategoryId',
        'company_id' => 'getCompanyId',
        'seller_id' => 'getSellerId',
        'title' => 'getTitle',
        'product_images' => 'getProductImages',
        'status_id' => 'getStatusId',
        'count_per_lot' => 'getCountPerLot',
        'wish_list_count' => 'getWishListCount',
        'unit' => 'getUnit',
        'multi_unit' => 'getMultiUnit',
        'promotions' => 'getPromotions',
        'attributes' => 'getAttributes',
        'prices' => 'getPrices',
        'reviews' => 'getReviews',
        'trade' => 'getTrade',
        'sku_properties' => 'getSkuProperties'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['product_images'] = isset($data['product_images']) ? $data['product_images'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['count_per_lot'] = isset($data['count_per_lot']) ? $data['count_per_lot'] : null;
        $this->container['wish_list_count'] = isset($data['wish_list_count']) ? $data['wish_list_count'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['multi_unit'] = isset($data['multi_unit']) ? $data['multi_unit'] : null;
        $this->container['promotions'] = isset($data['promotions']) ? $data['promotions'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['prices'] = isset($data['prices']) ? $data['prices'] : null;
        $this->container['reviews'] = isset($data['reviews']) ? $data['reviews'] : null;
        $this->container['trade'] = isset($data['trade']) ? $data['trade'] : null;
        $this->container['sku_properties'] = isset($data['sku_properties']) ? $data['sku_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The AliExpress item ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The item category
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id The company ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return string|null
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param string|null $seller_id The seller ID
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The subject / title of the item
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets product_images
     *
     * @return string[]|null
     */
    public function getProductImages()
    {
        return $this->container['product_images'];
    }

    /**
     * Sets product_images
     *
     * @param string[]|null $product_images The item images
     *
     * @return $this
     */
    public function setProductImages($product_images)
    {
        $this->container['product_images'] = $product_images;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int|null $status_id The AliExpress status
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets count_per_lot
     *
     * @return int|null
     */
    public function getCountPerLot()
    {
        return $this->container['count_per_lot'];
    }

    /**
     * Sets count_per_lot
     *
     * @param int|null $count_per_lot The number of items per lot
     *
     * @return $this
     */
    public function setCountPerLot($count_per_lot)
    {
        $this->container['count_per_lot'] = $count_per_lot;

        return $this;
    }

    /**
     * Gets wish_list_count
     *
     * @return int|null
     */
    public function getWishListCount()
    {
        return $this->container['wish_list_count'];
    }

    /**
     * Sets wish_list_count
     *
     * @param int|null $wish_list_count Number of times the item has been added to a wishlist
     *
     * @return $this
     */
    public function setWishListCount($wish_list_count)
    {
        $this->container['wish_list_count'] = $wish_list_count;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit The unit of the item
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets multi_unit
     *
     * @return string|null
     */
    public function getMultiUnit()
    {
        return $this->container['multi_unit'];
    }

    /**
     * Sets multi_unit
     *
     * @param string|null $multi_unit The unit for multiple items
     *
     * @return $this
     */
    public function setMultiUnit($multi_unit)
    {
        $this->container['multi_unit'] = $multi_unit;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \AliseeksApi\Model\PromotionOption[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \AliseeksApi\Model\PromotionOption[]|null $promotions The promotions present on an item
     *
     * @return $this
     */
    public function setPromotions($promotions)
    {
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \AliseeksApi\Model\ProductAttribute[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \AliseeksApi\Model\ProductAttribute[]|null $attributes The attributes of an item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \AliseeksApi\Model\ProductPriceOption[]|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \AliseeksApi\Model\ProductPriceOption[]|null $prices List of price options for an item
     *
     * @return $this
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets reviews
     *
     * @return \AliseeksApi\Model\ProductReviews|null
     */
    public function getReviews()
    {
        return $this->container['reviews'];
    }

    /**
     * Sets reviews
     *
     * @param \AliseeksApi\Model\ProductReviews|null $reviews reviews
     *
     * @return $this
     */
    public function setReviews($reviews)
    {
        $this->container['reviews'] = $reviews;

        return $this;
    }

    /**
     * Gets trade
     *
     * @return \AliseeksApi\Model\TradeInformation|null
     */
    public function getTrade()
    {
        return $this->container['trade'];
    }

    /**
     * Sets trade
     *
     * @param \AliseeksApi\Model\TradeInformation|null $trade trade
     *
     * @return $this
     */
    public function setTrade($trade)
    {
        $this->container['trade'] = $trade;

        return $this;
    }

    /**
     * Gets sku_properties
     *
     * @return \AliseeksApi\Model\SkuProperty[]|null
     */
    public function getSkuProperties()
    {
        return $this->container['sku_properties'];
    }

    /**
     * Sets sku_properties
     *
     * @param \AliseeksApi\Model\SkuProperty[]|null $sku_properties List of sku properties that correspond to an item
     *
     * @return $this
     */
    public function setSkuProperties($sku_properties)
    {
        $this->container['sku_properties'] = $sku_properties;

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


