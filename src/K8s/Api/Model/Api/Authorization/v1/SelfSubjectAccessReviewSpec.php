<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * SelfSubjectAccessReviewSpec is a description of the access request.  Exactly one of
 * ResourceAuthorizationAttributes and NonResourceAuthorizationAttributes must be set
 */
class SelfSubjectAccessReviewSpec
{
    /**
     * @Kubernetes\Attribute("nonResourceAttributes",type="model",model=NonResourceAttributes::class)
     * @var NonResourceAttributes|null
     */
    protected $nonResourceAttributes = null;

    /**
     * @Kubernetes\Attribute("resourceAttributes",type="model",model=ResourceAttributes::class)
     * @var ResourceAttributes|null
     */
    protected $resourceAttributes = null;

    /**
     * @param NonResourceAttributes|null $nonResourceAttributes
     * @param ResourceAttributes|null $resourceAttributes
     */
    public function __construct(?NonResourceAttributes $nonResourceAttributes = null, ?ResourceAttributes $resourceAttributes = null)
    {
        $this->nonResourceAttributes = $nonResourceAttributes;
        $this->resourceAttributes = $resourceAttributes;
    }

    /**
     * NonResourceAttributes describes information for a non-resource access request
     */
    public function getNonResourceAttributes(): ?NonResourceAttributes
    {
        return $this->nonResourceAttributes;
    }

    /**
     * NonResourceAttributes describes information for a non-resource access request
     *
     * @return static
     */
    public function setNonResourceAttributes(NonResourceAttributes $nonResourceAttributes)
    {
        $this->nonResourceAttributes = $nonResourceAttributes;

        return $this;
    }

    /**
     * ResourceAuthorizationAttributes describes information for a resource access request
     */
    public function getResourceAttributes(): ?ResourceAttributes
    {
        return $this->resourceAttributes;
    }

    /**
     * ResourceAuthorizationAttributes describes information for a resource access request
     *
     * @return static
     */
    public function setResourceAttributes(ResourceAttributes $resourceAttributes)
    {
        $this->resourceAttributes = $resourceAttributes;

        return $this;
    }
}
