<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Authorization\v1;

use K8s\Core\Annotation as Kubernetes;

class SelfSubjectRulesReviewSpec
{
    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace;

    /**
     * @param string|null $namespace
     */
    public function __construct(?string $namespace = null)
    {
        $this->namespace = $namespace;
    }

    /**
     * Namespace to evaluate rules for. Required.
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace to evaluate rules for. Required.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}
