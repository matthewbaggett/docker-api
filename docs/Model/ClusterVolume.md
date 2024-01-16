# # ClusterVolume

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The Swarm ID of this volume. Because cluster volumes are Swarm objects, they have an ID, unlike non-cluster volumes. This ID can be used to refer to the Volume instead of the name. | [optional]
**version** | [**\OpenAPI\Client\Model\ObjectVersion**](ObjectVersion.md) |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**spec** | [**\OpenAPI\Client\Model\ClusterVolumeSpec**](ClusterVolumeSpec.md) |  | [optional]
**info** | [**\OpenAPI\Client\Model\ClusterVolumeInfo**](ClusterVolumeInfo.md) |  | [optional]
**publish_status** | [**\OpenAPI\Client\Model\ClusterVolumePublishStatusInner[]**](ClusterVolumePublishStatusInner.md) | The status of the volume as it pertains to its publishing and use on specific nodes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
