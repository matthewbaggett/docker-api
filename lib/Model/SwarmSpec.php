<?php

declare(strict_types=1);

/**
 * SwarmSpec.
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

namespace MatthewBaggett\Docker\Model;

use MatthewBaggett\Docker\ObjectSerializer;

/**
 * SwarmSpec Class Doc Comment.
 *
 * @category Class
 *
 * @description User modifiable swarm configuration.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class SwarmSpec implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SwarmSpec';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'name'              => 'string',
        'labels'            => 'array<string,string>',
        'orchestration'     => '\MatthewBaggett\Docker\Model\SwarmSpecOrchestration',
        'raft'              => '\MatthewBaggett\Docker\Model\SwarmSpecRaft',
        'dispatcher'        => '\MatthewBaggett\Docker\Model\SwarmSpecDispatcher',
        'ca_config'         => '\MatthewBaggett\Docker\Model\SwarmSpecCAConfig',
        'encryption_config' => '\MatthewBaggett\Docker\Model\SwarmSpecEncryptionConfig',
        'task_defaults'     => '\MatthewBaggett\Docker\Model\SwarmSpecTaskDefaults',
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
        'name'              => null,
        'labels'            => null,
        'orchestration'     => null,
        'raft'              => null,
        'dispatcher'        => null,
        'ca_config'         => null,
        'encryption_config' => null,
        'task_defaults'     => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'name'              => false,
        'labels'            => false,
        'orchestration'     => true,
        'raft'              => false,
        'dispatcher'        => true,
        'ca_config'         => true,
        'encryption_config' => false,
        'task_defaults'     => false,
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
        'name'              => 'Name',
        'labels'            => 'Labels',
        'orchestration'     => 'Orchestration',
        'raft'              => 'Raft',
        'dispatcher'        => 'Dispatcher',
        'ca_config'         => 'CAConfig',
        'encryption_config' => 'EncryptionConfig',
        'task_defaults'     => 'TaskDefaults',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name'              => 'setName',
        'labels'            => 'setLabels',
        'orchestration'     => 'setOrchestration',
        'raft'              => 'setRaft',
        'dispatcher'        => 'setDispatcher',
        'ca_config'         => 'setCaConfig',
        'encryption_config' => 'setEncryptionConfig',
        'task_defaults'     => 'setTaskDefaults',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name'              => 'getName',
        'labels'            => 'getLabels',
        'orchestration'     => 'getOrchestration',
        'raft'              => 'getRaft',
        'dispatcher'        => 'getDispatcher',
        'ca_config'         => 'getCaConfig',
        'encryption_config' => 'getEncryptionConfig',
        'task_defaults'     => 'getTaskDefaults',
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
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('orchestration', $data ?? [], null);
        $this->setIfExists('raft', $data ?? [], null);
        $this->setIfExists('dispatcher', $data ?? [], null);
        $this->setIfExists('ca_config', $data ?? [], null);
        $this->setIfExists('encryption_config', $data ?? [], null);
        $this->setIfExists('task_defaults', $data ?? [], null);
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
     * @param null|string $name name of the swarm
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
     * Gets orchestration.
     *
     * @return null|SwarmSpecOrchestration
     */
    public function getOrchestration()
    {
        return $this->container['orchestration'];
    }

    /**
     * Sets orchestration.
     *
     * @param null|SwarmSpecOrchestration $orchestration orchestration
     *
     * @return self
     */
    public function setOrchestration($orchestration)
    {
        if (is_null($orchestration)) {
            array_push($this->openAPINullablesSetToNull, 'orchestration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('orchestration', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['orchestration'] = $orchestration;

        return $this;
    }

    /**
     * Gets raft.
     *
     * @return null|SwarmSpecRaft
     */
    public function getRaft()
    {
        return $this->container['raft'];
    }

    /**
     * Sets raft.
     *
     * @param null|SwarmSpecRaft $raft raft
     *
     * @return self
     */
    public function setRaft($raft)
    {
        if (is_null($raft)) {
            throw new \InvalidArgumentException('non-nullable raft cannot be null');
        }
        $this->container['raft'] = $raft;

        return $this;
    }

    /**
     * Gets dispatcher.
     *
     * @return null|SwarmSpecDispatcher
     */
    public function getDispatcher()
    {
        return $this->container['dispatcher'];
    }

    /**
     * Sets dispatcher.
     *
     * @param null|SwarmSpecDispatcher $dispatcher dispatcher
     *
     * @return self
     */
    public function setDispatcher($dispatcher)
    {
        if (is_null($dispatcher)) {
            array_push($this->openAPINullablesSetToNull, 'dispatcher');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('dispatcher', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dispatcher'] = $dispatcher;

        return $this;
    }

    /**
     * Gets ca_config.
     *
     * @return null|SwarmSpecCAConfig
     */
    public function getCaConfig()
    {
        return $this->container['ca_config'];
    }

    /**
     * Sets ca_config.
     *
     * @param null|SwarmSpecCAConfig $ca_config ca_config
     *
     * @return self
     */
    public function setCaConfig($ca_config)
    {
        if (is_null($ca_config)) {
            array_push($this->openAPINullablesSetToNull, 'ca_config');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('ca_config', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ca_config'] = $ca_config;

        return $this;
    }

    /**
     * Gets encryption_config.
     *
     * @return null|SwarmSpecEncryptionConfig
     */
    public function getEncryptionConfig()
    {
        return $this->container['encryption_config'];
    }

    /**
     * Sets encryption_config.
     *
     * @param null|SwarmSpecEncryptionConfig $encryption_config encryption_config
     *
     * @return self
     */
    public function setEncryptionConfig($encryption_config)
    {
        if (is_null($encryption_config)) {
            throw new \InvalidArgumentException('non-nullable encryption_config cannot be null');
        }
        $this->container['encryption_config'] = $encryption_config;

        return $this;
    }

    /**
     * Gets task_defaults.
     *
     * @return null|SwarmSpecTaskDefaults
     */
    public function getTaskDefaults()
    {
        return $this->container['task_defaults'];
    }

    /**
     * Sets task_defaults.
     *
     * @param null|SwarmSpecTaskDefaults $task_defaults task_defaults
     *
     * @return self
     */
    public function setTaskDefaults($task_defaults)
    {
        if (is_null($task_defaults)) {
            throw new \InvalidArgumentException('non-nullable task_defaults cannot be null');
        }
        $this->container['task_defaults'] = $task_defaults;

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
