<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.11.10
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
 * Local represents directly-attached storage with node affinity (Beta feature)
 */
class LocalVolumeSource
{
    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * The full path to the volume on the node. It can be either a directory or block device (disk,
     * partition, ...). Directories can be represented only by PersistentVolume with VolumeMode=Filesystem.
     * Block devices can be represented only by VolumeMode=Block, which also requires the BlockVolume alpha
     * feature gate to be enabled.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * The full path to the volume on the node. It can be either a directory or block device (disk,
     * partition, ...). Directories can be represented only by PersistentVolume with VolumeMode=Filesystem.
     * Block devices can be represented only by VolumeMode=Block, which also requires the BlockVolume alpha
     * feature gate to be enabled.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}
