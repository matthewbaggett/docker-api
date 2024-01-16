<?php

declare(strict_types=1);

/**
 * TaskSpec.
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
 * TaskSpec Class Doc Comment.
 *
 * @category Class
 *
 * @description User modifiable task configuration.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class TaskSpec implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TaskSpec';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'plugin_spec'             => '\MatthewBaggett\Docker\Api\Model\TaskSpecPluginSpec',
        'container_spec'          => '\MatthewBaggett\Docker\Api\Model\TaskSpecContainerSpec',
        'network_attachment_spec' => '\MatthewBaggett\Docker\Api\Model\TaskSpecNetworkAttachmentSpec',
        'resources'               => '\MatthewBaggett\Docker\Api\Model\TaskSpecResources',
        'restart_policy'          => '\MatthewBaggett\Docker\Api\Model\TaskSpecRestartPolicy',
        'placement'               => '\MatthewBaggett\Docker\Api\Model\TaskSpecPlacement',
        'force_update'            => 'int',
        'runtime'                 => 'string',
        'networks'                => '\MatthewBaggett\Docker\Api\Model\NetworkAttachmentConfig[]',
        'log_driver'              => '\MatthewBaggett\Docker\Api\Model\TaskSpecLogDriver',
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
        'plugin_spec'             => null,
        'container_spec'          => null,
        'network_attachment_spec' => null,
        'resources'               => null,
        'restart_policy'          => null,
        'placement'               => null,
        'force_update'            => null,
        'runtime'                 => null,
        'networks'                => null,
        'log_driver'              => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'plugin_spec'             => false,
        'container_spec'          => false,
        'network_attachment_spec' => false,
        'resources'               => false,
        'restart_policy'          => false,
        'placement'               => false,
        'force_update'            => false,
        'runtime'                 => false,
        'networks'                => false,
        'log_driver'              => false,
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
        'plugin_spec'             => 'PluginSpec',
        'container_spec'          => 'ContainerSpec',
        'network_attachment_spec' => 'NetworkAttachmentSpec',
        'resources'               => 'Resources',
        'restart_policy'          => 'RestartPolicy',
        'placement'               => 'Placement',
        'force_update'            => 'ForceUpdate',
        'runtime'                 => 'Runtime',
        'networks'                => 'Networks',
        'log_driver'              => 'LogDriver',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'plugin_spec'             => 'setPluginSpec',
        'container_spec'          => 'setContainerSpec',
        'network_attachment_spec' => 'setNetworkAttachmentSpec',
        'resources'               => 'setResources',
        'restart_policy'          => 'setRestartPolicy',
        'placement'               => 'setPlacement',
        'force_update'            => 'setForceUpdate',
        'runtime'                 => 'setRuntime',
        'networks'                => 'setNetworks',
        'log_driver'              => 'setLogDriver',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'plugin_spec'             => 'getPluginSpec',
        'container_spec'          => 'getContainerSpec',
        'network_attachment_spec' => 'getNetworkAttachmentSpec',
        'resources'               => 'getResources',
        'restart_policy'          => 'getRestartPolicy',
        'placement'               => 'getPlacement',
        'force_update'            => 'getForceUpdate',
        'runtime'                 => 'getRuntime',
        'networks'                => 'getNetworks',
        'log_driver'              => 'getLogDriver',
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
        $this->setIfExists('plugin_spec', $data ?? [], null);
        $this->setIfExists('container_spec', $data ?? [], null);
        $this->setIfExists('network_attachment_spec', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('restart_policy', $data ?? [], null);
        $this->setIfExists('placement', $data ?? [], null);
        $this->setIfExists('force_update', $data ?? [], null);
        $this->setIfExists('runtime', $data ?? [], null);
        $this->setIfExists('networks', $data ?? [], null);
        $this->setIfExists('log_driver', $data ?? [], null);
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
     * Gets plugin_spec.
     *
     * @return null|TaskSpecPluginSpec
     */
    public function getPluginSpec()
    {
        return $this->container['plugin_spec'];
    }

    /**
     * Sets plugin_spec.
     *
     * @param null|TaskSpecPluginSpec $plugin_spec plugin_spec
     *
     * @return self
     */
    public function setPluginSpec($plugin_spec)
    {
        if (is_null($plugin_spec)) {
            throw new \InvalidArgumentException('non-nullable plugin_spec cannot be null');
        }
        $this->container['plugin_spec'] = $plugin_spec;

        return $this;
    }

    /**
     * Gets container_spec.
     *
     * @return null|TaskSpecContainerSpec
     */
    public function getContainerSpec()
    {
        return $this->container['container_spec'];
    }

    /**
     * Sets container_spec.
     *
     * @param null|TaskSpecContainerSpec $container_spec container_spec
     *
     * @return self
     */
    public function setContainerSpec($container_spec)
    {
        if (is_null($container_spec)) {
            throw new \InvalidArgumentException('non-nullable container_spec cannot be null');
        }
        $this->container['container_spec'] = $container_spec;

        return $this;
    }

    /**
     * Gets network_attachment_spec.
     *
     * @return null|TaskSpecNetworkAttachmentSpec
     */
    public function getNetworkAttachmentSpec()
    {
        return $this->container['network_attachment_spec'];
    }

    /**
     * Sets network_attachment_spec.
     *
     * @param null|TaskSpecNetworkAttachmentSpec $network_attachment_spec network_attachment_spec
     *
     * @return self
     */
    public function setNetworkAttachmentSpec($network_attachment_spec)
    {
        if (is_null($network_attachment_spec)) {
            throw new \InvalidArgumentException('non-nullable network_attachment_spec cannot be null');
        }
        $this->container['network_attachment_spec'] = $network_attachment_spec;

        return $this;
    }

    /**
     * Gets resources.
     *
     * @return null|TaskSpecResources
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources.
     *
     * @param null|TaskSpecResources $resources resources
     *
     * @return self
     */
    public function setResources($resources)
    {
        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets restart_policy.
     *
     * @return null|TaskSpecRestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->container['restart_policy'];
    }

    /**
     * Sets restart_policy.
     *
     * @param null|TaskSpecRestartPolicy $restart_policy restart_policy
     *
     * @return self
     */
    public function setRestartPolicy($restart_policy)
    {
        if (is_null($restart_policy)) {
            throw new \InvalidArgumentException('non-nullable restart_policy cannot be null');
        }
        $this->container['restart_policy'] = $restart_policy;

        return $this;
    }

    /**
     * Gets placement.
     *
     * @return null|TaskSpecPlacement
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement.
     *
     * @param null|TaskSpecPlacement $placement placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        if (is_null($placement)) {
            throw new \InvalidArgumentException('non-nullable placement cannot be null');
        }
        $this->container['placement'] = $placement;

        return $this;
    }

    /**
     * Gets force_update.
     *
     * @return null|int
     */
    public function getForceUpdate()
    {
        return $this->container['force_update'];
    }

    /**
     * Sets force_update.
     *
     * @param null|int $force_update a counter that triggers an update even if no relevant parameters have been changed
     *
     * @return self
     */
    public function setForceUpdate($force_update)
    {
        if (is_null($force_update)) {
            throw new \InvalidArgumentException('non-nullable force_update cannot be null');
        }
        $this->container['force_update'] = $force_update;

        return $this;
    }

    /**
     * Gets runtime.
     *
     * @return null|string
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime.
     *
     * @param null|string $runtime runtime is the type of runtime specified for the task executor
     *
     * @return self
     */
    public function setRuntime($runtime)
    {
        if (is_null($runtime)) {
            throw new \InvalidArgumentException('non-nullable runtime cannot be null');
        }
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets networks.
     *
     * @return null|\MatthewBaggett\Docker\Api\Model\NetworkAttachmentConfig[]
     */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
     * Sets networks.
     *
     * @param null|\MatthewBaggett\Docker\Api\Model\NetworkAttachmentConfig[] $networks specifies which networks the service should attach to
     *
     * @return self
     */
    public function setNetworks($networks)
    {
        if (is_null($networks)) {
            throw new \InvalidArgumentException('non-nullable networks cannot be null');
        }
        $this->container['networks'] = $networks;

        return $this;
    }

    /**
     * Gets log_driver.
     *
     * @return null|TaskSpecLogDriver
     */
    public function getLogDriver()
    {
        return $this->container['log_driver'];
    }

    /**
     * Sets log_driver.
     *
     * @param null|TaskSpecLogDriver $log_driver log_driver
     *
     * @return self
     */
    public function setLogDriver($log_driver)
    {
        if (is_null($log_driver)) {
            throw new \InvalidArgumentException('non-nullable log_driver cannot be null');
        }
        $this->container['log_driver'] = $log_driver;

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
