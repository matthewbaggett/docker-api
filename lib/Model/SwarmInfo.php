<?php

declare(strict_types=1);

/**
 * SwarmInfo.
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
 * SwarmInfo Class Doc Comment.
 *
 * @category Class
 *
 * @description Represents generic information about swarm.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class SwarmInfo implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SwarmInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'node_id'           => 'string',
        'node_addr'         => 'string',
        'local_node_state'  => '\MatthewBaggett\Docker\Api\Model\LocalNodeState',
        'control_available' => 'bool',
        'error'             => 'string',
        'remote_managers'   => '\MatthewBaggett\Docker\Api\Model\PeerNode[]',
        'nodes'             => 'int',
        'managers'          => 'int',
        'cluster'           => '\MatthewBaggett\Docker\Api\Model\ClusterInfo',
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
        'node_id'           => null,
        'node_addr'         => null,
        'local_node_state'  => null,
        'control_available' => null,
        'error'             => null,
        'remote_managers'   => null,
        'nodes'             => null,
        'managers'          => null,
        'cluster'           => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'node_id'           => false,
        'node_addr'         => false,
        'local_node_state'  => false,
        'control_available' => false,
        'error'             => false,
        'remote_managers'   => true,
        'nodes'             => true,
        'managers'          => true,
        'cluster'           => true,
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
        'node_id'           => 'NodeID',
        'node_addr'         => 'NodeAddr',
        'local_node_state'  => 'LocalNodeState',
        'control_available' => 'ControlAvailable',
        'error'             => 'Error',
        'remote_managers'   => 'RemoteManagers',
        'nodes'             => 'Nodes',
        'managers'          => 'Managers',
        'cluster'           => 'Cluster',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'node_id'           => 'setNodeId',
        'node_addr'         => 'setNodeAddr',
        'local_node_state'  => 'setLocalNodeState',
        'control_available' => 'setControlAvailable',
        'error'             => 'setError',
        'remote_managers'   => 'setRemoteManagers',
        'nodes'             => 'setNodes',
        'managers'          => 'setManagers',
        'cluster'           => 'setCluster',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'node_id'           => 'getNodeId',
        'node_addr'         => 'getNodeAddr',
        'local_node_state'  => 'getLocalNodeState',
        'control_available' => 'getControlAvailable',
        'error'             => 'getError',
        'remote_managers'   => 'getRemoteManagers',
        'nodes'             => 'getNodes',
        'managers'          => 'getManagers',
        'cluster'           => 'getCluster',
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
        $this->setIfExists('node_id', $data ?? [], '');
        $this->setIfExists('node_addr', $data ?? [], '');
        $this->setIfExists('local_node_state', $data ?? [], null);
        $this->setIfExists('control_available', $data ?? [], false);
        $this->setIfExists('error', $data ?? [], '');
        $this->setIfExists('remote_managers', $data ?? [], null);
        $this->setIfExists('nodes', $data ?? [], null);
        $this->setIfExists('managers', $data ?? [], null);
        $this->setIfExists('cluster', $data ?? [], null);
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
     * Gets node_id.
     *
     * @return null|string
     */
    public function getNodeId()
    {
        return $this->container['node_id'];
    }

    /**
     * Sets node_id.
     *
     * @param null|string $node_id unique identifier of for this node in the swarm
     *
     * @return self
     */
    public function setNodeId($node_id)
    {
        if (is_null($node_id)) {
            throw new \InvalidArgumentException('non-nullable node_id cannot be null');
        }
        $this->container['node_id'] = $node_id;

        return $this;
    }

    /**
     * Gets node_addr.
     *
     * @return null|string
     */
    public function getNodeAddr()
    {
        return $this->container['node_addr'];
    }

    /**
     * Sets node_addr.
     *
     * @param null|string $node_addr IP address at which this node can be reached by other nodes in the swarm
     *
     * @return self
     */
    public function setNodeAddr($node_addr)
    {
        if (is_null($node_addr)) {
            throw new \InvalidArgumentException('non-nullable node_addr cannot be null');
        }
        $this->container['node_addr'] = $node_addr;

        return $this;
    }

    /**
     * Gets local_node_state.
     *
     * @return null|LocalNodeState
     */
    public function getLocalNodeState()
    {
        return $this->container['local_node_state'];
    }

    /**
     * Sets local_node_state.
     *
     * @param null|LocalNodeState $local_node_state local_node_state
     *
     * @return self
     */
    public function setLocalNodeState($local_node_state)
    {
        if (is_null($local_node_state)) {
            throw new \InvalidArgumentException('non-nullable local_node_state cannot be null');
        }
        $this->container['local_node_state'] = $local_node_state;

        return $this;
    }

    /**
     * Gets control_available.
     *
     * @return null|bool
     */
    public function getControlAvailable()
    {
        return $this->container['control_available'];
    }

    /**
     * Sets control_available.
     *
     * @param null|bool $control_available control_available
     *
     * @return self
     */
    public function setControlAvailable($control_available)
    {
        if (is_null($control_available)) {
            throw new \InvalidArgumentException('non-nullable control_available cannot be null');
        }
        $this->container['control_available'] = $control_available;

        return $this;
    }

    /**
     * Gets error.
     *
     * @return null|string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error.
     *
     * @param null|string $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets remote_managers.
     *
     * @return null|\MatthewBaggett\Docker\Api\Model\PeerNode[]
     */
    public function getRemoteManagers()
    {
        return $this->container['remote_managers'];
    }

    /**
     * Sets remote_managers.
     *
     * @param null|\MatthewBaggett\Docker\Api\Model\PeerNode[] $remote_managers list of ID's and addresses of other managers in the swarm
     *
     * @return self
     */
    public function setRemoteManagers($remote_managers)
    {
        if (is_null($remote_managers)) {
            array_push($this->openAPINullablesSetToNull, 'remote_managers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('remote_managers', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remote_managers'] = $remote_managers;

        return $this;
    }

    /**
     * Gets nodes.
     *
     * @return null|int
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes.
     *
     * @param null|int $nodes total number of nodes in the swarm
     *
     * @return self
     */
    public function setNodes($nodes)
    {
        if (is_null($nodes)) {
            array_push($this->openAPINullablesSetToNull, 'nodes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('nodes', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets managers.
     *
     * @return null|int
     */
    public function getManagers()
    {
        return $this->container['managers'];
    }

    /**
     * Sets managers.
     *
     * @param null|int $managers total number of managers in the swarm
     *
     * @return self
     */
    public function setManagers($managers)
    {
        if (is_null($managers)) {
            array_push($this->openAPINullablesSetToNull, 'managers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('managers', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['managers'] = $managers;

        return $this;
    }

    /**
     * Gets cluster.
     *
     * @return null|ClusterInfo
     */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
     * Sets cluster.
     *
     * @param null|ClusterInfo $cluster cluster
     *
     * @return self
     */
    public function setCluster($cluster)
    {
        if (is_null($cluster)) {
            array_push($this->openAPINullablesSetToNull, 'cluster');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('cluster', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cluster'] = $cluster;

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
