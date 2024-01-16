<?php

declare(strict_types=1);

/**
 * ContainerSummary.
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

namespace MatthewBaggett\Docker\Api\Model;

use MatthewBaggett\Docker\Api\ObjectSerializer;

/**
 * ContainerSummary Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ContainerSummary implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ContainerSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id'               => 'string',
        'names'            => 'string[]',
        'image'            => 'string',
        'image_id'         => 'string',
        'command'          => 'string',
        'created'          => 'int',
        'ports'            => '\MatthewBaggett\Docker\Api\Model\Port[]',
        'size_rw'          => 'int',
        'size_root_fs'     => 'int',
        'labels'           => 'array<string,string>',
        'state'            => 'string',
        'status'           => 'string',
        'host_config'      => '\MatthewBaggett\Docker\Api\Model\ContainerSummaryHostConfig',
        'network_settings' => '\MatthewBaggett\Docker\Api\Model\ContainerSummaryNetworkSettings',
        'mounts'           => '\MatthewBaggett\Docker\Api\Model\MountPoint[]',
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
        'id'               => null,
        'names'            => null,
        'image'            => null,
        'image_id'         => null,
        'command'          => null,
        'created'          => 'int64',
        'ports'            => null,
        'size_rw'          => 'int64',
        'size_root_fs'     => 'int64',
        'labels'           => null,
        'state'            => null,
        'status'           => null,
        'host_config'      => null,
        'network_settings' => null,
        'mounts'           => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'id'               => false,
        'names'            => false,
        'image'            => false,
        'image_id'         => false,
        'command'          => false,
        'created'          => false,
        'ports'            => false,
        'size_rw'          => false,
        'size_root_fs'     => false,
        'labels'           => false,
        'state'            => false,
        'status'           => false,
        'host_config'      => false,
        'network_settings' => false,
        'mounts'           => false,
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
        'id'               => 'Id',
        'names'            => 'Names',
        'image'            => 'Image',
        'image_id'         => 'ImageID',
        'command'          => 'Command',
        'created'          => 'Created',
        'ports'            => 'Ports',
        'size_rw'          => 'SizeRw',
        'size_root_fs'     => 'SizeRootFs',
        'labels'           => 'Labels',
        'state'            => 'State',
        'status'           => 'Status',
        'host_config'      => 'HostConfig',
        'network_settings' => 'NetworkSettings',
        'mounts'           => 'Mounts',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id'               => 'setId',
        'names'            => 'setNames',
        'image'            => 'setImage',
        'image_id'         => 'setImageId',
        'command'          => 'setCommand',
        'created'          => 'setCreated',
        'ports'            => 'setPorts',
        'size_rw'          => 'setSizeRw',
        'size_root_fs'     => 'setSizeRootFs',
        'labels'           => 'setLabels',
        'state'            => 'setState',
        'status'           => 'setStatus',
        'host_config'      => 'setHostConfig',
        'network_settings' => 'setNetworkSettings',
        'mounts'           => 'setMounts',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id'               => 'getId',
        'names'            => 'getNames',
        'image'            => 'getImage',
        'image_id'         => 'getImageId',
        'command'          => 'getCommand',
        'created'          => 'getCreated',
        'ports'            => 'getPorts',
        'size_rw'          => 'getSizeRw',
        'size_root_fs'     => 'getSizeRootFs',
        'labels'           => 'getLabels',
        'state'            => 'getState',
        'status'           => 'getStatus',
        'host_config'      => 'getHostConfig',
        'network_settings' => 'getNetworkSettings',
        'mounts'           => 'getMounts',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('names', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('image_id', $data ?? [], null);
        $this->setIfExists('command', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('ports', $data ?? [], null);
        $this->setIfExists('size_rw', $data ?? [], null);
        $this->setIfExists('size_root_fs', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('host_config', $data ?? [], null);
        $this->setIfExists('network_settings', $data ?? [], null);
        $this->setIfExists('mounts', $data ?? [], null);
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
     * @param null|string $id The ID of this container
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
     * Gets names.
     *
     * @return null|string[]
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names.
     *
     * @param null|string[] $names The names that this container has been given
     *
     * @return self
     */
    public function setNames($names)
    {
        if (is_null($names)) {
            throw new \InvalidArgumentException('non-nullable names cannot be null');
        }
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return null|string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|string $image The name of the image used when creating this container
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets image_id.
     *
     * @return null|string
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id.
     *
     * @param null|string $image_id The ID of the image that this container was created from
     *
     * @return self
     */
    public function setImageId($image_id)
    {
        if (is_null($image_id)) {
            throw new \InvalidArgumentException('non-nullable image_id cannot be null');
        }
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets command.
     *
     * @return null|string
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command.
     *
     * @param null|string $command Command to run when starting the container
     *
     * @return self
     */
    public function setCommand($command)
    {
        if (is_null($command)) {
            throw new \InvalidArgumentException('non-nullable command cannot be null');
        }
        $this->container['command'] = $command;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return null|int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created.
     *
     * @param null|int $created When the container was created
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
     * Gets ports.
     *
     * @return null|\MatthewBaggett\Docker\Api\Model\Port[]
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports.
     *
     * @param null|\MatthewBaggett\Docker\Api\Model\Port[] $ports The ports exposed by this container
     *
     * @return self
     */
    public function setPorts($ports)
    {
        if (is_null($ports)) {
            throw new \InvalidArgumentException('non-nullable ports cannot be null');
        }
        $this->container['ports'] = $ports;

        return $this;
    }

    /**
     * Gets size_rw.
     *
     * @return null|int
     */
    public function getSizeRw()
    {
        return $this->container['size_rw'];
    }

    /**
     * Sets size_rw.
     *
     * @param null|int $size_rw The size of files that have been created or changed by this container
     *
     * @return self
     */
    public function setSizeRw($size_rw)
    {
        if (is_null($size_rw)) {
            throw new \InvalidArgumentException('non-nullable size_rw cannot be null');
        }
        $this->container['size_rw'] = $size_rw;

        return $this;
    }

    /**
     * Gets size_root_fs.
     *
     * @return null|int
     */
    public function getSizeRootFs()
    {
        return $this->container['size_root_fs'];
    }

    /**
     * Sets size_root_fs.
     *
     * @param null|int $size_root_fs The total size of all the files in this container
     *
     * @return self
     */
    public function setSizeRootFs($size_root_fs)
    {
        if (is_null($size_root_fs)) {
            throw new \InvalidArgumentException('non-nullable size_root_fs cannot be null');
        }
        $this->container['size_root_fs'] = $size_root_fs;

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
     * @param null|array<string,string> $labels user-defined key/value metadata
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
     * Gets state.
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state.
     *
     * @param null|string $state The state of this container (e.g. `Exited`)
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return null|string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param null|string $status Additional human-readable status of this container (e.g. `Exit 0`)
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets host_config.
     *
     * @return null|ContainerSummaryHostConfig
     */
    public function getHostConfig()
    {
        return $this->container['host_config'];
    }

    /**
     * Sets host_config.
     *
     * @param null|ContainerSummaryHostConfig $host_config host_config
     *
     * @return self
     */
    public function setHostConfig($host_config)
    {
        if (is_null($host_config)) {
            throw new \InvalidArgumentException('non-nullable host_config cannot be null');
        }
        $this->container['host_config'] = $host_config;

        return $this;
    }

    /**
     * Gets network_settings.
     *
     * @return null|ContainerSummaryNetworkSettings
     */
    public function getNetworkSettings()
    {
        return $this->container['network_settings'];
    }

    /**
     * Sets network_settings.
     *
     * @param null|ContainerSummaryNetworkSettings $network_settings network_settings
     *
     * @return self
     */
    public function setNetworkSettings($network_settings)
    {
        if (is_null($network_settings)) {
            throw new \InvalidArgumentException('non-nullable network_settings cannot be null');
        }
        $this->container['network_settings'] = $network_settings;

        return $this;
    }

    /**
     * Gets mounts.
     *
     * @return null|\MatthewBaggett\Docker\Api\Model\MountPoint[]
     */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
     * Sets mounts.
     *
     * @param null|\MatthewBaggett\Docker\Api\Model\MountPoint[] $mounts mounts
     *
     * @return self
     */
    public function setMounts($mounts)
    {
        if (is_null($mounts)) {
            throw new \InvalidArgumentException('non-nullable mounts cannot be null');
        }
        $this->container['mounts'] = $mounts;

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
