<?php
/**
 * FeedStatusResponseResult
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Lamoda\CrptNcApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Национальный каталог
 *
 * API
 *
 * The version of the OpenAPI document: 3.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Lamoda\CrptNcApiClient\Model;

use \ArrayAccess;
use \Lamoda\CrptNcApiClient\ObjectSerializer;

/**
 * FeedStatusResponseResult Class Doc Comment
 *
 * @category Class
 * @package  Lamoda\CrptNcApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedStatusResponseResult implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedStatusResponse_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feedId' => 'int',
        'statusId' => 'int',
        'status' => 'string',
        'receivedAt' => 'string',
        'statusUpdatedAt' => 'string',
        'result' => 'object',
        'item' => '\Lamoda\CrptNcApiClient\Model\FeedStatusResponseResultItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'feedId' => null,
        'statusId' => null,
        'status' => null,
        'receivedAt' => null,
        'statusUpdatedAt' => null,
        'result' => null,
        'item' => null
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
        'feedId' => 'feed_id',
        'statusId' => 'status_id',
        'status' => 'status',
        'receivedAt' => 'received_at',
        'statusUpdatedAt' => 'status_updated_at',
        'result' => 'result',
        'item' => 'item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feedId' => 'setFeedId',
        'statusId' => 'setStatusId',
        'status' => 'setStatus',
        'receivedAt' => 'setReceivedAt',
        'statusUpdatedAt' => 'setStatusUpdatedAt',
        'result' => 'setResult',
        'item' => 'setItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feedId' => 'getFeedId',
        'statusId' => 'getStatusId',
        'status' => 'getStatus',
        'receivedAt' => 'getReceivedAt',
        'statusUpdatedAt' => 'getStatusUpdatedAt',
        'result' => 'getResult',
        'item' => 'getItem'
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

    const STATUS_ID_0 = 0;
    const STATUS_ID_1 = 1;
    const STATUS_ID_2 = 2;
    const STATUS_ID_3 = 3;
    const STATUS_REJECTED = 'Rejected';
    const STATUS_RECEIVED = 'Received';
    const STATUS_MODERATED = 'Moderated';
    const STATUS_SIGNED = 'Signed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusIdAllowableValues()
    {
        return [
            self::STATUS_ID_0,
            self::STATUS_ID_1,
            self::STATUS_ID_2,
            self::STATUS_ID_3,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REJECTED,
            self::STATUS_RECEIVED,
            self::STATUS_MODERATED,
            self::STATUS_SIGNED,
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
        $this->container['feedId'] = $data['feedId'] ?? null;
        $this->container['statusId'] = $data['statusId'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['receivedAt'] = $data['receivedAt'] ?? null;
        $this->container['statusUpdatedAt'] = $data['statusUpdatedAt'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusIdAllowableValues();
        if (!is_null($this->container['statusId']) && !in_array($this->container['statusId'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'statusId', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets feedId
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feedId'];
    }

    /**
     * Sets feedId
     *
     * @param int|null $feedId идентификатор фида
     *
     * @return self
     */
    public function setFeedId($feedId)
    {
        $this->container['feedId'] = $feedId;

        return $this;
    }

    /**
     * Gets statusId
     *
     * @return int|null
     */
    public function getStatusId()
    {
        return $this->container['statusId'];
    }

    /**
     * Sets statusId
     *
     * @param int|null $statusId идентификатор статуса фида, возможные варианты 0 — запрос не принят 1 — запрос получен, данные на модерации 2 — товары прошли модерацию 3 — одобренные модератором товары подписаны
     *
     * @return self
     */
    public function setStatusId($statusId)
    {
        $allowedValues = $this->getStatusIdAllowableValues();
        if (!is_null($statusId) && !in_array($statusId, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statusId', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statusId'] = $statusId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status статус фида, возможные варианты Rejected — запрос не принят Received — запрос получен, данные на модерации Moderated — товары прошли модерацию Signed — одобренные модератором товары подписаны
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets receivedAt
     *
     * @return string|null
     */
    public function getReceivedAt()
    {
        return $this->container['receivedAt'];
    }

    /**
     * Sets receivedAt
     *
     * @param string|null $receivedAt время создания фида
     *
     * @return self
     */
    public function setReceivedAt($receivedAt)
    {
        $this->container['receivedAt'] = $receivedAt;

        return $this;
    }

    /**
     * Gets statusUpdatedAt
     *
     * @return string|null
     */
    public function getStatusUpdatedAt()
    {
        return $this->container['statusUpdatedAt'];
    }

    /**
     * Sets statusUpdatedAt
     *
     * @param string|null $statusUpdatedAt время перехода фида в текущий статус
     *
     * @return self
     */
    public function setStatusUpdatedAt($statusUpdatedAt)
    {
        $this->container['statusUpdatedAt'] = $statusUpdatedAt;

        return $this;
    }

    /**
     * Gets result
     *
     * @return object|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param object|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \Lamoda\CrptNcApiClient\Model\FeedStatusResponseResultItem[]|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Lamoda\CrptNcApiClient\Model\FeedStatusResponseResultItem[]|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


