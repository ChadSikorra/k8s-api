<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Represents a StorageOS persistent volume resource.
 */
class StorageOSPersistentVolumeSource
{
    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=ObjectReference::class)
     * @var ObjectReference|null
     */
    protected $secretRef = null;

    /**
     * @Kubernetes\Attribute("volumeName")
     * @var string|null
     */
    protected $volumeName = null;

    /**
     * @Kubernetes\Attribute("volumeNamespace")
     * @var string|null
     */
    protected $volumeNamespace = null;

    /**
     * @param string|null $fsType
     * @param bool|null $readOnly
     * @param ObjectReference|null $secretRef
     * @param string|null $volumeName
     * @param string|null $volumeNamespace
     */
    public function __construct(
        ?string $fsType = null,
        ?bool $readOnly = null,
        ?ObjectReference $secretRef = null,
        ?string $volumeName = null,
        ?string $volumeNamespace = null
    ) {
        $this->fsType = $fsType;
        $this->readOnly = $readOnly;
        $this->secretRef = $secretRef;
        $this->volumeName = $volumeName;
        $this->volumeNamespace = $volumeNamespace;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type to mount. Must be a filesystem type supported by the host operating system. Ex.
     * "ext4", "xfs", "ntfs". Implicitly inferred to be "ext4" if unspecified.
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * Defaults to false (read/write). ReadOnly here will force the ReadOnly setting in VolumeMounts.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * SecretRef specifies the secret to use for obtaining the StorageOS API credentials.  If not
     * specified, default values will be attempted.
     */
    public function getSecretRef(): ?ObjectReference
    {
        return $this->secretRef;
    }

    /**
     * SecretRef specifies the secret to use for obtaining the StorageOS API credentials.  If not
     * specified, default values will be attempted.
     *
     * @return static
     */
    public function setSecretRef(ObjectReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }

    /**
     * VolumeName is the human-readable name of the StorageOS volume.  Volume names are only unique within
     * a namespace.
     */
    public function getVolumeName(): ?string
    {
        return $this->volumeName;
    }

    /**
     * VolumeName is the human-readable name of the StorageOS volume.  Volume names are only unique within
     * a namespace.
     *
     * @return static
     */
    public function setVolumeName(string $volumeName)
    {
        $this->volumeName = $volumeName;

        return $this;
    }

    /**
     * VolumeNamespace specifies the scope of the volume within StorageOS.  If no namespace is specified
     * then the Pod's namespace will be used.  This allows the Kubernetes name scoping to be mirrored
     * within StorageOS for tighter integration. Set VolumeName to any name to override the default
     * behaviour. Set to "default" if you are not using namespaces within StorageOS. Namespaces that do not
     * pre-exist within StorageOS will be created.
     */
    public function getVolumeNamespace(): ?string
    {
        return $this->volumeNamespace;
    }

    /**
     * VolumeNamespace specifies the scope of the volume within StorageOS.  If no namespace is specified
     * then the Pod's namespace will be used.  This allows the Kubernetes name scoping to be mirrored
     * within StorageOS for tighter integration. Set VolumeName to any name to override the default
     * behaviour. Set to "default" if you are not using namespaces within StorageOS. Namespaces that do not
     * pre-exist within StorageOS will be created.
     *
     * @return static
     */
    public function setVolumeNamespace(string $volumeNamespace)
    {
        $this->volumeNamespace = $volumeNamespace;

        return $this;
    }
}
