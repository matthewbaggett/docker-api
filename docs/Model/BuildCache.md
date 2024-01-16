# # BuildCache

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the build cache record. | [optional]
**parent** | **string** | ID of the parent build cache record.  &gt; **Deprecated**: This field is deprecated, and omitted if empty. | [optional]
**parents** | **string[]** | List of parent build cache record IDs. | [optional]
**type** | **string** | Cache record type. | [optional]
**description** | **string** | Description of the build-step that produced the build cache. | [optional]
**in_use** | **bool** | Indicates if the build cache is in use. | [optional]
**shared** | **bool** | Indicates if the build cache is shared. | [optional]
**size** | **int** | Amount of disk space used by the build cache (in bytes). | [optional]
**created_at** | **string** | Date and time at which the build cache was created in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds. | [optional]
**last_used_at** | **string** | Date and time at which the build cache was last used in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds. | [optional]
**usage_count** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
