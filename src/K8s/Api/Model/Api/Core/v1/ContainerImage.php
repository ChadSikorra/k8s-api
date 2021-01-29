<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.20.2
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
 * Describe a container image
 */
class ContainerImage
{
    /**
     * @Kubernetes\Attribute("names",isRequired=true)
     * @var string[]
     */
    protected $names = null;

    /**
     * @Kubernetes\Attribute("sizeBytes")
     * @var int|null
     */
    protected $sizeBytes = null;

    /**
     * @param string[] $names
     */
    public function __construct(array $names)
    {
        $this->names = $names;
    }

    /**
     * Names by which this image is known. e.g. ["k8s.gcr.io/hyperkube:v1.0.7",
     * "dockerhub.io/google_containers/hyperkube:v1.0.7"]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * Names by which this image is known. e.g. ["k8s.gcr.io/hyperkube:v1.0.7",
     * "dockerhub.io/google_containers/hyperkube:v1.0.7"]
     *
     * @return static
     */
    public function setNames(array $names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * The size of the image in bytes.
     */
    public function getSizeBytes(): ?int
    {
        return $this->sizeBytes;
    }

    /**
     * The size of the image in bytes.
     *
     * @return static
     */
    public function setSizeBytes(int $sizeBytes)
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }
}
