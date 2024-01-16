<?php

declare(strict_types=1);

/**
 * SwarmSpecRaft.
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
 * SwarmSpecRaft Class Doc Comment.
 *
 * @category Class
 *
 * @description Raft configuration.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class SwarmSpecRaft implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SwarmSpec_Raft';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'snapshot_interval'              => 'int',
        'keep_old_snapshots'             => 'int',
        'log_entries_for_slow_followers' => 'int',
        'election_tick'                  => 'int',
        'heartbeat_tick'                 => 'int',
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
        'snapshot_interval'              => 'uint64',
        'keep_old_snapshots'             => 'uint64',
        'log_entries_for_slow_followers' => 'uint64',
        'election_tick'                  => null,
        'heartbeat_tick'                 => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'snapshot_interval'              => false,
        'keep_old_snapshots'             => false,
        'log_entries_for_slow_followers' => false,
        'election_tick'                  => false,
        'heartbeat_tick'                 => false,
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
        'snapshot_interval'              => 'SnapshotInterval',
        'keep_old_snapshots'             => 'KeepOldSnapshots',
        'log_entries_for_slow_followers' => 'LogEntriesForSlowFollowers',
        'election_tick'                  => 'ElectionTick',
        'heartbeat_tick'                 => 'HeartbeatTick',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'snapshot_interval'              => 'setSnapshotInterval',
        'keep_old_snapshots'             => 'setKeepOldSnapshots',
        'log_entries_for_slow_followers' => 'setLogEntriesForSlowFollowers',
        'election_tick'                  => 'setElectionTick',
        'heartbeat_tick'                 => 'setHeartbeatTick',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'snapshot_interval'              => 'getSnapshotInterval',
        'keep_old_snapshots'             => 'getKeepOldSnapshots',
        'log_entries_for_slow_followers' => 'getLogEntriesForSlowFollowers',
        'election_tick'                  => 'getElectionTick',
        'heartbeat_tick'                 => 'getHeartbeatTick',
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
        $this->setIfExists('snapshot_interval', $data ?? [], null);
        $this->setIfExists('keep_old_snapshots', $data ?? [], null);
        $this->setIfExists('log_entries_for_slow_followers', $data ?? [], null);
        $this->setIfExists('election_tick', $data ?? [], null);
        $this->setIfExists('heartbeat_tick', $data ?? [], null);
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
     * Gets snapshot_interval.
     *
     * @return null|int
     */
    public function getSnapshotInterval()
    {
        return $this->container['snapshot_interval'];
    }

    /**
     * Sets snapshot_interval.
     *
     * @param null|int $snapshot_interval the number of log entries between snapshots
     *
     * @return self
     */
    public function setSnapshotInterval($snapshot_interval)
    {
        if (is_null($snapshot_interval)) {
            throw new \InvalidArgumentException('non-nullable snapshot_interval cannot be null');
        }
        $this->container['snapshot_interval'] = $snapshot_interval;

        return $this;
    }

    /**
     * Gets keep_old_snapshots.
     *
     * @return null|int
     */
    public function getKeepOldSnapshots()
    {
        return $this->container['keep_old_snapshots'];
    }

    /**
     * Sets keep_old_snapshots.
     *
     * @param null|int $keep_old_snapshots the number of snapshots to keep beyond the current snapshot
     *
     * @return self
     */
    public function setKeepOldSnapshots($keep_old_snapshots)
    {
        if (is_null($keep_old_snapshots)) {
            throw new \InvalidArgumentException('non-nullable keep_old_snapshots cannot be null');
        }
        $this->container['keep_old_snapshots'] = $keep_old_snapshots;

        return $this;
    }

    /**
     * Gets log_entries_for_slow_followers.
     *
     * @return null|int
     */
    public function getLogEntriesForSlowFollowers()
    {
        return $this->container['log_entries_for_slow_followers'];
    }

    /**
     * Sets log_entries_for_slow_followers.
     *
     * @param null|int $log_entries_for_slow_followers the number of log entries to keep around to sync up slow followers after a snapshot is created
     *
     * @return self
     */
    public function setLogEntriesForSlowFollowers($log_entries_for_slow_followers)
    {
        if (is_null($log_entries_for_slow_followers)) {
            throw new \InvalidArgumentException('non-nullable log_entries_for_slow_followers cannot be null');
        }
        $this->container['log_entries_for_slow_followers'] = $log_entries_for_slow_followers;

        return $this;
    }

    /**
     * Gets election_tick.
     *
     * @return null|int
     */
    public function getElectionTick()
    {
        return $this->container['election_tick'];
    }

    /**
     * Sets election_tick.
     *
     * @param null|int $election_tick The number of ticks that a follower will wait for a message from the leader before becoming a candidate and starting an election. `ElectionTick` must be greater than `HeartbeatTick`.  A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
     *
     * @return self
     */
    public function setElectionTick($election_tick)
    {
        if (is_null($election_tick)) {
            throw new \InvalidArgumentException('non-nullable election_tick cannot be null');
        }
        $this->container['election_tick'] = $election_tick;

        return $this;
    }

    /**
     * Gets heartbeat_tick.
     *
     * @return null|int
     */
    public function getHeartbeatTick()
    {
        return $this->container['heartbeat_tick'];
    }

    /**
     * Sets heartbeat_tick.
     *
     * @param null|int $heartbeat_tick The number of ticks between heartbeats. Every HeartbeatTick ticks, the leader will send a heartbeat to the followers.  A tick currently defaults to one second, so these translate directly to seconds currently, but this is NOT guaranteed.
     *
     * @return self
     */
    public function setHeartbeatTick($heartbeat_tick)
    {
        if (is_null($heartbeat_tick)) {
            throw new \InvalidArgumentException('non-nullable heartbeat_tick cannot be null');
        }
        $this->container['heartbeat_tick'] = $heartbeat_tick;

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
