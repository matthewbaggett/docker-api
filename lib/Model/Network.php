<?php

declare(strict_types=1);

/**
 * Network.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Docker Engine API.
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.43) is used. For example, calling `/info` is the same as calling `/v1.43/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * The version of the OpenAPI document: 1.43
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use OpenAPI\Client\ObjectSerializer;

/**
 * Network Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class Network implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Network';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name'        => 'string',
        'id'          => 'string',
        'created'     => 'string',
        'scope'       => 'string',
        'driver'      => 'string',
        'enable_ipv6' => 'bool',
        'ipam'        => '\OpenAPI\Client\Model\IPAM',
        'internal'    => 'bool',
        'attachable'  => 'bool',
        'ingress'     => 'bool',
        'containers'  => 'array<string,\OpenAPI\Client\Model\NetworkContainer>',
        'options'     => 'array<string,string>',
        'labels'      => 'array<string,string>',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'name'        => null,
        'id'          => null,
        'created'     => 'dateTime',
        'scope'       => null,
        'driver'      => null,
        'enable_ipv6' => null,
        'ipam'        => null,
        'internal'    => null,
        'attachable'  => null,
        'ingress'     => null,
        'containers'  => null,
        'options'     => null,
        'labels'      => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'name'        => false,
        'id'          => false,
        'created'     => false,
        'scope'       => false,
        'driver'      => false,
        'enable_ipv6' => false,
        'ipam'        => false,
        'internal'    => false,
        'attachable'  => false,
        'ingress'     => false,
        'containers'  => false,
        'options'     => false,
        'labels'      => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name'        => 'Name',
        'id'          => 'Id',
        'created'     => 'Created',
        'scope'       => 'Scope',
        'driver'      => 'Driver',
        'enable_ipv6' => 'EnableIPv6',
        'ipam'        => 'IPAM',
        'internal'    => 'Internal',
        'attachable'  => 'Attachable',
        'ingress'     => 'Ingress',
        'containers'  => 'Containers',
        'options'     => 'Options',
        'labels'      => 'Labels',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name'        => 'setName',
        'id'          => 'setId',
        'created'     => 'setCreated',
        'scope'       => 'setScope',
        'driver'      => 'setDriver',
        'enable_ipv6' => 'setEnableIpv6',
        'ipam'        => 'setIpam',
        'internal'    => 'setInternal',
        'attachable'  => 'setAttachable',
        'ingress'     => 'setIngress',
        'containers'  => 'setContainers',
        'options'     => 'setOptions',
        'labels'      => 'setLabels',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name'        => 'getName',
        'id'          => 'getId',
        'created'     => 'getCreated',
        'scope'       => 'getScope',
        'driver'      => 'getDriver',
        'enable_ipv6' => 'getEnableIpv6',
        'ipam'        => 'getIpam',
        'internal'    => 'getInternal',
        'attachable'  => 'getAttachable',
        'ingress'     => 'getIngress',
        'containers'  => 'getContainers',
        'options'     => 'getOptions',
        'labels'      => 'getLabels',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('driver', $data ?? [], null);
        $this->setIfExists('enable_ipv6', $data ?? [], null);
        $this->setIfExists('ipam', $data ?? [], null);
        $this->setIfExists('internal', $data ?? [], null);
        $this->setIfExists('attachable', $data ?? [], null);
        $this->setIfExists('ingress', $data ?? [], null);
        $this->setIfExists('containers', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
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
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param null|string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param null|string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return null|string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created.
     *
     * @param null|string $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets scope.
     *
     * @return null|string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope.
     *
     * @param null|string $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets driver.
     *
     * @return null|string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver.
     *
     * @param null|string $driver driver
     *
     * @return self
     */
    public function setDriver($driver)
    {
        if (is_null($driver)) {
            throw new \InvalidArgumentException('non-nullable driver cannot be null');
        }
        $this->container['driver'] = $driver;

        return $this;
    }

    /**
     * Gets enable_ipv6.
     *
     * @return null|bool
     */
    public function getEnableIpv6()
    {
        return $this->container['enable_ipv6'];
    }

    /**
     * Sets enable_ipv6.
     *
     * @param null|bool $enable_ipv6 enable_ipv6
     *
     * @return self
     */
    public function setEnableIpv6($enable_ipv6)
    {
        if (is_null($enable_ipv6)) {
            throw new \InvalidArgumentException('non-nullable enable_ipv6 cannot be null');
        }
        $this->container['enable_ipv6'] = $enable_ipv6;

        return $this;
    }

    /**
     * Gets ipam.
     *
     * @return null|IPAM
     */
    public function getIpam()
    {
        return $this->container['ipam'];
    }

    /**
     * Sets ipam.
     *
     * @param null|IPAM $ipam ipam
     *
     * @return self
     */
    public function setIpam($ipam)
    {
        if (is_null($ipam)) {
            throw new \InvalidArgumentException('non-nullable ipam cannot be null');
        }
        $this->container['ipam'] = $ipam;

        return $this;
    }

    /**
     * Gets internal.
     *
     * @return null|bool
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal.
     *
     * @param null|bool $internal internal
     *
     * @return self
     */
    public function setInternal($internal)
    {
        if (is_null($internal)) {
            throw new \InvalidArgumentException('non-nullable internal cannot be null');
        }
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets attachable.
     *
     * @return null|bool
     */
    public function getAttachable()
    {
        return $this->container['attachable'];
    }

    /**
     * Sets attachable.
     *
     * @param null|bool $attachable attachable
     *
     * @return self
     */
    public function setAttachable($attachable)
    {
        if (is_null($attachable)) {
            throw new \InvalidArgumentException('non-nullable attachable cannot be null');
        }
        $this->container['attachable'] = $attachable;

        return $this;
    }

    /**
     * Gets ingress.
     *
     * @return null|bool
     */
    public function getIngress()
    {
        return $this->container['ingress'];
    }

    /**
     * Sets ingress.
     *
     * @param null|bool $ingress ingress
     *
     * @return self
     */
    public function setIngress($ingress)
    {
        if (is_null($ingress)) {
            throw new \InvalidArgumentException('non-nullable ingress cannot be null');
        }
        $this->container['ingress'] = $ingress;

        return $this;
    }

    /**
     * Gets containers.
     *
     * @return null|array<string,\OpenAPI\Client\Model\NetworkContainer>
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers.
     *
     * @param null|array<string,\OpenAPI\Client\Model\NetworkContainer> $containers containers
     *
     * @return self
     */
    public function setContainers($containers)
    {
        if (is_null($containers)) {
            throw new \InvalidArgumentException('non-nullable containers cannot be null');
        }
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets options.
     *
     * @return null|array<string,string>
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options.
     *
     * @param null|array<string,string> $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets labels.
     *
     * @return null|array<string,string>
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels.
     *
     * @param null|array<string,string> $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        if (is_null($labels)) {
            throw new \InvalidArgumentException('non-nullable labels cannot be null');
        }
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
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
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
