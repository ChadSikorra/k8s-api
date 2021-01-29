<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.12.10
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
 * Represents a host path mapped into a pod. Host path volumes do not support ownership management or
 * SELinux relabeling.
 */
class HostPathVolumeSource
{
    /**
     * @Kubernetes\Attribute("path",isRequired=true)
     * @var string
     */
    protected $path;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Path of the directory on the host. If the path is a symlink, it will follow the link to the real
     * path. More info: https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Path of the directory on the host. If the path is a symlink, it will follow the link to the real
     * path. More info: https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Type for HostPath Volume Defaults to "" More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type for HostPath Volume Defaults to "" More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#hostpath
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
