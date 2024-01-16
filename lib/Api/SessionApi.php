<?php

declare(strict_types=1);

/**
 * SessionApi
 * PHP version 7.4.
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

namespace MatthewBaggett\Docker\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MatthewBaggett\Docker\ApiException;
use MatthewBaggett\Docker\Configuration;
use MatthewBaggett\Docker\HeaderSelector;
use MatthewBaggett\Docker\ObjectSerializer;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Utils;

/**
 * SessionApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class SessionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] */
    public const contentTypes = [
        'session' => [
            'application/json',
        ],
    ];

    /**
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client         = $client ?: new Client();
        $this->config         = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex      = $hostIndex;
    }

    /**
     * Set the host index.
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index.
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation session.
     *
     * Initialize interactive session
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['session'] to see the possible values for this operation
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function session(string $contentType = self::contentTypes['session'][0]): void
    {
        $this->sessionWithHttpInfo($contentType);
    }

    /**
     * Operation sessionWithHttpInfo.
     *
     * Initialize interactive session
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['session'] to see the possible values for this operation
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function sessionWithHttpInfo(string $contentType = self::contentTypes['session'][0])
    {
        $request = $this->sessionRequest($contentType);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MatthewBaggett\Docker\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;

                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MatthewBaggett\Docker\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sessionAsync.
     *
     * Initialize interactive session
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['session'] to see the possible values for this operation
     *
     * @return PromiseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function sessionAsync(string $contentType = self::contentTypes['session'][0])
    {
        return $this->sessionAsyncWithHttpInfo($contentType)
            ->then(
                fn ($response) => $response[0]
            )
        ;
    }

    /**
     * Operation sessionAsyncWithHttpInfo.
     *
     * Initialize interactive session
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['session'] to see the possible values for this operation
     *
     * @return PromiseInterface
     *
     * @throws \InvalidArgumentException
     */
    public function sessionAsyncWithHttpInfo(string $contentType = self::contentTypes['session'][0])
    {
        $returnType = '';
        $request    = $this->sessionRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                fn ($response) => [null, $response->getStatusCode(), $response->getHeaders()],
                function ($exception): void {
                    $response   = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            )
        ;
    }

    /**
     * Create request for operation 'session'.
     *
     * @param string $contentType The value for the Content-Type header. Check self::contentTypes['session'] to see the possible values for this operation
     *
     * @return Request
     *
     * @throws \InvalidArgumentException
     */
    public function sessionRequest(string $contentType = self::contentTypes['session'][0])
    {
        $resourcePath = '/session';
        $formParams   = [];
        $queryParams  = [];
        $headerParams = [];
        $httpBody     = '';
        $multipart    = false;

        $headers = $this->headerSelector->selectHeaders(
            ['application/vnd.docker.raw-stream'],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name'     => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                // if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query         = ObjectSerializer::buildQuery($queryParams);

        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @return array of http client options
     *
     * @throws \RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
