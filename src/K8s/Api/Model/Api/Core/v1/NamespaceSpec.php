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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * NamespaceSpec describes the attributes on a Namespace.
 */
class NamespaceSpec
{
    /**
     * @Kubernetes\Attribute("finalizers")
     * @var string[]|null
     */
    protected $finalizers = null;

    /**
     * @param string[]|null $finalizers
     */
    public function __construct(?array $finalizers = null)
    {
        $this->finalizers = $finalizers;
    }

    /**
     * Finalizers is an opaque list of values that must be empty to permanently remove object from storage.
     * More info: https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     */
    public function getFinalizers(): ?array
    {
        return $this->finalizers;
    }

    /**
     * Finalizers is an opaque list of values that must be empty to permanently remove object from storage.
     * More info: https://kubernetes.io/docs/tasks/administer-cluster/namespaces/
     *
     * @return static
     */
    public function setFinalizers(array $finalizers)
    {
        $this->finalizers = $finalizers;

        return $this;
    }
}
