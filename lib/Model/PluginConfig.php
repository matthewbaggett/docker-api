<?php

declare(strict_types=1);

/**
 * PluginConfig.
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
 * PluginConfig Class Doc Comment.
 *
 * @category Class
 *
 * @description The config of a plugin.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class PluginConfig implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Plugin_Config';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'docker_version'   => 'string',
        'description'      => 'string',
        'documentation'    => 'string',
        'interface'        => '\OpenAPI\Client\Model\PluginConfigInterface',
        'entrypoint'       => 'string[]',
        'work_dir'         => 'string',
        'user'             => '\OpenAPI\Client\Model\PluginConfigUser',
        'network'          => '\OpenAPI\Client\Model\PluginConfigNetwork',
        'linux'            => '\OpenAPI\Client\Model\PluginConfigLinux',
        'propagated_mount' => 'string',
        'ipc_host'         => 'bool',
        'pid_host'         => 'bool',
        'mounts'           => '\OpenAPI\Client\Model\PluginMount[]',
        'env'              => '\OpenAPI\Client\Model\PluginEnv[]',
        'args'             => '\OpenAPI\Client\Model\PluginConfigArgs',
        'rootfs'           => '\OpenAPI\Client\Model\PluginConfigRootfs',
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
        'docker_version'   => null,
        'description'      => null,
        'documentation'    => null,
        'interface'        => null,
        'entrypoint'       => null,
        'work_dir'         => null,
        'user'             => null,
        'network'          => null,
        'linux'            => null,
        'propagated_mount' => null,
        'ipc_host'         => null,
        'pid_host'         => null,
        'mounts'           => null,
        'env'              => null,
        'args'             => null,
        'rootfs'           => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'docker_version'   => false,
        'description'      => false,
        'documentation'    => false,
        'interface'        => false,
        'entrypoint'       => false,
        'work_dir'         => false,
        'user'             => false,
        'network'          => false,
        'linux'            => false,
        'propagated_mount' => false,
        'ipc_host'         => false,
        'pid_host'         => false,
        'mounts'           => false,
        'env'              => false,
        'args'             => false,
        'rootfs'           => false,
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
        'docker_version'   => 'DockerVersion',
        'description'      => 'Description',
        'documentation'    => 'Documentation',
        'interface'        => 'Interface',
        'entrypoint'       => 'Entrypoint',
        'work_dir'         => 'WorkDir',
        'user'             => 'User',
        'network'          => 'Network',
        'linux'            => 'Linux',
        'propagated_mount' => 'PropagatedMount',
        'ipc_host'         => 'IpcHost',
        'pid_host'         => 'PidHost',
        'mounts'           => 'Mounts',
        'env'              => 'Env',
        'args'             => 'Args',
        'rootfs'           => 'rootfs',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'docker_version'   => 'setDockerVersion',
        'description'      => 'setDescription',
        'documentation'    => 'setDocumentation',
        'interface'        => 'setInterface',
        'entrypoint'       => 'setEntrypoint',
        'work_dir'         => 'setWorkDir',
        'user'             => 'setUser',
        'network'          => 'setNetwork',
        'linux'            => 'setLinux',
        'propagated_mount' => 'setPropagatedMount',
        'ipc_host'         => 'setIpcHost',
        'pid_host'         => 'setPidHost',
        'mounts'           => 'setMounts',
        'env'              => 'setEnv',
        'args'             => 'setArgs',
        'rootfs'           => 'setRootfs',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'docker_version'   => 'getDockerVersion',
        'description'      => 'getDescription',
        'documentation'    => 'getDocumentation',
        'interface'        => 'getInterface',
        'entrypoint'       => 'getEntrypoint',
        'work_dir'         => 'getWorkDir',
        'user'             => 'getUser',
        'network'          => 'getNetwork',
        'linux'            => 'getLinux',
        'propagated_mount' => 'getPropagatedMount',
        'ipc_host'         => 'getIpcHost',
        'pid_host'         => 'getPidHost',
        'mounts'           => 'getMounts',
        'env'              => 'getEnv',
        'args'             => 'getArgs',
        'rootfs'           => 'getRootfs',
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
        $this->setIfExists('docker_version', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('documentation', $data ?? [], null);
        $this->setIfExists('interface', $data ?? [], null);
        $this->setIfExists('entrypoint', $data ?? [], null);
        $this->setIfExists('work_dir', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('linux', $data ?? [], null);
        $this->setIfExists('propagated_mount', $data ?? [], null);
        $this->setIfExists('ipc_host', $data ?? [], null);
        $this->setIfExists('pid_host', $data ?? [], null);
        $this->setIfExists('mounts', $data ?? [], null);
        $this->setIfExists('env', $data ?? [], null);
        $this->setIfExists('args', $data ?? [], null);
        $this->setIfExists('rootfs', $data ?? [], null);
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
        $invalidProperties = [];

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['documentation'] === null) {
            $invalidProperties[] = "'documentation' can't be null";
        }
        if ($this->container['interface'] === null) {
            $invalidProperties[] = "'interface' can't be null";
        }
        if ($this->container['entrypoint'] === null) {
            $invalidProperties[] = "'entrypoint' can't be null";
        }
        if ($this->container['work_dir'] === null) {
            $invalidProperties[] = "'work_dir' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['linux'] === null) {
            $invalidProperties[] = "'linux' can't be null";
        }
        if ($this->container['propagated_mount'] === null) {
            $invalidProperties[] = "'propagated_mount' can't be null";
        }
        if ($this->container['ipc_host'] === null) {
            $invalidProperties[] = "'ipc_host' can't be null";
        }
        if ($this->container['pid_host'] === null) {
            $invalidProperties[] = "'pid_host' can't be null";
        }
        if ($this->container['mounts'] === null) {
            $invalidProperties[] = "'mounts' can't be null";
        }
        if ($this->container['env'] === null) {
            $invalidProperties[] = "'env' can't be null";
        }
        if ($this->container['args'] === null) {
            $invalidProperties[] = "'args' can't be null";
        }

        return $invalidProperties;
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
     * Gets docker_version.
     *
     * @return null|string
     */
    public function getDockerVersion()
    {
        return $this->container['docker_version'];
    }

    /**
     * Sets docker_version.
     *
     * @param null|string $docker_version Docker Version used to create the plugin
     *
     * @return self
     */
    public function setDockerVersion($docker_version)
    {
        if (is_null($docker_version)) {
            throw new \InvalidArgumentException('non-nullable docker_version cannot be null');
        }
        $this->container['docker_version'] = $docker_version;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets documentation.
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->container['documentation'];
    }

    /**
     * Sets documentation.
     *
     * @param string $documentation documentation
     *
     * @return self
     */
    public function setDocumentation($documentation)
    {
        if (is_null($documentation)) {
            throw new \InvalidArgumentException('non-nullable documentation cannot be null');
        }
        $this->container['documentation'] = $documentation;

        return $this;
    }

    /**
     * Gets interface.
     *
     * @return PluginConfigInterface
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface.
     *
     * @param PluginConfigInterface $interface interface
     *
     * @return self
     */
    public function setInterface($interface)
    {
        if (is_null($interface)) {
            throw new \InvalidArgumentException('non-nullable interface cannot be null');
        }
        $this->container['interface'] = $interface;

        return $this;
    }

    /**
     * Gets entrypoint.
     *
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint.
     *
     * @param string[] $entrypoint entrypoint
     *
     * @return self
     */
    public function setEntrypoint($entrypoint)
    {
        if (is_null($entrypoint)) {
            throw new \InvalidArgumentException('non-nullable entrypoint cannot be null');
        }
        $this->container['entrypoint'] = $entrypoint;

        return $this;
    }

    /**
     * Gets work_dir.
     *
     * @return string
     */
    public function getWorkDir()
    {
        return $this->container['work_dir'];
    }

    /**
     * Sets work_dir.
     *
     * @param string $work_dir work_dir
     *
     * @return self
     */
    public function setWorkDir($work_dir)
    {
        if (is_null($work_dir)) {
            throw new \InvalidArgumentException('non-nullable work_dir cannot be null');
        }
        $this->container['work_dir'] = $work_dir;

        return $this;
    }

    /**
     * Gets user.
     *
     * @return null|PluginConfigUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user.
     *
     * @param null|PluginConfigUser $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets network.
     *
     * @return PluginConfigNetwork
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network.
     *
     * @param PluginConfigNetwork $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets linux.
     *
     * @return PluginConfigLinux
     */
    public function getLinux()
    {
        return $this->container['linux'];
    }

    /**
     * Sets linux.
     *
     * @param PluginConfigLinux $linux linux
     *
     * @return self
     */
    public function setLinux($linux)
    {
        if (is_null($linux)) {
            throw new \InvalidArgumentException('non-nullable linux cannot be null');
        }
        $this->container['linux'] = $linux;

        return $this;
    }

    /**
     * Gets propagated_mount.
     *
     * @return string
     */
    public function getPropagatedMount()
    {
        return $this->container['propagated_mount'];
    }

    /**
     * Sets propagated_mount.
     *
     * @param string $propagated_mount propagated_mount
     *
     * @return self
     */
    public function setPropagatedMount($propagated_mount)
    {
        if (is_null($propagated_mount)) {
            throw new \InvalidArgumentException('non-nullable propagated_mount cannot be null');
        }
        $this->container['propagated_mount'] = $propagated_mount;

        return $this;
    }

    /**
     * Gets ipc_host.
     *
     * @return bool
     */
    public function getIpcHost()
    {
        return $this->container['ipc_host'];
    }

    /**
     * Sets ipc_host.
     *
     * @param bool $ipc_host ipc_host
     *
     * @return self
     */
    public function setIpcHost($ipc_host)
    {
        if (is_null($ipc_host)) {
            throw new \InvalidArgumentException('non-nullable ipc_host cannot be null');
        }
        $this->container['ipc_host'] = $ipc_host;

        return $this;
    }

    /**
     * Gets pid_host.
     *
     * @return bool
     */
    public function getPidHost()
    {
        return $this->container['pid_host'];
    }

    /**
     * Sets pid_host.
     *
     * @param bool $pid_host pid_host
     *
     * @return self
     */
    public function setPidHost($pid_host)
    {
        if (is_null($pid_host)) {
            throw new \InvalidArgumentException('non-nullable pid_host cannot be null');
        }
        $this->container['pid_host'] = $pid_host;

        return $this;
    }

    /**
     * Gets mounts.
     *
     * @return \OpenAPI\Client\Model\PluginMount[]
     */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
     * Sets mounts.
     *
     * @param \OpenAPI\Client\Model\PluginMount[] $mounts mounts
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
     * Gets env.
     *
     * @return \OpenAPI\Client\Model\PluginEnv[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env.
     *
     * @param \OpenAPI\Client\Model\PluginEnv[] $env env
     *
     * @return self
     */
    public function setEnv($env)
    {
        if (is_null($env)) {
            throw new \InvalidArgumentException('non-nullable env cannot be null');
        }
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets args.
     *
     * @return PluginConfigArgs
     */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
     * Sets args.
     *
     * @param PluginConfigArgs $args args
     *
     * @return self
     */
    public function setArgs($args)
    {
        if (is_null($args)) {
            throw new \InvalidArgumentException('non-nullable args cannot be null');
        }
        $this->container['args'] = $args;

        return $this;
    }

    /**
     * Gets rootfs.
     *
     * @return null|PluginConfigRootfs
     */
    public function getRootfs()
    {
        return $this->container['rootfs'];
    }

    /**
     * Sets rootfs.
     *
     * @param null|PluginConfigRootfs $rootfs rootfs
     *
     * @return self
     */
    public function setRootfs($rootfs)
    {
        if (is_null($rootfs)) {
            throw new \InvalidArgumentException('non-nullable rootfs cannot be null');
        }
        $this->container['rootfs'] = $rootfs;

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
