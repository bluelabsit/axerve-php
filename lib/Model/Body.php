<?php
/**
 * Body
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
 * Body Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Body implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shop_transaction_id' => 'string',
'with_auth' => 'string',
'creditcard' => '\Axerve\Client\Model\Apiv1checkcreditCardCreditcard',
'shop_login' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shop_transaction_id' => null,
'with_auth' => null,
'creditcard' => null,
'shop_login' => null    ];

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
        'shop_transaction_id' => 'shopTransactionID',
'with_auth' => 'withAuth',
'creditcard' => 'creditcard',
'shop_login' => 'shopLogin'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shop_transaction_id' => 'setShopTransactionId',
'with_auth' => 'setWithAuth',
'creditcard' => 'setCreditcard',
'shop_login' => 'setShopLogin'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shop_transaction_id' => 'getShopTransactionId',
'with_auth' => 'getWithAuth',
'creditcard' => 'getCreditcard',
'shop_login' => 'getShopLogin'    ];

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
        $this->container['shop_transaction_id'] = isset($data['shop_transaction_id']) ? $data['shop_transaction_id'] : null;
        $this->container['with_auth'] = isset($data['with_auth']) ? $data['with_auth'] : null;
        $this->container['creditcard'] = isset($data['creditcard']) ? $data['creditcard'] : null;
        $this->container['shop_login'] = isset($data['shop_login']) ? $data['shop_login'] : null;
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
     * Gets shop_transaction_id
     *
     * @return string
     */
    public function getShopTransactionId()
    {
        return $this->container['shop_transaction_id'];
    }

    /**
     * Sets shop_transaction_id
     *
     * @param string $shop_transaction_id shop_transaction_id
     *
     * @return $this
     */
    public function setShopTransactionId($shop_transaction_id)
    {
        $this->container['shop_transaction_id'] = $shop_transaction_id;

        return $this;
    }

    /**
     * Gets with_auth
     *
     * @return string
     */
    public function getWithAuth()
    {
        return $this->container['with_auth'];
    }

    /**
     * Sets with_auth
     *
     * @param string $with_auth with_auth
     *
     * @return $this
     */
    public function setWithAuth($with_auth)
    {
        $this->container['with_auth'] = $with_auth;

        return $this;
    }

    /**
     * Gets creditcard
     *
     * @return \Axerve\Client\Model\Apiv1checkcreditCardCreditcard
     */
    public function getCreditcard()
    {
        return $this->container['creditcard'];
    }

    /**
     * Sets creditcard
     *
     * @param \Axerve\Client\Model\Apiv1checkcreditCardCreditcard $creditcard creditcard
     *
     * @return $this
     */
    public function setCreditcard($creditcard)
    {
        $this->container['creditcard'] = $creditcard;

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
