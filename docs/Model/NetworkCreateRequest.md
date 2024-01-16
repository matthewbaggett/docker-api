# # NetworkCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The network&#39;s name. |
**check_duplicate** | **bool** | Check for networks with duplicate names. Since Network is primarily keyed based on a random ID and not on the name, and network name is strictly a user-friendly alias to the network which is uniquely identified using ID, there is no guaranteed way to check for duplicates. CheckDuplicate is there to provide a best effort checking of any networks which has the same name but it is not guaranteed to catch all name collisions. | [optional]
**driver** | **string** | Name of the network driver plugin to use. | [optional] [default to 'bridge']
**internal** | **bool** | Restrict external access to the network. | [optional]
**attachable** | **bool** | Globally scoped network is manually attachable by regular containers from workers in swarm mode. | [optional]
**ingress** | **bool** | Ingress network is the network which provides the routing-mesh in swarm mode. | [optional]
**ipam** | [**\MatthewBaggett\Docker\Model\IPAM**](IPAM.md) |  | [optional]
**enable_ipv6** | **bool** | Enable IPv6 on the network. | [optional]
**options** | **array<string,string>** | Network specific options to be used by the drivers. | [optional]
**labels** | **array<string,string>** | User-defined key/value metadata. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
