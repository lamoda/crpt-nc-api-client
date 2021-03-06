<?php
/**
 * FeedRequest
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
 * FeedRequest Class Doc Comment
 *
 * @category Class
 * @description Для изменения существующего товара должно быть передано значение его идентификатора good_id. Если параметра good_id нет, товар определяется как новый Для нового товара обязательным является параметр good_name и gtin
 * @package  Lamoda\CrptNcApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeedRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'goodId' => 'string',
        'gtin' => 'string',
        'isTechGtin' => 'string',
        'isKit' => 'string',
        'goodName' => 'string',
        'tnved' => 'string',
        'brand' => 'string',
        'moderation' => 'string',
        'identifiedBy' => '\Lamoda\CrptNcApiClient\Model\FeedRequestIdentifiedBy[]',
        'categories' => 'int[]',
        'goodAttrs' => '\Lamoda\CrptNcApiClient\Model\FeedRequestGoodAttrs',
        'goodImages' => '\Lamoda\CrptNcApiClient\Model\FeedRequestGoodImages[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'goodId' => null,
        'gtin' => null,
        'isTechGtin' => null,
        'isKit' => null,
        'goodName' => null,
        'tnved' => null,
        'brand' => null,
        'moderation' => null,
        'identifiedBy' => null,
        'categories' => null,
        'goodAttrs' => null,
        'goodImages' => null
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
        'id' => '@id',
        'goodId' => 'good_id',
        'gtin' => 'gtin',
        'isTechGtin' => 'is_tech_gtin',
        'isKit' => 'is_kit',
        'goodName' => 'good_name',
        'tnved' => 'tnved',
        'brand' => 'brand',
        'moderation' => 'moderation',
        'identifiedBy' => 'identified_by',
        'categories' => 'categories',
        'goodAttrs' => 'good_attrs',
        'goodImages' => 'good_images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'goodId' => 'setGoodId',
        'gtin' => 'setGtin',
        'isTechGtin' => 'setIsTechGtin',
        'isKit' => 'setIsKit',
        'goodName' => 'setGoodName',
        'tnved' => 'setTnved',
        'brand' => 'setBrand',
        'moderation' => 'setModeration',
        'identifiedBy' => 'setIdentifiedBy',
        'categories' => 'setCategories',
        'goodAttrs' => 'setGoodAttrs',
        'goodImages' => 'setGoodImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'goodId' => 'getGoodId',
        'gtin' => 'getGtin',
        'isTechGtin' => 'getIsTechGtin',
        'isKit' => 'getIsKit',
        'goodName' => 'getGoodName',
        'tnved' => 'getTnved',
        'brand' => 'getBrand',
        'moderation' => 'getModeration',
        'identifiedBy' => 'getIdentifiedBy',
        'categories' => 'getCategories',
        'goodAttrs' => 'getGoodAttrs',
        'goodImages' => 'getGoodImages'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['goodId'] = $data['goodId'] ?? null;
        $this->container['gtin'] = $data['gtin'] ?? null;
        $this->container['isTechGtin'] = $data['isTechGtin'] ?? null;
        $this->container['isKit'] = $data['isKit'] ?? null;
        $this->container['goodName'] = $data['goodName'] ?? null;
        $this->container['tnved'] = $data['tnved'] ?? null;
        $this->container['brand'] = $data['brand'] ?? null;
        $this->container['moderation'] = $data['moderation'] ?? null;
        $this->container['identifiedBy'] = $data['identifiedBy'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['goodAttrs'] = $data['goodAttrs'] ?? null;
        $this->container['goodImages'] = $data['goodImages'] ?? null;
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
     * @param string|null $id идентификатор энтри, который лаборатория может задать для более конкретной идентификации ответа (необязательный)
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets goodId
     *
     * @return string|null
     */
    public function getGoodId()
    {
        return $this->container['goodId'];
    }

    /**
     * Sets goodId
     *
     * @param string|null $goodId идентификатор товара (обязательный для обновляемых товаров)
     *
     * @return self
     */
    public function setGoodId($goodId)
    {
        $this->container['goodId'] = $goodId;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin идентификатор в Национальном каталоге товаров GTIN (обязательный для нового товара)
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets isTechGtin
     *
     * @return string|null
     */
    public function getIsTechGtin()
    {
        return $this->container['isTechGtin'];
    }

    /**
     * Sets isTechGtin
     *
     * @param string|null $isTechGtin признак создания карточки товара с техническим gtin; принимает значения 1/0 (true/false) (обязателен при создании карточки товара с техническим GTIN, в этом случае GTIN в энтри не указывается)
     *
     * @return self
     */
    public function setIsTechGtin($isTechGtin)
    {
        $this->container['isTechGtin'] = $isTechGtin;

        return $this;
    }

    /**
     * Gets isKit
     *
     * @return string|null
     */
    public function getIsKit()
    {
        return $this->container['isKit'];
    }

    /**
     * Sets isKit
     *
     * @param string|null $isKit признак создания комплекта; принимает значения 1/0 (true/false) (обязателен при создании карточки товара, являющегося комплектом)
     *
     * @return self
     */
    public function setIsKit($isKit)
    {
        $this->container['isKit'] = $isKit;

        return $this;
    }

    /**
     * Gets goodName
     *
     * @return string|null
     */
    public function getGoodName()
    {
        return $this->container['goodName'];
    }

    /**
     * Sets goodName
     *
     * @param string|null $goodName наименование товара (обязательный для нового товара)
     *
     * @return self
     */
    public function setGoodName($goodName)
    {
        $this->container['goodName'] = $goodName;

        return $this;
    }

    /**
     * Gets tnved
     *
     * @return string|null
     */
    public function getTnved()
    {
        return $this->container['tnved'];
    }

    /**
     * Sets tnved
     *
     * @param string|null $tnved ТН ВЭД (обязательный для нового товара)
     *
     * @return self
     */
    public function setTnved($tnved)
    {
        $this->container['tnved'] = $tnved;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand товарный знак (обязательный для нового товара)
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets moderation
     *
     * @return string|null
     */
    public function getModeration()
    {
        return $this->container['moderation'];
    }

    /**
     * Sets moderation
     *
     * @param string|null $moderation признак отправки товара на модерацию (не обязательный) 1 — товар отправляется на модерацию, карточка создается в статусе «На модерации» 0 или не указан — товар на модерацию не отправляется, карточка создается в статусе «Черновик»
     *
     * @return self
     */
    public function setModeration($moderation)
    {
        $this->container['moderation'] = $moderation;

        return $this;
    }

    /**
     * Gets identifiedBy
     *
     * @return \Lamoda\CrptNcApiClient\Model\FeedRequestIdentifiedBy[]|null
     */
    public function getIdentifiedBy()
    {
        return $this->container['identifiedBy'];
    }

    /**
     * Sets identifiedBy
     *
     * @param \Lamoda\CrptNcApiClient\Model\FeedRequestIdentifiedBy[]|null $identifiedBy массив идентификаторов (если создается карточка товара с GTIN, относящимся к упаковке типа trade-unit, то массив идентификаторов обязательно должен включать как минимум идентифкатор данного вида упаковки)
     *
     * @return self
     */
    public function setIdentifiedBy($identifiedBy)
    {
        $this->container['identifiedBy'] = $identifiedBy;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return int[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param int[]|null $categories массив идентификаторов категорий
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets goodAttrs
     *
     * @return \Lamoda\CrptNcApiClient\Model\FeedRequestGoodAttrs|null
     */
    public function getGoodAttrs()
    {
        return $this->container['goodAttrs'];
    }

    /**
     * Sets goodAttrs
     *
     * @param \Lamoda\CrptNcApiClient\Model\FeedRequestGoodAttrs|null $goodAttrs goodAttrs
     *
     * @return self
     */
    public function setGoodAttrs($goodAttrs)
    {
        $this->container['goodAttrs'] = $goodAttrs;

        return $this;
    }

    /**
     * Gets goodImages
     *
     * @return \Lamoda\CrptNcApiClient\Model\FeedRequestGoodImages[]|null
     */
    public function getGoodImages()
    {
        return $this->container['goodImages'];
    }

    /**
     * Sets goodImages
     *
     * @param \Lamoda\CrptNcApiClient\Model\FeedRequestGoodImages[]|null $goodImages массив изображений (необязательный)
     *
     * @return self
     */
    public function setGoodImages($goodImages)
    {
        $this->container['goodImages'] = $goodImages;

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


