<?php

declare(strict_types=1);

/**
 * ExecInspectResponse.
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
 * ExecInspectResponse Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ExecInspectResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ExecInspectResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'can_remove'     => 'bool',
        'detach_keys'    => 'string',
        'id'             => 'string',
        'running'        => 'bool',
        'exit_code'      => 'int',
        'process_config' => '\MatthewBaggett\Docker\Model\ProcessConfig',
        'open_stdin'     => 'bool',
        'open_stderr'    => 'bool',
        'open_stdout'    => 'bool',
        'container_id'   => 'string',
        'pid'            => 'int',
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
        'can_remove'     => null,
        'detach_keys'    => null,
        'id'             => null,
        'running'        => null,
        'exit_code'      => null,
        'process_config' => null,
        'open_stdin'     => null,
        'open_stderr'    => null,
        'open_stdout'    => null,
        'container_id'   => null,
        'pid'            => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'can_remove'     => false,
        'detach_keys'    => false,
        'id'             => false,
        'running'        => false,
        'exit_code'      => false,
        'process_config' => false,
        'open_stdin'     => false,
        'open_stderr'    => false,
        'open_stdout'    => false,
        'container_id'   => false,
        'pid'            => false,
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
        'can_remove'     => 'CanRemove',
        'detach_keys'    => 'DetachKeys',
        'id'             => 'ID',
        'running'        => 'Running',
        'exit_code'      => 'ExitCode',
        'process_config' => 'ProcessConfig',
        'open_stdin'     => 'OpenStdin',
        'open_stderr'    => 'OpenStderr',
        'open_stdout'    => 'OpenStdout',
        'container_id'   => 'ContainerID',
        'pid'            => 'Pid',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'can_remove'     => 'setCanRemove',
        'detach_keys'    => 'setDetachKeys',
        'id'             => 'setId',
        'running'        => 'setRunning',
        'exit_code'      => 'setExitCode',
        'process_config' => 'setProcessConfig',
        'open_stdin'     => 'setOpenStdin',
        'open_stderr'    => 'setOpenStderr',
        'open_stdout'    => 'setOpenStdout',
        'container_id'   => 'setContainerId',
        'pid'            => 'setPid',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'can_remove'     => 'getCanRemove',
        'detach_keys'    => 'getDetachKeys',
        'id'             => 'getId',
        'running'        => 'getRunning',
        'exit_code'      => 'getExitCode',
        'process_config' => 'getProcessConfig',
        'open_stdin'     => 'getOpenStdin',
        'open_stderr'    => 'getOpenStderr',
        'open_stdout'    => 'getOpenStdout',
        'container_id'   => 'getContainerId',
        'pid'            => 'getPid',
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
        $this->setIfExists('can_remove', $data ?? [], null);
        $this->setIfExists('detach_keys', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('running', $data ?? [], null);
        $this->setIfExists('exit_code', $data ?? [], null);
        $this->setIfExists('process_config', $data ?? [], null);
        $this->setIfExists('open_stdin', $data ?? [], null);
        $this->setIfExists('open_stderr', $data ?? [], null);
        $this->setIfExists('open_stdout', $data ?? [], null);
        $this->setIfExists('container_id', $data ?? [], null);
        $this->setIfExists('pid', $data ?? [], null);
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
     * Gets can_remove.
     *
     * @return null|bool
     */
    public function getCanRemove()
    {
        return $this->container['can_remove'];
    }

    /**
     * Sets can_remove.
     *
     * @param null|bool $can_remove can_remove
     *
     * @return self
     */
    public function setCanRemove($can_remove)
    {
        if (is_null($can_remove)) {
            throw new \InvalidArgumentException('non-nullable can_remove cannot be null');
        }
        $this->container['can_remove'] = $can_remove;

        return $this;
    }

    /**
     * Gets detach_keys.
     *
     * @return null|string
     */
    public function getDetachKeys()
    {
        return $this->container['detach_keys'];
    }

    /**
     * Sets detach_keys.
     *
     * @param null|string $detach_keys detach_keys
     *
     * @return self
     */
    public function setDetachKeys($detach_keys)
    {
        if (is_null($detach_keys)) {
            throw new \InvalidArgumentException('non-nullable detach_keys cannot be null');
        }
        $this->container['detach_keys'] = $detach_keys;

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
     * Gets running.
     *
     * @return null|bool
     */
    public function getRunning()
    {
        return $this->container['running'];
    }

    /**
     * Sets running.
     *
     * @param null|bool $running running
     *
     * @return self
     */
    public function setRunning($running)
    {
        if (is_null($running)) {
            throw new \InvalidArgumentException('non-nullable running cannot be null');
        }
        $this->container['running'] = $running;

        return $this;
    }

    /**
     * Gets exit_code.
     *
     * @return null|int
     */
    public function getExitCode()
    {
        return $this->container['exit_code'];
    }

    /**
     * Sets exit_code.
     *
     * @param null|int $exit_code exit_code
     *
     * @return self
     */
    public function setExitCode($exit_code)
    {
        if (is_null($exit_code)) {
            throw new \InvalidArgumentException('non-nullable exit_code cannot be null');
        }
        $this->container['exit_code'] = $exit_code;

        return $this;
    }

    /**
     * Gets process_config.
     *
     * @return null|ProcessConfig
     */
    public function getProcessConfig()
    {
        return $this->container['process_config'];
    }

    /**
     * Sets process_config.
     *
     * @param null|ProcessConfig $process_config process_config
     *
     * @return self
     */
    public function setProcessConfig($process_config)
    {
        if (is_null($process_config)) {
            throw new \InvalidArgumentException('non-nullable process_config cannot be null');
        }
        $this->container['process_config'] = $process_config;

        return $this;
    }

    /**
     * Gets open_stdin.
     *
     * @return null|bool
     */
    public function getOpenStdin()
    {
        return $this->container['open_stdin'];
    }

    /**
     * Sets open_stdin.
     *
     * @param null|bool $open_stdin open_stdin
     *
     * @return self
     */
    public function setOpenStdin($open_stdin)
    {
        if (is_null($open_stdin)) {
            throw new \InvalidArgumentException('non-nullable open_stdin cannot be null');
        }
        $this->container['open_stdin'] = $open_stdin;

        return $this;
    }

    /**
     * Gets open_stderr.
     *
     * @return null|bool
     */
    public function getOpenStderr()
    {
        return $this->container['open_stderr'];
    }

    /**
     * Sets open_stderr.
     *
     * @param null|bool $open_stderr open_stderr
     *
     * @return self
     */
    public function setOpenStderr($open_stderr)
    {
        if (is_null($open_stderr)) {
            throw new \InvalidArgumentException('non-nullable open_stderr cannot be null');
        }
        $this->container['open_stderr'] = $open_stderr;

        return $this;
    }

    /**
     * Gets open_stdout.
     *
     * @return null|bool
     */
    public function getOpenStdout()
    {
        return $this->container['open_stdout'];
    }

    /**
     * Sets open_stdout.
     *
     * @param null|bool $open_stdout open_stdout
     *
     * @return self
     */
    public function setOpenStdout($open_stdout)
    {
        if (is_null($open_stdout)) {
            throw new \InvalidArgumentException('non-nullable open_stdout cannot be null');
        }
        $this->container['open_stdout'] = $open_stdout;

        return $this;
    }

    /**
     * Gets container_id.
     *
     * @return null|string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id.
     *
     * @param null|string $container_id container_id
     *
     * @return self
     */
    public function setContainerId($container_id)
    {
        if (is_null($container_id)) {
            throw new \InvalidArgumentException('non-nullable container_id cannot be null');
        }
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets pid.
     *
     * @return null|int
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid.
     *
     * @param null|int $pid the system process ID for the exec process
     *
     * @return self
     */
    public function setPid($pid)
    {
        if (is_null($pid)) {
            throw new \InvalidArgumentException('non-nullable pid cannot be null');
        }
        $this->container['pid'] = $pid;

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
