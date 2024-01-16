# # TaskSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plugin_spec** | [**\MatthewBaggett\Docker\Model\TaskSpecPluginSpec**](TaskSpecPluginSpec.md) |  | [optional]
**container_spec** | [**\MatthewBaggett\Docker\Model\TaskSpecContainerSpec**](TaskSpecContainerSpec.md) |  | [optional]
**network_attachment_spec** | [**\MatthewBaggett\Docker\Model\TaskSpecNetworkAttachmentSpec**](TaskSpecNetworkAttachmentSpec.md) |  | [optional]
**resources** | [**\MatthewBaggett\Docker\Model\TaskSpecResources**](TaskSpecResources.md) |  | [optional]
**restart_policy** | [**\MatthewBaggett\Docker\Model\TaskSpecRestartPolicy**](TaskSpecRestartPolicy.md) |  | [optional]
**placement** | [**\MatthewBaggett\Docker\Model\TaskSpecPlacement**](TaskSpecPlacement.md) |  | [optional]
**force_update** | **int** | A counter that triggers an update even if no relevant parameters have been changed. | [optional]
**runtime** | **string** | Runtime is the type of runtime specified for the task executor. | [optional]
**networks** | [**\MatthewBaggett\Docker\Model\NetworkAttachmentConfig[]**](NetworkAttachmentConfig.md) | Specifies which networks the service should attach to. | [optional]
**log_driver** | [**\MatthewBaggett\Docker\Model\TaskSpecLogDriver**](TaskSpecLogDriver.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
