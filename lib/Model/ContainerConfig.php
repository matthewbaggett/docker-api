<?php

declare(strict_types=1);

/**
 * ContainerConfig.
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
 * ContainerConfig Class Doc Comment.
 *
 * @category Class
 *
 * @description Configuration for a container that is portable between hosts.  When used as &#x60;ContainerConfig&#x60; field in an image, &#x60;ContainerConfig&#x60; is an optional field containing the configuration of the container that was last committed when creating the image.  Previous versions of Docker builder used this field to store build cache, and it is not in active use anymore.
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class ContainerConfig implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ContainerConfig';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'hostname'         => 'string',
        'domainname'       => 'string',
        'user'             => 'string',
        'attach_stdin'     => 'bool',
        'attach_stdout'    => 'bool',
        'attach_stderr'    => 'bool',
        'exposed_ports'    => 'array<string,object>',
        'tty'              => 'bool',
        'open_stdin'       => 'bool',
        'stdin_once'       => 'bool',
        'env'              => 'string[]',
        'cmd'              => 'string[]',
        'healthcheck'      => '\OpenAPI\Client\Model\HealthConfig',
        'args_escaped'     => 'bool',
        'image'            => 'string',
        'volumes'          => 'array<string,object>',
        'working_dir'      => 'string',
        'entrypoint'       => 'string[]',
        'network_disabled' => 'bool',
        'mac_address'      => 'string',
        'on_build'         => 'string[]',
        'labels'           => 'array<string,string>',
        'stop_signal'      => 'string',
        'stop_timeout'     => 'int',
        'shell'            => 'string[]',
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
        'hostname'         => null,
        'domainname'       => null,
        'user'             => null,
        'attach_stdin'     => null,
        'attach_stdout'    => null,
        'attach_stderr'    => null,
        'exposed_ports'    => null,
        'tty'              => null,
        'open_stdin'       => null,
        'stdin_once'       => null,
        'env'              => null,
        'cmd'              => null,
        'healthcheck'      => null,
        'args_escaped'     => null,
        'image'            => null,
        'volumes'          => null,
        'working_dir'      => null,
        'entrypoint'       => null,
        'network_disabled' => null,
        'mac_address'      => null,
        'on_build'         => null,
        'labels'           => null,
        'stop_signal'      => null,
        'stop_timeout'     => null,
        'shell'            => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'hostname'         => false,
        'domainname'       => false,
        'user'             => false,
        'attach_stdin'     => false,
        'attach_stdout'    => false,
        'attach_stderr'    => false,
        'exposed_ports'    => true,
        'tty'              => false,
        'open_stdin'       => false,
        'stdin_once'       => false,
        'env'              => false,
        'cmd'              => false,
        'healthcheck'      => false,
        'args_escaped'     => true,
        'image'            => false,
        'volumes'          => false,
        'working_dir'      => false,
        'entrypoint'       => false,
        'network_disabled' => true,
        'mac_address'      => true,
        'on_build'         => true,
        'labels'           => false,
        'stop_signal'      => true,
        'stop_timeout'     => true,
        'shell'            => true,
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
        'hostname'         => 'Hostname',
        'domainname'       => 'Domainname',
        'user'             => 'User',
        'attach_stdin'     => 'AttachStdin',
        'attach_stdout'    => 'AttachStdout',
        'attach_stderr'    => 'AttachStderr',
        'exposed_ports'    => 'ExposedPorts',
        'tty'              => 'Tty',
        'open_stdin'       => 'OpenStdin',
        'stdin_once'       => 'StdinOnce',
        'env'              => 'Env',
        'cmd'              => 'Cmd',
        'healthcheck'      => 'Healthcheck',
        'args_escaped'     => 'ArgsEscaped',
        'image'            => 'Image',
        'volumes'          => 'Volumes',
        'working_dir'      => 'WorkingDir',
        'entrypoint'       => 'Entrypoint',
        'network_disabled' => 'NetworkDisabled',
        'mac_address'      => 'MacAddress',
        'on_build'         => 'OnBuild',
        'labels'           => 'Labels',
        'stop_signal'      => 'StopSignal',
        'stop_timeout'     => 'StopTimeout',
        'shell'            => 'Shell',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'hostname'         => 'setHostname',
        'domainname'       => 'setDomainname',
        'user'             => 'setUser',
        'attach_stdin'     => 'setAttachStdin',
        'attach_stdout'    => 'setAttachStdout',
        'attach_stderr'    => 'setAttachStderr',
        'exposed_ports'    => 'setExposedPorts',
        'tty'              => 'setTty',
        'open_stdin'       => 'setOpenStdin',
        'stdin_once'       => 'setStdinOnce',
        'env'              => 'setEnv',
        'cmd'              => 'setCmd',
        'healthcheck'      => 'setHealthcheck',
        'args_escaped'     => 'setArgsEscaped',
        'image'            => 'setImage',
        'volumes'          => 'setVolumes',
        'working_dir'      => 'setWorkingDir',
        'entrypoint'       => 'setEntrypoint',
        'network_disabled' => 'setNetworkDisabled',
        'mac_address'      => 'setMacAddress',
        'on_build'         => 'setOnBuild',
        'labels'           => 'setLabels',
        'stop_signal'      => 'setStopSignal',
        'stop_timeout'     => 'setStopTimeout',
        'shell'            => 'setShell',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'hostname'         => 'getHostname',
        'domainname'       => 'getDomainname',
        'user'             => 'getUser',
        'attach_stdin'     => 'getAttachStdin',
        'attach_stdout'    => 'getAttachStdout',
        'attach_stderr'    => 'getAttachStderr',
        'exposed_ports'    => 'getExposedPorts',
        'tty'              => 'getTty',
        'open_stdin'       => 'getOpenStdin',
        'stdin_once'       => 'getStdinOnce',
        'env'              => 'getEnv',
        'cmd'              => 'getCmd',
        'healthcheck'      => 'getHealthcheck',
        'args_escaped'     => 'getArgsEscaped',
        'image'            => 'getImage',
        'volumes'          => 'getVolumes',
        'working_dir'      => 'getWorkingDir',
        'entrypoint'       => 'getEntrypoint',
        'network_disabled' => 'getNetworkDisabled',
        'mac_address'      => 'getMacAddress',
        'on_build'         => 'getOnBuild',
        'labels'           => 'getLabels',
        'stop_signal'      => 'getStopSignal',
        'stop_timeout'     => 'getStopTimeout',
        'shell'            => 'getShell',
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
        $this->setIfExists('hostname', $data ?? [], null);
        $this->setIfExists('domainname', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('attach_stdin', $data ?? [], false);
        $this->setIfExists('attach_stdout', $data ?? [], true);
        $this->setIfExists('attach_stderr', $data ?? [], true);
        $this->setIfExists('exposed_ports', $data ?? [], null);
        $this->setIfExists('tty', $data ?? [], false);
        $this->setIfExists('open_stdin', $data ?? [], false);
        $this->setIfExists('stdin_once', $data ?? [], false);
        $this->setIfExists('env', $data ?? [], null);
        $this->setIfExists('cmd', $data ?? [], null);
        $this->setIfExists('healthcheck', $data ?? [], null);
        $this->setIfExists('args_escaped', $data ?? [], false);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('volumes', $data ?? [], null);
        $this->setIfExists('working_dir', $data ?? [], null);
        $this->setIfExists('entrypoint', $data ?? [], null);
        $this->setIfExists('network_disabled', $data ?? [], null);
        $this->setIfExists('mac_address', $data ?? [], null);
        $this->setIfExists('on_build', $data ?? [], null);
        $this->setIfExists('labels', $data ?? [], null);
        $this->setIfExists('stop_signal', $data ?? [], null);
        $this->setIfExists('stop_timeout', $data ?? [], null);
        $this->setIfExists('shell', $data ?? [], null);
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
     * Gets hostname.
     *
     * @return null|string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname.
     *
     * @param null|string $hostname the hostname to use for the container, as a valid RFC 1123 hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        if (is_null($hostname)) {
            throw new \InvalidArgumentException('non-nullable hostname cannot be null');
        }
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets domainname.
     *
     * @return null|string
     */
    public function getDomainname()
    {
        return $this->container['domainname'];
    }

    /**
     * Sets domainname.
     *
     * @param null|string $domainname the domain name to use for the container
     *
     * @return self
     */
    public function setDomainname($domainname)
    {
        if (is_null($domainname)) {
            throw new \InvalidArgumentException('non-nullable domainname cannot be null');
        }
        $this->container['domainname'] = $domainname;

        return $this;
    }

    /**
     * Gets user.
     *
     * @return null|string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user.
     *
     * @param null|string $user the user that commands are run as inside the container
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
     * Gets attach_stdin.
     *
     * @return null|bool
     */
    public function getAttachStdin()
    {
        return $this->container['attach_stdin'];
    }

    /**
     * Sets attach_stdin.
     *
     * @param null|bool $attach_stdin whether to attach to `stdin`
     *
     * @return self
     */
    public function setAttachStdin($attach_stdin)
    {
        if (is_null($attach_stdin)) {
            throw new \InvalidArgumentException('non-nullable attach_stdin cannot be null');
        }
        $this->container['attach_stdin'] = $attach_stdin;

        return $this;
    }

    /**
     * Gets attach_stdout.
     *
     * @return null|bool
     */
    public function getAttachStdout()
    {
        return $this->container['attach_stdout'];
    }

    /**
     * Sets attach_stdout.
     *
     * @param null|bool $attach_stdout whether to attach to `stdout`
     *
     * @return self
     */
    public function setAttachStdout($attach_stdout)
    {
        if (is_null($attach_stdout)) {
            throw new \InvalidArgumentException('non-nullable attach_stdout cannot be null');
        }
        $this->container['attach_stdout'] = $attach_stdout;

        return $this;
    }

    /**
     * Gets attach_stderr.
     *
     * @return null|bool
     */
    public function getAttachStderr()
    {
        return $this->container['attach_stderr'];
    }

    /**
     * Sets attach_stderr.
     *
     * @param null|bool $attach_stderr whether to attach to `stderr`
     *
     * @return self
     */
    public function setAttachStderr($attach_stderr)
    {
        if (is_null($attach_stderr)) {
            throw new \InvalidArgumentException('non-nullable attach_stderr cannot be null');
        }
        $this->container['attach_stderr'] = $attach_stderr;

        return $this;
    }

    /**
     * Gets exposed_ports.
     *
     * @return null|array<string,object>
     */
    public function getExposedPorts()
    {
        return $this->container['exposed_ports'];
    }

    /**
     * Sets exposed_ports.
     *
     * @param null|array<string,object> $exposed_ports An object mapping ports to an empty object in the form:  `{\"<port>/<tcp|udp|sctp>\": {}}`
     *
     * @return self
     */
    public function setExposedPorts($exposed_ports)
    {
        if (is_null($exposed_ports)) {
            array_push($this->openAPINullablesSetToNull, 'exposed_ports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('exposed_ports', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exposed_ports'] = $exposed_ports;

        return $this;
    }

    /**
     * Gets tty.
     *
     * @return null|bool
     */
    public function getTty()
    {
        return $this->container['tty'];
    }

    /**
     * Sets tty.
     *
     * @param null|bool $tty attach standard streams to a TTY, including `stdin` if it is not closed
     *
     * @return self
     */
    public function setTty($tty)
    {
        if (is_null($tty)) {
            throw new \InvalidArgumentException('non-nullable tty cannot be null');
        }
        $this->container['tty'] = $tty;

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
     * @param null|bool $open_stdin Open `stdin`
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
     * Gets stdin_once.
     *
     * @return null|bool
     */
    public function getStdinOnce()
    {
        return $this->container['stdin_once'];
    }

    /**
     * Sets stdin_once.
     *
     * @param null|bool $stdin_once Close `stdin` after one attached client disconnects
     *
     * @return self
     */
    public function setStdinOnce($stdin_once)
    {
        if (is_null($stdin_once)) {
            throw new \InvalidArgumentException('non-nullable stdin_once cannot be null');
        }
        $this->container['stdin_once'] = $stdin_once;

        return $this;
    }

    /**
     * Gets env.
     *
     * @return null|string[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env.
     *
     * @param null|string[] $env A list of environment variables to set inside the container in the form `[\"VAR=value\", ...]`. A variable without `=` is removed from the environment, rather than to have an empty value.
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
     * Gets cmd.
     *
     * @return null|string[]
     */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
     * Sets cmd.
     *
     * @param null|string[] $cmd command to run specified as a string or an array of strings
     *
     * @return self
     */
    public function setCmd($cmd)
    {
        if (is_null($cmd)) {
            throw new \InvalidArgumentException('non-nullable cmd cannot be null');
        }
        $this->container['cmd'] = $cmd;

        return $this;
    }

    /**
     * Gets healthcheck.
     *
     * @return null|HealthConfig
     */
    public function getHealthcheck()
    {
        return $this->container['healthcheck'];
    }

    /**
     * Sets healthcheck.
     *
     * @param null|HealthConfig $healthcheck healthcheck
     *
     * @return self
     */
    public function setHealthcheck($healthcheck)
    {
        if (is_null($healthcheck)) {
            throw new \InvalidArgumentException('non-nullable healthcheck cannot be null');
        }
        $this->container['healthcheck'] = $healthcheck;

        return $this;
    }

    /**
     * Gets args_escaped.
     *
     * @return null|bool
     */
    public function getArgsEscaped()
    {
        return $this->container['args_escaped'];
    }

    /**
     * Sets args_escaped.
     *
     * @param null|bool $args_escaped Command is already escaped (Windows only)
     *
     * @return self
     */
    public function setArgsEscaped($args_escaped)
    {
        if (is_null($args_escaped)) {
            array_push($this->openAPINullablesSetToNull, 'args_escaped');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('args_escaped', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['args_escaped'] = $args_escaped;

        return $this;
    }

    /**
     * Gets image.
     *
     * @return null|string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image.
     *
     * @param null|string $image the name (or reference) of the image to use when creating the container, or which was used when the container was created
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets volumes.
     *
     * @return null|array<string,object>
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes.
     *
     * @param null|array<string,object> $volumes an object mapping mount point paths inside the container to empty objects
     *
     * @return self
     */
    public function setVolumes($volumes)
    {
        if (is_null($volumes)) {
            throw new \InvalidArgumentException('non-nullable volumes cannot be null');
        }
        $this->container['volumes'] = $volumes;

        return $this;
    }

    /**
     * Gets working_dir.
     *
     * @return null|string
     */
    public function getWorkingDir()
    {
        return $this->container['working_dir'];
    }

    /**
     * Sets working_dir.
     *
     * @param null|string $working_dir the working directory for commands to run in
     *
     * @return self
     */
    public function setWorkingDir($working_dir)
    {
        if (is_null($working_dir)) {
            throw new \InvalidArgumentException('non-nullable working_dir cannot be null');
        }
        $this->container['working_dir'] = $working_dir;

        return $this;
    }

    /**
     * Gets entrypoint.
     *
     * @return null|string[]
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint.
     *
     * @param null|string[] $entrypoint The entry point for the container as a string or an array of strings.  If the array consists of exactly one empty string (`[\"\"]`) then the entry point is reset to system default (i.e., the entry point used by docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
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
     * Gets network_disabled.
     *
     * @return null|bool
     */
    public function getNetworkDisabled()
    {
        return $this->container['network_disabled'];
    }

    /**
     * Sets network_disabled.
     *
     * @param null|bool $network_disabled disable networking for the container
     *
     * @return self
     */
    public function setNetworkDisabled($network_disabled)
    {
        if (is_null($network_disabled)) {
            array_push($this->openAPINullablesSetToNull, 'network_disabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('network_disabled', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['network_disabled'] = $network_disabled;

        return $this;
    }

    /**
     * Gets mac_address.
     *
     * @return null|string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address.
     *
     * @param null|string $mac_address MAC address of the container
     *
     * @return self
     */
    public function setMacAddress($mac_address)
    {
        if (is_null($mac_address)) {
            array_push($this->openAPINullablesSetToNull, 'mac_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('mac_address', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets on_build.
     *
     * @return null|string[]
     */
    public function getOnBuild()
    {
        return $this->container['on_build'];
    }

    /**
     * Sets on_build.
     *
     * @param null|string[] $on_build `ONBUILD` metadata that were defined in the image's `Dockerfile`
     *
     * @return self
     */
    public function setOnBuild($on_build)
    {
        if (is_null($on_build)) {
            array_push($this->openAPINullablesSetToNull, 'on_build');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('on_build', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['on_build'] = $on_build;

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
     * Gets stop_signal.
     *
     * @return null|string
     */
    public function getStopSignal()
    {
        return $this->container['stop_signal'];
    }

    /**
     * Sets stop_signal.
     *
     * @param null|string $stop_signal signal to stop a container as a string or unsigned integer
     *
     * @return self
     */
    public function setStopSignal($stop_signal)
    {
        if (is_null($stop_signal)) {
            array_push($this->openAPINullablesSetToNull, 'stop_signal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('stop_signal', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stop_signal'] = $stop_signal;

        return $this;
    }

    /**
     * Gets stop_timeout.
     *
     * @return null|int
     */
    public function getStopTimeout()
    {
        return $this->container['stop_timeout'];
    }

    /**
     * Sets stop_timeout.
     *
     * @param null|int $stop_timeout timeout to stop a container in seconds
     *
     * @return self
     */
    public function setStopTimeout($stop_timeout)
    {
        if (is_null($stop_timeout)) {
            array_push($this->openAPINullablesSetToNull, 'stop_timeout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('stop_timeout', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stop_timeout'] = $stop_timeout;

        return $this;
    }

    /**
     * Gets shell.
     *
     * @return null|string[]
     */
    public function getShell()
    {
        return $this->container['shell'];
    }

    /**
     * Sets shell.
     *
     * @param null|string[] $shell shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell
     *
     * @return self
     */
    public function setShell($shell)
    {
        if (is_null($shell)) {
            array_push($this->openAPINullablesSetToNull, 'shell');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index              = array_search('shell', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shell'] = $shell;

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
