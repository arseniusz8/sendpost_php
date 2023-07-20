<?php
/**
 * Os
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  sendpost
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SendPost API
 *
 * Email API and SMTP relay to not just send and measure email sending, but also alert and optimise. We provide you with tools, expertise and support needed to reliably deliver emails to your customers inboxes on time, every time.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: hello@sendpost.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace sendpost\model;

use \ArrayAccess;
use \sendpost\ObjectSerializer;

/**
 * Os Class Doc Comment
 *
 * @category Class
 * @package  sendpost
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Os implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Os';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'family' => 'string',
        'major' => 'string',
        'minor' => 'string',
        'patch' => 'string',
        'patch_minor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'family' => null,
        'major' => null,
        'minor' => null,
        'patch' => null,
        'patch_minor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'family' => false,
		'major' => false,
		'minor' => false,
		'patch' => false,
		'patch_minor' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'family' => 'Family',
        'major' => 'Major',
        'minor' => 'Minor',
        'patch' => 'Patch',
        'patch_minor' => 'PatchMinor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'family' => 'setFamily',
        'major' => 'setMajor',
        'minor' => 'setMinor',
        'patch' => 'setPatch',
        'patch_minor' => 'setPatchMinor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'family' => 'getFamily',
        'major' => 'getMajor',
        'minor' => 'getMinor',
        'patch' => 'getPatch',
        'patch_minor' => 'getPatchMinor'
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
        $this->setIfExists('family', $data ?? [], null);
        $this->setIfExists('major', $data ?? [], null);
        $this->setIfExists('minor', $data ?? [], null);
        $this->setIfExists('patch', $data ?? [], null);
        $this->setIfExists('patch_minor', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets family
     *
     * @return string|null
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     *
     * @param string|null $family family
     *
     * @return self
     */
    public function setFamily($family)
    {
        if (is_null($family)) {
            throw new \InvalidArgumentException('non-nullable family cannot be null');
        }
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets major
     *
     * @return string|null
     */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
     * Sets major
     *
     * @param string|null $major major
     *
     * @return self
     */
    public function setMajor($major)
    {
        if (is_null($major)) {
            throw new \InvalidArgumentException('non-nullable major cannot be null');
        }
        $this->container['major'] = $major;

        return $this;
    }

    /**
     * Gets minor
     *
     * @return string|null
     */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
     * Sets minor
     *
     * @param string|null $minor minor
     *
     * @return self
     */
    public function setMinor($minor)
    {
        if (is_null($minor)) {
            throw new \InvalidArgumentException('non-nullable minor cannot be null');
        }
        $this->container['minor'] = $minor;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return string|null
     */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param string|null $patch patch
     *
     * @return self
     */
    public function setPatch($patch)
    {
        if (is_null($patch)) {
            throw new \InvalidArgumentException('non-nullable patch cannot be null');
        }
        $this->container['patch'] = $patch;

        return $this;
    }

    /**
     * Gets patch_minor
     *
     * @return string|null
     */
    public function getPatchMinor()
    {
        return $this->container['patch_minor'];
    }

    /**
     * Sets patch_minor
     *
     * @param string|null $patch_minor patch_minor
     *
     * @return self
     */
    public function setPatchMinor($patch_minor)
    {
        if (is_null($patch_minor)) {
            throw new \InvalidArgumentException('non-nullable patch_minor cannot be null');
        }
        $this->container['patch_minor'] = $patch_minor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


