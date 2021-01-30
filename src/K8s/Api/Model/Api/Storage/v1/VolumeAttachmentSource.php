<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1;

use K8s\Api\Model\Api\Core\v1\PersistentVolumeSpec;
use K8s\Core\Annotation as Kubernetes;

/**
 * VolumeAttachmentSource represents a volume that should be attached. Right now only PersistenVolumes
 * can be attached via external attacher, in future we may allow also inline volumes in pods. Exactly
 * one member can be set.
 */
class VolumeAttachmentSource
{
    /**
     * @Kubernetes\Attribute("inlineVolumeSpec",type="model",model=PersistentVolumeSpec::class)
     * @var PersistentVolumeSpec|null
     */
    protected $inlineVolumeSpec = null;

    /**
     * @Kubernetes\Attribute("persistentVolumeName")
     * @var string|null
     */
    protected $persistentVolumeName = null;

    /**
     * @param PersistentVolumeSpec|null $inlineVolumeSpec
     * @param string|null $persistentVolumeName
     */
    public function __construct(?PersistentVolumeSpec $inlineVolumeSpec = null, ?string $persistentVolumeName = null)
    {
        $this->inlineVolumeSpec = $inlineVolumeSpec;
        $this->persistentVolumeName = $persistentVolumeName;
    }

    /**
     * inlineVolumeSpec contains all the information necessary to attach a persistent volume defined by a
     * pod's inline VolumeSource. This field is populated only for the CSIMigration feature. It contains
     * translated fields from a pod's inline VolumeSource to a PersistentVolumeSpec. This field is
     * alpha-level and is only honored by servers that enabled the CSIMigration feature.
     */
    public function getInlineVolumeSpec(): ?PersistentVolumeSpec
    {
        return $this->inlineVolumeSpec;
    }

    /**
     * inlineVolumeSpec contains all the information necessary to attach a persistent volume defined by a
     * pod's inline VolumeSource. This field is populated only for the CSIMigration feature. It contains
     * translated fields from a pod's inline VolumeSource to a PersistentVolumeSpec. This field is
     * alpha-level and is only honored by servers that enabled the CSIMigration feature.
     *
     * @return static
     */
    public function setInlineVolumeSpec(PersistentVolumeSpec $inlineVolumeSpec)
    {
        $this->inlineVolumeSpec = $inlineVolumeSpec;

        return $this;
    }

    /**
     * Name of the persistent volume to attach.
     */
    public function getPersistentVolumeName(): ?string
    {
        return $this->persistentVolumeName;
    }

    /**
     * Name of the persistent volume to attach.
     *
     * @return static
     */
    public function setPersistentVolumeName(string $persistentVolumeName)
    {
        $this->persistentVolumeName = $persistentVolumeName;

        return $this;
    }
}
