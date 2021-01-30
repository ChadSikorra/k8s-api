<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.14.10
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
 * AzureDisk represents an Azure Data Disk mount on the host and bind mount to the pod.
 */
class AzureDiskVolumeSource
{
    /**
     * @Kubernetes\Attribute("cachingMode")
     * @var string|null
     */
    protected $cachingMode = null;

    /**
     * @Kubernetes\Attribute("diskName",isRequired=true)
     * @var string
     */
    protected $diskName;

    /**
     * @Kubernetes\Attribute("diskURI",isRequired=true)
     * @var string
     */
    protected $diskURI;

    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @param string $diskName
     * @param string $diskURI
     */
    public function __construct(string $diskName, string $diskURI)
    {
        $this->diskName = $diskName;
        $this->diskURI = $diskURI;
    }

    /**
     * Host Caching mode: None, Read Only, Read Write.
     */
    public function getCachingMode(): ?string
    {
        return $this->cachingMode;
    }

    /**
     * Host Caching mode: None, Read Only, Read Write.
     *
     * @return static
     */
    public function setCachingMode(string $cachingMode)
    {
        $this->cachingMode = $cachingMode;

        return $this;
    }

    /**
     * The Name of the data disk in the blob storage
     */
    public function getDiskName(): string
    {
        return $this->diskName;
    }

    /**
     * The Name of the data disk in the blob storage
     *
     * @return static
     */
    public function setDiskName(string $diskName)
    {
        $this->diskName = $diskName;

        return $this;
    }

    /**
     * The URI the data disk in the blob storage
     */
    public function getDiskURI(): string
    {
        return $this->diskURI;
    }

    /**
     * The URI the data disk in the blob storage
     *
     * @return static
     */
    public function setDiskURI(string $diskURI)
    {
        $this->diskURI = $diskURI;

        return $this;
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
     * Expected values Shared: multiple blob disks per storage account  Dedicated: single blob disk per
     * storage account  Managed: azure managed data disk (only in managed availability set). defaults to
     * shared
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Expected values Shared: multiple blob disks per storage account  Dedicated: single blob disk per
     * storage account  Managed: azure managed data disk (only in managed availability set). defaults to
     * shared
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

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
}
