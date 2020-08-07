<?php
/**
 * Body3
 *
 * PHP version 5
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Axerve-php
 *
 * Axerve API client made for PHP
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Axerve Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Axerve\Client\Model;

use \ArrayAccess;
use \Axerve\Client\ObjectSerializer;

/**
 * Body3 Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_type_details' => '\Axerve\Client\Model\Apiv1paymentsubmitPaymentTypeDetails',
'response_ur_ls' => '\Axerve\Client\Model\Apiv1paymentsubmitResponseURLs',
'shop_login' => 'string',
'payment_type' => 'string',
'buyer' => '\Axerve\Client\Model\Apiv1paymentsubmitBuyer'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_type_details' => null,
'response_ur_ls' => null,
'shop_login' => null,
'payment_type' => null,
'buyer' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_type_details' => 'paymentTypeDetails',
'response_ur_ls' => 'responseURLs',
'shop_login' => 'shopLogin',
'payment_type' => 'paymentType',
'buyer' => 'buyer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_type_details' => 'setPaymentTypeDetails',
'response_ur_ls' => 'setResponseUrLs',
'shop_login' => 'setShopLogin',
'payment_type' => 'setPaymentType',
'buyer' => 'setBuyer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_type_details' => 'getPaymentTypeDetails',
'response_ur_ls' => 'getResponseUrLs',
'shop_login' => 'getShopLogin',
'payment_type' => 'getPaymentType',
'buyer' => 'getBuyer'    ];

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
        return self::$swaggerModelName;
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
        $this->container['payment_type_details'] = isset($data['payment_type_details']) ? $data['payment_type_details'] : null;
        $this->container['response_ur_ls'] = isset($data['response_ur_ls']) ? $data['response_ur_ls'] : null;
        $this->container['shop_login'] = isset($data['shop_login']) ? $data['shop_login'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
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
     * Gets payment_type_details
     *
     * @return \Axerve\Client\Model\Apiv1paymentsubmitPaymentTypeDetails
     */
    public function getPaymentTypeDetails()
    {
        return $this->container['payment_type_details'];
    }

    /**
     * Sets payment_type_details
     *
     * @param \Axerve\Client\Model\Apiv1paymentsubmitPaymentTypeDetails $payment_type_details payment_type_details
     *
     * @return $this
     */
    public function setPaymentTypeDetails($payment_type_details)
    {
        $this->container['payment_type_details'] = $payment_type_details;

        return $this;
    }

    /**
     * Gets response_ur_ls
     *
     * @return \Axerve\Client\Model\Apiv1paymentsubmitResponseURLs
     */
    public function getResponseUrLs()
    {
        return $this->container['response_ur_ls'];
    }

    /**
     * Sets response_ur_ls
     *
     * @param \Axerve\Client\Model\Apiv1paymentsubmitResponseURLs $response_ur_ls response_ur_ls
     *
     * @return $this
     */
    public function setResponseUrLs($response_ur_ls)
    {
        $this->container['response_ur_ls'] = $response_ur_ls;

        return $this;
    }

    /**
     * Gets shop_login
     *
     * @return string
     */
    public function getShopLogin()
    {
        return $this->container['shop_login'];
    }

    /**
     * Sets shop_login
     *
     * @param string $shop_login shop_login
     *
     * @return $this
     */
    public function setShopLogin($shop_login)
    {
        $this->container['shop_login'] = $shop_login;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Axerve\Client\Model\Apiv1paymentsubmitBuyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Axerve\Client\Model\Apiv1paymentsubmitBuyer $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
