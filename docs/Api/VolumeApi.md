# MatthewBaggett\Docker\Api\VolumeApi

All URIs are relative to http://localhost/v1.43, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**volumeCreate()**](VolumeApi.md#volumeCreate) | **POST** /volumes/create | Create a volume |
| [**volumeDelete()**](VolumeApi.md#volumeDelete) | **DELETE** /volumes/{name} | Remove a volume |
| [**volumeInspect()**](VolumeApi.md#volumeInspect) | **GET** /volumes/{name} | Inspect a volume |
| [**volumeList()**](VolumeApi.md#volumeList) | **GET** /volumes | List volumes |
| [**volumePrune()**](VolumeApi.md#volumePrune) | **POST** /volumes/prune | Delete unused volumes |
| [**volumeUpdate()**](VolumeApi.md#volumeUpdate) | **PUT** /volumes/{name} | \&quot;Update a volume. Valid only for Swarm cluster volumes\&quot; |


## `volumeCreate()`

```php
volumeCreate($volume_config): \MatthewBaggett\Docker\Api\Model\Volume
```

Create a volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$volume_config = new \MatthewBaggett\Docker\Api\Model\VolumeCreateOptions(); // \MatthewBaggett\Docker\Api\Model\VolumeCreateOptions | Volume configuration

try {
    $result = $apiInstance->volumeCreate($volume_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **volume_config** | [**\MatthewBaggett\Docker\Api\Model\VolumeCreateOptions**](../Model/VolumeCreateOptions.md)| Volume configuration | |

### Return type

[**\MatthewBaggett\Docker\Api\Model\Volume**](../Model/Volume.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeDelete()`

```php
volumeDelete($name, $force)
```

Remove a volume

Instruct the driver to remove the volume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Volume name or ID
$force = false; // bool | Force the removal of the volume

try {
    $apiInstance->volumeDelete($name, $force);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Volume name or ID | |
| **force** | **bool**| Force the removal of the volume | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeInspect()`

```php
volumeInspect($name): \MatthewBaggett\Docker\Api\Model\Volume
```

Inspect a volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Volume name or ID

try {
    $result = $apiInstance->volumeInspect($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeInspect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Volume name or ID | |

### Return type

[**\MatthewBaggett\Docker\Api\Model\Volume**](../Model/Volume.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeList()`

```php
volumeList($filters): \MatthewBaggett\Docker\Api\Model\VolumeListResponse
```

List volumes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | JSON encoded value of the filters (a `map[string][]string`) to process on the volumes list. Available filters:  - `dangling=<boolean>` When set to `true` (or `1`), returns all    volumes that are not in use by a container. When set to `false`    (or `0`), only volumes that are in use by one or more    containers are returned. - `driver=<volume-driver-name>` Matches volumes based on their driver. - `label=<key>` or `label=<key>:<value>` Matches volumes based on    the presence of a `label` alone or a `label` and a value. - `name=<volume-name>` Matches all or part of a volume name.

try {
    $result = $apiInstance->volumeList($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| JSON encoded value of the filters (a &#x60;map[string][]string&#x60;) to process on the volumes list. Available filters:  - &#x60;dangling&#x3D;&lt;boolean&gt;&#x60; When set to &#x60;true&#x60; (or &#x60;1&#x60;), returns all    volumes that are not in use by a container. When set to &#x60;false&#x60;    (or &#x60;0&#x60;), only volumes that are in use by one or more    containers are returned. - &#x60;driver&#x3D;&lt;volume-driver-name&gt;&#x60; Matches volumes based on their driver. - &#x60;label&#x3D;&lt;key&gt;&#x60; or &#x60;label&#x3D;&lt;key&gt;:&lt;value&gt;&#x60; Matches volumes based on    the presence of a &#x60;label&#x60; alone or a &#x60;label&#x60; and a value. - &#x60;name&#x3D;&lt;volume-name&gt;&#x60; Matches all or part of a volume name. | [optional] |

### Return type

[**\MatthewBaggett\Docker\Api\Model\VolumeListResponse**](../Model/VolumeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumePrune()`

```php
volumePrune($filters): \MatthewBaggett\Docker\Api\Model\VolumePruneResponse
```

Delete unused volumes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filters = 'filters_example'; // string | Filters to process on the prune list, encoded as JSON (a `map[string][]string`).  Available filters: - `label` (`label=<key>`, `label=<key>=<value>`, `label!=<key>`, or `label!=<key>=<value>`) Prune volumes with (or without, in case `label!=...` is used) the specified labels. - `all` (`all=true`) - Consider all (local) volumes for pruning and not just anonymous volumes.

try {
    $result = $apiInstance->volumePrune($filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumePrune: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filters** | **string**| Filters to process on the prune list, encoded as JSON (a &#x60;map[string][]string&#x60;).  Available filters: - &#x60;label&#x60; (&#x60;label&#x3D;&lt;key&gt;&#x60;, &#x60;label&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;, &#x60;label!&#x3D;&lt;key&gt;&#x60;, or &#x60;label!&#x3D;&lt;key&gt;&#x3D;&lt;value&gt;&#x60;) Prune volumes with (or without, in case &#x60;label!&#x3D;...&#x60; is used) the specified labels. - &#x60;all&#x60; (&#x60;all&#x3D;true&#x60;) - Consider all (local) volumes for pruning and not just anonymous volumes. | [optional] |

### Return type

[**\MatthewBaggett\Docker\Api\Model\VolumePruneResponse**](../Model/VolumePruneResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeUpdate()`

```php
volumeUpdate($name, $version, $body)
```

\"Update a volume. Valid only for Swarm cluster volumes\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MatthewBaggett\Docker\Api\Api\VolumeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name or ID of the volume
$version = 56; // int | The version number of the volume being updated. This is required to avoid conflicting writes. Found in the volume's `ClusterVolume` field.
$body = new \MatthewBaggett\Docker\Api\Model\VolumeUpdateRequest(); // \MatthewBaggett\Docker\Api\Model\VolumeUpdateRequest | The spec of the volume to update. Currently, only Availability may change. All other fields must remain unchanged.

try {
    $apiInstance->volumeUpdate($name, $version, $body);
} catch (Exception $e) {
    echo 'Exception when calling VolumeApi->volumeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name or ID of the volume | |
| **version** | **int**| The version number of the volume being updated. This is required to avoid conflicting writes. Found in the volume&#39;s &#x60;ClusterVolume&#x60; field. | |
| **body** | [**\MatthewBaggett\Docker\Api\Model\VolumeUpdateRequest**](../Model/VolumeUpdateRequest.md)| The spec of the volume to update. Currently, only Availability may change. All other fields must remain unchanged. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
