# # ImageInspect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID is the content-addressable ID of an image.  This identifier is a content-addressable digest calculated from the image&#39;s configuration (which includes the digests of layers used by the image).  Note that this digest differs from the &#x60;RepoDigests&#x60; below, which holds digests of image manifests that reference the image. | [optional]
**repo_tags** | **string[]** | List of image names/tags in the local image cache that reference this image.  Multiple image tags can refer to the same image, and this list may be empty if no tags reference the image, in which case the image is \&quot;untagged\&quot;, in which case it can still be referenced by its ID. | [optional]
**repo_digests** | **string[]** | List of content-addressable digests of locally available image manifests that the image is referenced from. Multiple manifests can refer to the same image.  These digests are usually only available if the image was either pulled from a registry, or if the image was pushed to a registry, which is when the manifest is generated and its digest calculated. | [optional]
**parent** | **string** | ID of the parent image.  Depending on how the image was created, this field may be empty and is only set for images that were built/created locally. This field is empty if the image was pulled from an image registry. | [optional]
**comment** | **string** | Optional message that was set when committing or importing the image. | [optional]
**created** | **string** | Date and time at which the image was created, formatted in [RFC 3339](https://www.ietf.org/rfc/rfc3339.txt) format with nano-seconds. | [optional]
**container** | **string** | The ID of the container that was used to create the image.  Depending on how the image was created, this field may be empty. | [optional]
**container_config** | [**\OpenAPI\Client\Model\ContainerConfig**](ContainerConfig.md) |  | [optional]
**docker_version** | **string** | The version of Docker that was used to build the image.  Depending on how the image was created, this field may be empty. | [optional]
**author** | **string** | Name of the author that was specified when committing the image, or as specified through MAINTAINER (deprecated) in the Dockerfile. | [optional]
**config** | [**\OpenAPI\Client\Model\ContainerConfig**](ContainerConfig.md) |  | [optional]
**architecture** | **string** | Hardware CPU architecture that the image runs on. | [optional]
**variant** | **string** | CPU architecture variant (presently ARM-only). | [optional]
**os** | **string** | Operating System the image is built to run on. | [optional]
**os_version** | **string** | Operating System version the image is built to run on (especially for Windows). | [optional]
**size** | **int** | Total size of the image including all layers it is composed of. | [optional]
**virtual_size** | **int** | Total size of the image including all layers it is composed of.  In versions of Docker before v1.10, this field was calculated from the image itself and all of its parent images. Images are now stored self-contained, and no longer use a parent-chain, making this field an equivalent of the Size field.  &gt; **Deprecated**: this field is kept for backward compatibility, but &gt; will be removed in API v1.44. | [optional]
**graph_driver** | [**\OpenAPI\Client\Model\GraphDriverData**](GraphDriverData.md) |  | [optional]
**root_fs** | [**\OpenAPI\Client\Model\ImageInspectRootFS**](ImageInspectRootFS.md) |  | [optional]
**metadata** | [**\OpenAPI\Client\Model\ImageInspectMetadata**](ImageInspectMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
