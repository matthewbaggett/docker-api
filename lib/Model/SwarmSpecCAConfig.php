<?php

declare(strict_types=1);

/**
 * SwarmSpecCAConfig.
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
 * SwarmSpecCAConfig Class Doc Comment.
 *
 * @category Class
 *
 * @description CA configuration.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class SwarmSpecCAConfig implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SwarmSpec_CAConfig';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'node_cert_expiry' => 'int',
        'external_cas'     => '\MatthewBaggett\Docker\Api\Model\SwarmSpecCAConfigExternalCAsInner[]',
        'signing_ca_cert'  => 'string',
        'signing_ca_key'   => 'string',
        'force_rotate'     => 'int',
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
        'node_cert_expiry' => 'int64',
        'external_cas'     => null,
        'signing_ca_cert'  => null,
        'signing_ca_key'   => null,
        'force_rotate'     => 'uint64',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'node_cert_expiry' => false,
        'external_cas'     => false,
        'signing_ca_cert'  => false,
        'signing_ca_key'   => false,
        'force_rotate'     => false,
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
        'node_cert_expiry' => 'NodeCertExpiry',
        'external_cas'     => 'ExternalCAs',
        'signing_ca_cert'  => 'SigningCACert',
        'signing_ca_key'   => 'SigningCAKey',
        'force_rotate'     => 'ForceRotate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'node_cert_expiry' => 'setNodeCertExpiry',
        'external_cas'     => 'setExternalCas',
        'signing_ca_cert'  => 'setSigningCaCert',
        'signing_ca_key'   => 'setSigningCaKey',
        'force_rotate'     => 'setForceRotate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'node_cert_expiry' => 'getNodeCertExpiry',
        'external_cas'     => 'getExternalCas',
        'signing_ca_cert'  => 'getSigningCaCert',
        'signing_ca_key'   => 'getSigningCaKey',
        'force_rotate'     => 'getForceRotate',
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
        $this->setIfExists('node_cert_expiry', $data ?? [], null);
        $this->setIfExists('external_cas', $data ?? [], null);
        $this->setIfExists('signing_ca_cert', $data ?? [], null);
        $this->setIfExists('signing_ca_key', $data ?? [], null);
        $this->setIfExists('force_rotate', $data ?? [], null);
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
     * Gets node_cert_expiry.
     *
     * @return null|int
     */
    public function getNodeCertExpiry()
    {
        return $this->container['node_cert_expiry'];
    }

    /**
     * Sets node_cert_expiry.
     *
     * @param null|int $node_cert_expiry the duration node certificates are issued for
     *
     * @return self
     */
    public function setNodeCertExpiry($node_cert_expiry)
    {
        if (is_null($node_cert_expiry)) {
            throw new \InvalidArgumentException('non-nullable node_cert_expiry cannot be null');
        }
        $this->container['node_cert_expiry'] = $node_cert_expiry;

        return $this;
    }

    /**
     * Gets external_cas.
     *
     * @return null|\MatthewBaggett\Docker\Api\Model\SwarmSpecCAConfigExternalCAsInner[]
     */
    public function getExternalCas()
    {
        return $this->container['external_cas'];
    }

    /**
     * Sets external_cas.
     *
     * @param null|\MatthewBaggett\Docker\Api\Model\SwarmSpecCAConfigExternalCAsInner[] $external_cas configuration for forwarding signing requests to an external certificate authority
     *
     * @return self
     */
    public function setExternalCas($external_cas)
    {
        if (is_null($external_cas)) {
            throw new \InvalidArgumentException('non-nullable external_cas cannot be null');
        }
        $this->container['external_cas'] = $external_cas;

        return $this;
    }

    /**
     * Gets signing_ca_cert.
     *
     * @return null|string
     */
    public function getSigningCaCert()
    {
        return $this->container['signing_ca_cert'];
    }

    /**
     * Sets signing_ca_cert.
     *
     * @param null|string $signing_ca_cert the desired signing CA certificate for all swarm node TLS leaf certificates, in PEM format
     *
     * @return self
     */
    public function setSigningCaCert($signing_ca_cert)
    {
        if (is_null($signing_ca_cert)) {
            throw new \InvalidArgumentException('non-nullable signing_ca_cert cannot be null');
        }
        $this->container['signing_ca_cert'] = $signing_ca_cert;

        return $this;
    }

    /**
     * Gets signing_ca_key.
     *
     * @return null|string
     */
    public function getSigningCaKey()
    {
        return $this->container['signing_ca_key'];
    }

    /**
     * Sets signing_ca_key.
     *
     * @param null|string $signing_ca_key the desired signing CA key for all swarm node TLS leaf certificates, in PEM format
     *
     * @return self
     */
    public function setSigningCaKey($signing_ca_key)
    {
        if (is_null($signing_ca_key)) {
            throw new \InvalidArgumentException('non-nullable signing_ca_key cannot be null');
        }
        $this->container['signing_ca_key'] = $signing_ca_key;

        return $this;
    }

    /**
     * Gets force_rotate.
     *
     * @return null|int
     */
    public function getForceRotate()
    {
        return $this->container['force_rotate'];
    }

    /**
     * Sets force_rotate.
     *
     * @param null|int $force_rotate An integer whose purpose is to force swarm to generate a new signing CA certificate and key, if none have been specified in `SigningCACert` and `SigningCAKey`
     *
     * @return self
     */
    public function setForceRotate($force_rotate)
    {
        if (is_null($force_rotate)) {
            throw new \InvalidArgumentException('non-nullable force_rotate cannot be null');
        }
        $this->container['force_rotate'] = $force_rotate;

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
