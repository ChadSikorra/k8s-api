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

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceSubresources defines the status and scale subresources for CustomResources.
 */
class CustomResourceSubresources
{
    /**
     * @Kubernetes\Attribute("scale",type="model",model=CustomResourceSubresourceScale::class)
     * @var CustomResourceSubresourceScale|null
     */
    protected $scale = null;

    /**
     * @Kubernetes\Attribute("status")
     * @var object|null
     */
    protected $status = null;

    /**
     * @param CustomResourceSubresourceScale|null $scale
     * @param object|null $status
     */
    public function __construct(?CustomResourceSubresourceScale $scale = null, $status = null)
    {
        $this->scale = $scale;
        $this->status = $status;
    }

    /**
     * Scale denotes the scale subresource for CustomResources
     */
    public function getScale(): ?CustomResourceSubresourceScale
    {
        return $this->scale;
    }

    /**
     * Scale denotes the scale subresource for CustomResources
     *
     * @return static
     */
    public function setScale(CustomResourceSubresourceScale $scale)
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Status denotes the status subresource for CustomResources
     *
     * @return object
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status denotes the status subresource for CustomResources
     *
     * @param object $status
     * @return static
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
