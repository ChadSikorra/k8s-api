<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.4
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
 * volumeDevice describes a mapping of a raw block device within a container.
 */
class VolumeDevice
{
    /**
     * @Kubernetes\Attribute("devicePath",isRequired=true)
     * @var string
     */
    protected $devicePath;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $devicePath
     * @param string $name
     */
    public function __construct(string $devicePath, string $name)
    {
        $this->devicePath = $devicePath;
        $this->name = $name;
    }

    /**
     * devicePath is the path inside of the container that the device will be mapped to.
     */
    public function getDevicePath(): string
    {
        return $this->devicePath;
    }

    /**
     * devicePath is the path inside of the container that the device will be mapped to.
     *
     * @return static
     */
    public function setDevicePath(string $devicePath)
    {
        $this->devicePath = $devicePath;

        return $this;
    }

    /**
     * name must match the name of a persistentVolumeClaim in the pod
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name must match the name of a persistentVolumeClaim in the pod
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
