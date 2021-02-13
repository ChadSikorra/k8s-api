<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Node\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Overhead structure represents the resource overhead associated with running a pod.
 */
class Overhead
{
    /**
     * @Kubernetes\Attribute("podFixed")
     * @var object[]|null
     */
    protected $podFixed = null;

    /**
     * @param object[]|null $podFixed
     */
    public function __construct(?array $podFixed = null)
    {
        $this->podFixed = $podFixed;
    }

    /**
     * PodFixed represents the fixed resource overhead associated with running a pod.
     */
    public function getPodFixed(): ?array
    {
        return $this->podFixed;
    }

    /**
     * PodFixed represents the fixed resource overhead associated with running a pod.
     *
     * @return static
     */
    public function setPodFixed(array $podFixed)
    {
        $this->podFixed = $podFixed;

        return $this;
    }
}
