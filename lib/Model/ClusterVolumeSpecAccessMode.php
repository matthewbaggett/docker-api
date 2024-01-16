<?php

declare(strict_types=1);

/**
 * ClusterVolumeSpecAccessMode.
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
 * ClusterVolumeSpecAccessMode Class Doc Comment.
 *
 * @category Class
 *
 * @description Defines how the volume is used by tasks.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ClusterVolumeSpecAccessMode implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ClusterVolumeSpec_AccessMode';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'scope'                      => 'string',
        'sharing'                    => 'string',
        'mount_volume'               => 'object',
        'secrets'                    => '\OpenAPI\Client\Model\ClusterVolumeSpecAccessModeSecretsInner[]',
        'accessibility_requirements' => '\OpenAPI\Client\Model\ClusterVolumeSpecAccessModeAccessibilityRequirements',
        'capacity_range'             => '\OpenAPI\Client\Model\ClusterVolumeSpecAccessModeCapacityRange',
        'availability'               => 'string',
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
        'scope'                      => null,
        'sharing'                    => null,
        'mount_volume'               => null,
        'secrets'                    => null,
        'accessibility_requirements' => null,
        'capacity_range'             => null,
        'availability'               => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'scope'                      => false,
        'sharing'                    => false,
        'mount_volume'               => false,
        'secrets'                    => false,
        'accessibility_requirements' => false,
        'capacity_range'             => false,
        'availability'               => false,
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
        'scope'                      => 'Scope',
        'sharing'                    => 'Sharing',
        'mount_volume'               => 'MountVolume',
        'secrets'                    => 'Secrets',
        'accessibility_requirements' => 'AccessibilityRequirements',
        'capacity_range'             => 'CapacityRange',
        'availability'               => 'Availability',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'scope'                      => 'setScope',
        'sharing'                    => 'setSharing',
        'mount_volume'               => 'setMountVolume',
        'secrets'                    => 'setSecrets',
        'accessibility_requirements' => 'setAccessibilityRequirements',
        'capacity_range'             => 'setCapacityRange',
        'availability'               => 'setAvailability',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'scope'                      => 'getScope',
        'sharing'                    => 'getSharing',
        'mount_volume'               => 'getMountVolume',
        'secrets'                    => 'getSecrets',
        'accessibility_requirements' => 'getAccessibilityRequirements',
        'capacity_range'             => 'getCapacityRange',
        'availability'               => 'getAvailability',
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

    public const SCOPE_SINGLE        = 'single';
    public const SCOPE_MULTI         = 'multi';
    public const SHARING_NONE        = 'none';
    public const SHARING_READONLY    = 'readonly';
    public const SHARING_ONEWRITER   = 'onewriter';
    public const SHARING_ALL         = 'all';
    public const AVAILABILITY_ACTIVE = 'active';
    public const AVAILABILITY_PAUSE  = 'pause';
    public const AVAILABILITY_DRAIN  = 'drain';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_SINGLE,
            self::SCOPE_MULTI,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getSharingAllowableValues()
    {
        return [
            self::SHARING_NONE,
            self::SHARING_READONLY,
            self::SHARING_ONEWRITER,
            self::SHARING_ALL,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY_ACTIVE,
            self::AVAILABILITY_PAUSE,
            self::AVAILABILITY_DRAIN,
        ];
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
        $this->setIfExists('scope', $data ?? [], 'single');
        $this->setIfExists('sharing', $data ?? [], 'none');
        $this->setIfExists('mount_volume', $data ?? [], null);
        $this->setIfExists('secrets', $data ?? [], null);
        $this->setIfExists('accessibility_requirements', $data ?? [], null);
        $this->setIfExists('capacity_range', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], 'active');
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

        $allowedValues = $this->getScopeAllowableValues();
        if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scope', must be one of '%s'",
                $this->container['scope'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSharingAllowableValues();
        if (!is_null($this->container['sharing']) && !in_array($this->container['sharing'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sharing', must be one of '%s'",
                $this->container['sharing'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($this->container['availability']) && !in_array($this->container['availability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'availability', must be one of '%s'",
                $this->container['availability'],
                implode("', '", $allowedValues)
            );
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
     * @param null|string $scope The set of nodes this volume can be used on at one time. - `single` The volume may only be scheduled to one node at a time. - `multi` the volume may be scheduled to any supported number of nodes at a time.
     *
     * @return self
     */
    public function setScope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $allowedValues = $this->getScopeAllowableValues();
        if (!in_array($scope, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scope', must be one of '%s'",
                    $scope,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets sharing.
     *
     * @return null|string
     */
    public function getSharing()
    {
        return $this->container['sharing'];
    }

    /**
     * Sets sharing.
     *
     * @param null|string $sharing The number and way that different tasks can use this volume at one time. - `none` The volume may only be used by one task at a time. - `readonly` The volume may be used by any number of tasks, but they all must mount the volume as readonly - `onewriter` The volume may be used by any number of tasks, but only one may mount it as read/write. - `all` The volume may have any number of readers and writers.
     *
     * @return self
     */
    public function setSharing($sharing)
    {
        if (is_null($sharing)) {
            throw new \InvalidArgumentException('non-nullable sharing cannot be null');
        }
        $allowedValues = $this->getSharingAllowableValues();
        if (!in_array($sharing, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sharing', must be one of '%s'",
                    $sharing,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sharing'] = $sharing;

        return $this;
    }

    /**
     * Gets mount_volume.
     *
     * @return null|object
     */
    public function getMountVolume()
    {
        return $this->container['mount_volume'];
    }

    /**
     * Sets mount_volume.
     *
     * @param null|object $mount_volume Options for using this volume as a Mount-type volume.      Either MountVolume or BlockVolume, but not both, must be     present.   properties:     FsType:       type: \"string\"       description: |         Specifies the filesystem type for the mount volume.         Optional.     MountFlags:       type: \"array\"       description: |         Flags to pass when mounting the volume. Optional.       items:         type: \"string\" BlockVolume:   type: \"object\"   description: |     Options for using this volume as a Block-type volume.     Intentionally empty.
     *
     * @return self
     */
    public function setMountVolume($mount_volume)
    {
        if (is_null($mount_volume)) {
            throw new \InvalidArgumentException('non-nullable mount_volume cannot be null');
        }
        $this->container['mount_volume'] = $mount_volume;

        return $this;
    }

    /**
     * Gets secrets.
     *
     * @return null|\OpenAPI\Client\Model\ClusterVolumeSpecAccessModeSecretsInner[]
     */
    public function getSecrets()
    {
        return $this->container['secrets'];
    }

    /**
     * Sets secrets.
     *
     * @param null|\OpenAPI\Client\Model\ClusterVolumeSpecAccessModeSecretsInner[] $secrets swarm Secrets that are passed to the CSI storage plugin when operating on this volume
     *
     * @return self
     */
    public function setSecrets($secrets)
    {
        if (is_null($secrets)) {
            throw new \InvalidArgumentException('non-nullable secrets cannot be null');
        }
        $this->container['secrets'] = $secrets;

        return $this;
    }

    /**
     * Gets accessibility_requirements.
     *
     * @return null|ClusterVolumeSpecAccessModeAccessibilityRequirements
     */
    public function getAccessibilityRequirements()
    {
        return $this->container['accessibility_requirements'];
    }

    /**
     * Sets accessibility_requirements.
     *
     * @param null|ClusterVolumeSpecAccessModeAccessibilityRequirements $accessibility_requirements accessibility_requirements
     *
     * @return self
     */
    public function setAccessibilityRequirements($accessibility_requirements)
    {
        if (is_null($accessibility_requirements)) {
            throw new \InvalidArgumentException('non-nullable accessibility_requirements cannot be null');
        }
        $this->container['accessibility_requirements'] = $accessibility_requirements;

        return $this;
    }

    /**
     * Gets capacity_range.
     *
     * @return null|ClusterVolumeSpecAccessModeCapacityRange
     */
    public function getCapacityRange()
    {
        return $this->container['capacity_range'];
    }

    /**
     * Sets capacity_range.
     *
     * @param null|ClusterVolumeSpecAccessModeCapacityRange $capacity_range capacity_range
     *
     * @return self
     */
    public function setCapacityRange($capacity_range)
    {
        if (is_null($capacity_range)) {
            throw new \InvalidArgumentException('non-nullable capacity_range cannot be null');
        }
        $this->container['capacity_range'] = $capacity_range;

        return $this;
    }

    /**
     * Gets availability.
     *
     * @return null|string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability.
     *
     * @param null|string $availability The availability of the volume for use in tasks. - `active` The volume is fully available for scheduling on the cluster - `pause` No new workloads should use the volume, but existing workloads are not stopped. - `drain` All workloads using this volume should be stopped and rescheduled, and no new ones should be started.
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($availability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'availability', must be one of '%s'",
                    $availability,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability'] = $availability;

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