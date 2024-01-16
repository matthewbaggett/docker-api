<?php

declare(strict_types=1);

/**
 * ImageSummary.
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
 * ImageSummary Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ImageSummary implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ImageSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'id'           => 'string',
        'parent_id'    => 'string',
        'repo_tags'    => 'string[]',
        'repo_digests' => 'string[]',
        'created'      => 'int',
        'size'         => 'int',
        'shared_size'  => 'int',
        'virtual_size' => 'int',
        'labels'       => 'array<string,string>',
        'containers'   => 'int',
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
        'id'           => null,
        'parent_id'    => null,
        'repo_tags'    => null,
        'repo_digests' => null,
        'created'      => null,
        'size'         => 'int64',
        'shared_size'  => 'int64',
        'virtual_size' => 'int64',
        'labels'       => null,
        'containers'   => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'id'           => false,
        'parent_id'    => false,
        'repo_tags'    => false,
        'repo_digests' => false,
        'created'      => false,
        'size'         => false,
        'shared_size'  => false,
        'virtual_size' => false,
        'labels'       => false,
        'containers'   => false,
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
        'id'           => 'Id',
        'parent_id'    => 'ParentId',
        'repo_tags'    => 'RepoTags',
        'repo_digests' => 'RepoDigests',
        'created'      => 'Created',
        'size'         => 'Size',
        'shared_size'  => 'SharedSize',
        'virtual_size' => 'VirtualSize',
        'labels'       => 'Labels',
        'containers'   => 'Containers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'id'           => 'setId',
        'parent_id'    => 'setParentId',
        'repo_tags'    => 'setRepoTags',
        'repo_digests' => 'setRepoDigests',
        'created'      => 'setCreated',
        'size'         => 'setSize',
        'shared_size'  => 'setSharedSize',
        'virtual_size' => 'setVirtualSize',
        'labels'       => 'setLabels',
        'containers'   => 'setContainers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'id'           => 'getId',
        'parent_id'    => 'getParentId',
        'repo_tags'    => 'getRepoTags',
        'repo_digests' => 'getRepoDigests',
        'created'      => 'getCreated',
        'size'         => 'getSize',
        'shared_size'  => 'getSharedSize',
        'virtual_size' => 'getVirtualSize',
        'labels'       => 'getLabels',
        'containers'   => 'getContainers',
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
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('repo_tags', $data ?? [], null);
        $this->setIfExists('repo_digests', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('shared_size', $data ?? [], null);
        $this->setIfExists('virtual_size', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('containers', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ($this->container['repo_tags'] === null) {
            $invalidProperties[] = "'repo_tags' can't be null";
        }
        if ($this->container['repo_digests'] === null) {
            $invalidProperties[] = "'repo_digests' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['shared_size'] === null) {
            $invalidProperties[] = "'shared_size' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
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
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id ID is the content-addressable ID of an image.  This identifier is a content-addressable digest calculated from the image's configuration (which includes the digests of layers used by the image).  Note that this digest differs from the `RepoDigests` below, which holds digests of image manifests that reference the image.
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
     * Gets parent_id.
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id.
     *
     * @param string $parent_id ID of the parent image.  Depending on how the image was created, this field may be empty and is only set for images that were built/created locally. This field is empty if the image was pulled from an image registry.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets repo_tags.
     *
     * @return string[]
     */
    public function getRepoTags()
    {
        return $this->container['repo_tags'];
    }

    /**
     * Sets repo_tags.
     *
     * @param string[] $repo_tags List of image names/tags in the local image cache that reference this image.  Multiple image tags can refer to the same image, and this list may be empty if no tags reference the image, in which case the image is \"untagged\", in which case it can still be referenced by its ID.
     *
     * @return self
     */
    public function setRepoTags($repo_tags)
    {
        if (is_null($repo_tags)) {
            throw new \InvalidArgumentException('non-nullable repo_tags cannot be null');
        }
        $this->container['repo_tags'] = $repo_tags;

        return $this;
    }

    /**
     * Gets repo_digests.
     *
     * @return string[]
     */
    public function getRepoDigests()
    {
        return $this->container['repo_digests'];
    }

    /**
     * Sets repo_digests.
     *
     * @param string[] $repo_digests List of content-addressable digests of locally available image manifests that the image is referenced from. Multiple manifests can refer to the same image.  These digests are usually only available if the image was either pulled from a registry, or if the image was pushed to a registry, which is when the manifest is generated and its digest calculated.
     *
     * @return self
     */
    public function setRepoDigests($repo_digests)
    {
        if (is_null($repo_digests)) {
            throw new \InvalidArgumentException('non-nullable repo_digests cannot be null');
        }
        $this->container['repo_digests'] = $repo_digests;

        return $this;
    }

    /**
     * Gets created.
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created.
     *
     * @param int $created date and time at which the image was created as a Unix timestamp (number of seconds sinds EPOCH)
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
     * Gets size.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param int $size total size of the image including all layers it is composed of
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets shared_size.
     *
     * @return int
     */
    public function getSharedSize()
    {
        return $this->container['shared_size'];
    }

    /**
     * Sets shared_size.
     *
     * @param int $shared_size Total size of image layers that are shared between this image and other images.  This size is not calculated by default. `-1` indicates that the value has not been set / calculated.
     *
     * @return self
     */
    public function setSharedSize($shared_size)
    {
        if (is_null($shared_size)) {
            throw new \InvalidArgumentException('non-nullable shared_size cannot be null');
        }
        $this->container['shared_size'] = $shared_size;

        return $this;
    }

    /**
     * Gets virtual_size.
     *
     * @return null|int
     */
    public function getVirtualSize()
    {
        return $this->container['virtual_size'];
    }

    /**
     * Sets virtual_size.
     *
     * @param null|int $virtual_size Total size of the image including all layers it is composed of.  In versions of Docker before v1.10, this field was calculated from the image itself and all of its parent images. Images are now stored self-contained, and no longer use a parent-chain, making this field an equivalent of the Size field.  Deprecated: this field is kept for backward compatibility, and will be removed in API v1.44.
     *
     * @return self
     */
    public function setVirtualSize($virtual_size)
    {
        if (is_null($virtual_size)) {
            throw new \InvalidArgumentException('non-nullable virtual_size cannot be null');
        }
        $this->container['virtual_size'] = $virtual_size;

        return $this;
    }

    /**
     * Gets labels.
     *
     * @return array<string,string>
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels.
     *
     * @param array<string,string> $labels user-defined key/value metadata
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
     * Gets containers.
     *
     * @return int
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers.
     *
     * @param int $containers Number of containers using this image. Includes both stopped and running containers.  This size is not calculated by default, and depends on which API endpoint is used. `-1` indicates that the value has not been set / calculated.
     *
     * @return self
     */
    public function setContainers($containers)
    {
        if (is_null($containers)) {
            throw new \InvalidArgumentException('non-nullable containers cannot be null');
        }
        $this->container['containers'] = $containers;

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
