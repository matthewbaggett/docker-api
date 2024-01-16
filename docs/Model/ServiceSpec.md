# # ServiceSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the service. | [optional]
**labels** | **array<string,string>** | User-defined key/value metadata. | [optional]
**task_template** | [**\MatthewBaggett\Docker\Api\Model\TaskSpec**](TaskSpec.md) |  | [optional]
**mode** | [**\MatthewBaggett\Docker\Api\Model\ServiceSpecMode**](ServiceSpecMode.md) |  | [optional]
**update_config** | [**\MatthewBaggett\Docker\Api\Model\ServiceSpecUpdateConfig**](ServiceSpecUpdateConfig.md) |  | [optional]
**rollback_config** | [**\MatthewBaggett\Docker\Api\Model\ServiceSpecRollbackConfig**](ServiceSpecRollbackConfig.md) |  | [optional]
**networks** | [**\MatthewBaggett\Docker\Api\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional]
**endpoint_spec** | [**\MatthewBaggett\Docker\Api\Model\EndpointSpec**](EndpointSpec.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
