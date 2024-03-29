<?php

declare(strict_types=1);

/**
 * ServiceSpecUpdateConfig.
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
 * ServiceSpecUpdateConfig Class Doc Comment.
 *
 * @category Class
 *
 * @description Specification for the update strategy of the service.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ServiceSpecUpdateConfig implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ServiceSpec_UpdateConfig';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'parallelism'       => 'int',
        'delay'             => 'int',
        'failure_action'    => 'string',
        'monitor'           => 'int',
        'max_failure_ratio' => 'float',
        'order'             => 'string',
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
        'parallelism'       => 'int64',
        'delay'             => 'int64',
        'failure_action'    => null,
        'monitor'           => 'int64',
        'max_failure_ratio' => null,
        'order'             => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'parallelism'       => false,
        'delay'             => false,
        'failure_action'    => false,
        'monitor'           => false,
        'max_failure_ratio' => false,
        'order'             => false,
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
        'parallelism'       => 'Parallelism',
        'delay'             => 'Delay',
        'failure_action'    => 'FailureAction',
        'monitor'           => 'Monitor',
        'max_failure_ratio' => 'MaxFailureRatio',
        'order'             => 'Order',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'parallelism'       => 'setParallelism',
        'delay'             => 'setDelay',
        'failure_action'    => 'setFailureAction',
        'monitor'           => 'setMonitor',
        'max_failure_ratio' => 'setMaxFailureRatio',
        'order'             => 'setOrder',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'parallelism'       => 'getParallelism',
        'delay'             => 'getDelay',
        'failure_action'    => 'getFailureAction',
        'monitor'           => 'getMonitor',
        'max_failure_ratio' => 'getMaxFailureRatio',
        'order'             => 'getOrder',
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

    public const FAILURE_ACTION__CONTINUE = 'continue';
    public const FAILURE_ACTION_PAUSE     = 'pause';
    public const FAILURE_ACTION_ROLLBACK  = 'rollback';
    public const ORDER_STOP_FIRST         = 'stop-first';
    public const ORDER_START_FIRST        = 'start-first';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFailureActionAllowableValues()
    {
        return [
            self::FAILURE_ACTION__CONTINUE,
            self::FAILURE_ACTION_PAUSE,
            self::FAILURE_ACTION_ROLLBACK,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_STOP_FIRST,
            self::ORDER_START_FIRST,
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
        $this->setIfExists('parallelism', $data ?? [], null);
        $this->setIfExists('delay', $data ?? [], null);
        $this->setIfExists('failure_action', $data ?? [], null);
        $this->setIfExists('monitor', $data ?? [], null);
        $this->setIfExists('max_failure_ratio', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
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

        $allowedValues = $this->getFailureActionAllowableValues();
        if (!is_null($this->container['failure_action']) && !in_array($this->container['failure_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'failure_action', must be one of '%s'",
                $this->container['failure_action'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order', must be one of '%s'",
                $this->container['order'],
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
     * Gets parallelism.
     *
     * @return null|int
     */
    public function getParallelism()
    {
        return $this->container['parallelism'];
    }

    /**
     * Sets parallelism.
     *
     * @param null|int $parallelism maximum number of tasks to be updated in one iteration (0 means unlimited parallelism)
     *
     * @return self
     */
    public function setParallelism($parallelism)
    {
        if (is_null($parallelism)) {
            throw new \InvalidArgumentException('non-nullable parallelism cannot be null');
        }
        $this->container['parallelism'] = $parallelism;

        return $this;
    }

    /**
     * Gets delay.
     *
     * @return null|int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay.
     *
     * @param null|int $delay amount of time between updates, in nanoseconds
     *
     * @return self
     */
    public function setDelay($delay)
    {
        if (is_null($delay)) {
            throw new \InvalidArgumentException('non-nullable delay cannot be null');
        }
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets failure_action.
     *
     * @return null|string
     */
    public function getFailureAction()
    {
        return $this->container['failure_action'];
    }

    /**
     * Sets failure_action.
     *
     * @param null|string $failure_action action to take if an updated task fails to run, or stops running during the update
     *
     * @return self
     */
    public function setFailureAction($failure_action)
    {
        if (is_null($failure_action)) {
            throw new \InvalidArgumentException('non-nullable failure_action cannot be null');
        }
        $allowedValues = $this->getFailureActionAllowableValues();
        if (!in_array($failure_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'failure_action', must be one of '%s'",
                    $failure_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['failure_action'] = $failure_action;

        return $this;
    }

    /**
     * Gets monitor.
     *
     * @return null|int
     */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
     * Sets monitor.
     *
     * @param null|int $monitor amount of time to monitor each updated task for failures, in nanoseconds
     *
     * @return self
     */
    public function setMonitor($monitor)
    {
        if (is_null($monitor)) {
            throw new \InvalidArgumentException('non-nullable monitor cannot be null');
        }
        $this->container['monitor'] = $monitor;

        return $this;
    }

    /**
     * Gets max_failure_ratio.
     *
     * @return null|float
     */
    public function getMaxFailureRatio()
    {
        return $this->container['max_failure_ratio'];
    }

    /**
     * Sets max_failure_ratio.
     *
     * @param null|float $max_failure_ratio the fraction of tasks that may fail during an update before the failure action is invoked, specified as a floating point number between 0 and 1
     *
     * @return self
     */
    public function setMaxFailureRatio($max_failure_ratio)
    {
        if (is_null($max_failure_ratio)) {
            throw new \InvalidArgumentException('non-nullable max_failure_ratio cannot be null');
        }
        $this->container['max_failure_ratio'] = $max_failure_ratio;

        return $this;
    }

    /**
     * Gets order.
     *
     * @return null|string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order.
     *
     * @param null|string $order The order of operations when rolling out an updated task. Either the old task is shut down before the new task is started, or the new task is started before the old task is shut down.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order', must be one of '%s'",
                    $order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

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
