<?php
/**
 * InlineResponse2003PayloadEvents
 *
 * PHP version 5
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */

/**
 * Axerve-php
 *
 * Axerve API client made for PHP
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/axerve-api/axerve-codegen.git
 * Axerve Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the axerve code generator program.
 * https://github.com/axerve-api/axerve-codegen
 * Do not edit the class manually.
 */

namespace Axerve\Client\Model;

use \ArrayAccess;
use \Axerve\Client\ObjectSerializer;

/**
 * InlineResponse2003PayloadEvents Class Doc Comment
 *
 * @category Class
 * @package  Axerve\Client
 * @author   Axerve Codegen team
 * @link     https://github.com/axerve-api/axerve-codegen
 */
class InlineResponse2003PayloadEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $axerveModelName = 'inline_response_200_3_payload_events';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveTypes = [
        'eventtype' => 'string',
'eventamount' => 'string',
'eventdate' => 'string',
'event_arn' => 'string',
'event_id' => 'string',
        'event' => InlineResponse2003PayloadEvents::class];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $axerveFormats = [
        'eventtype' => null,
'eventamount' => null,
'eventdate' => null,
'event_arn' => null,
'event_id' => null,
    'event' => null];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function axerveTypes()
    {
        return self::$axerveTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function axerveFormats()
    {
        return self::$axerveFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'eventtype' => 'eventtype',
'eventamount' => 'eventamount',
'eventdate' => 'eventdate',
'event_arn' => 'eventARN',
'event_id' => 'eventID',
        'event' => 'event'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eventtype' => 'setEventtype',
'eventamount' => 'setEventamount',
'eventdate' => 'setEventdate',
'event_arn' => 'setEventArn',
'event_id' => 'setEventId',
        'event' => 'setEvent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eventtype' => 'getEventtype',
'eventamount' => 'getEventamount',
'eventdate' => 'getEventdate',
'event_arn' => 'getEventArn',
'event_id' => 'getEventId',
        'event' => 'getEvent'    ];

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
        return self::$axerveModelName;
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
        $this->container['eventtype'] = isset($data['eventtype']) ? $data['eventtype'] : null;
        $this->container['eventamount'] = isset($data['eventamount']) ? $data['eventamount'] : null;
        $this->container['eventdate'] = isset($data['eventdate']) ? $data['eventdate'] : null;
        $this->container['event_arn'] = isset($data['event_arn']) ? $data['event_arn'] : null;
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
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
     * Gets eventtype
     *
     * @return string
     */
    public function getEventtype()
    {
        return $this->container['eventtype'] ?? $this->getEvent()->getEventtype();
    }

    /**
     * Sets eventtype
     *
     * @param string $eventtype eventtype
     *
     * @return $this
     */
    public function setEventtype($eventtype)
    {
        $this->container['eventtype'] = $eventtype;

        return $this;
    }

    /**
     * Gets eventamount
     *
     * @return string
     */
    public function getEventamount()
    {
        return $this->container['eventamount'] ?? $this->getEvent()->getEventamount();
    }

    /**
     * Sets eventamount
     *
     * @param string $eventamount eventamount
     *
     * @return $this
     */
    public function setEventamount($eventamount)
    {
        $this->container['eventamount'] = $eventamount;

        return $this;
    }

    /**
     * Gets eventdate
     *
     * @return string
     */
    public function getEventdate()
    {
        return $this->container['eventdate'] ?? $this->getEvent()->getEventdate();
    }

    /**
     * Sets eventdate
     *
     * @param string $eventdate eventdate
     *
     * @return $this
     */
    public function setEventdate($eventdate)
    {
        $this->container['eventdate'] = $eventdate;

        return $this;
    }

    /**
     * Gets event_arn
     *
     * @return string
     */
    public function getEventArn()
    {
        return $this->container['event_arn'] ?? $this->getEvent()->getEventArn();
    }
    
    /**
     * Gets eventamount
     *
     * @return InlineResponse2003PayloadEvents
     */
    public function getEvent()
    {
        return $this->container['event'];
    }
    
    /**
     * Sets event
     *
     * @param array $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;
    
        return $this;
    }

    /**
     * Sets event_arn
     *
     * @param string $event_arn event_arn
     *
     * @return $this
     */
    public function setEventArn($event_arn)
    {
        $this->container['event_arn'] = $event_arn;

        return $this;
    }

    /**
     * Gets event_id
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string $event_id event_id
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

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
