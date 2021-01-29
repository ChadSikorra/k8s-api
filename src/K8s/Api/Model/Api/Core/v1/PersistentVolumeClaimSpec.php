<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and allows a Source for
 * provider-specific attributes
 */
class PersistentVolumeClaimSpec
{
    /**
     * @Kubernetes\Attribute("accessModes")
     * @var string[]|null
     */
    protected $accessModes = null;

    /**
     * @Kubernetes\Attribute("dataSource",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $dataSource = null;

    /**
     * @Kubernetes\Attribute("resources",type="model",model=ResourceRequirements::class)
     * @var ResourceRequirements|null
     */
    protected $resources = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("storageClassName")
     * @var string|null
     */
    protected $storageClassName = null;

    /**
     * @Kubernetes\Attribute("volumeMode")
     * @var string|null
     */
    protected $volumeMode = null;

    /**
     * @Kubernetes\Attribute("volumeName")
     * @var string|null
     */
    protected $volumeName = null;

    /**
     * AccessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public function getAccessModes(): ?array
    {
        return $this->accessModes;
    }

    /**
     * AccessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @return static
     */
    public function setAccessModes(array $accessModes)
    {
        $this->accessModes = $accessModes;

        return $this;
    }

    /**
     * This field requires the VolumeSnapshotDataSource alpha feature gate to be enabled and currently
     * VolumeSnapshot is the only supported data source. If the provisioner can support VolumeSnapshot data
     * source, it will create a new volume and data will be restored to the volume at the same time. If the
     * provisioner does not support VolumeSnapshot data source, volume will not be created and the failure
     * will be reported as an event. In the future, we plan to support more data source types and the
     * behavior of the provisioner may change.
     */
    public function getDataSource(): ?TypedLocalObjectReference
    {
        return $this->dataSource;
    }

    /**
     * This field requires the VolumeSnapshotDataSource alpha feature gate to be enabled and currently
     * VolumeSnapshot is the only supported data source. If the provisioner can support VolumeSnapshot data
     * source, it will create a new volume and data will be restored to the volume at the same time. If the
     * provisioner does not support VolumeSnapshot data source, volume will not be created and the failure
     * will be reported as an event. In the future, we plan to support more data source types and the
     * behavior of the provisioner may change.
     *
     * @return static
     */
    public function setDataSource(TypedLocalObjectReference $dataSource)
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    /**
     * Resources represents the minimum resources the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     */
    public function getResources(): ?ResourceRequirements
    {
        return $this->resources;
    }

    /**
     * Resources represents the minimum resources the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * @return static
     */
    public function setResources(ResourceRequirements $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * A label query over volumes to consider for binding.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * A label query over volumes to consider for binding.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     */
    public function getStorageClassName(): ?string
    {
        return $this->storageClassName;
    }

    /**
     * Name of the StorageClass required by the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     *
     * @return static
     */
    public function setStorageClassName(string $storageClassName)
    {
        $this->storageClassName = $storageClassName;

        return $this;
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec. This is a beta feature.
     */
    public function getVolumeMode(): ?string
    {
        return $this->volumeMode;
    }

    /**
     * volumeMode defines what type of volume is required by the claim. Value of Filesystem is implied when
     * not included in claim spec. This is a beta feature.
     *
     * @return static
     */
    public function setVolumeMode(string $volumeMode)
    {
        $this->volumeMode = $volumeMode;

        return $this;
    }

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     */
    public function getVolumeName(): ?string
    {
        return $this->volumeName;
    }

    /**
     * VolumeName is the binding reference to the PersistentVolume backing this claim.
     *
     * @return static
     */
    public function setVolumeName(string $volumeName)
    {
        $this->volumeName = $volumeName;

        return $this;
    }
}
