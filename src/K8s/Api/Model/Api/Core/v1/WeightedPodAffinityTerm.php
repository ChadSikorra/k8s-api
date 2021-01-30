<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.20.2
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
 * The weights of all of the matched WeightedPodAffinityTerm fields are added per-node to find the most
 * preferred node(s)
 */
class WeightedPodAffinityTerm
{
    /**
     * @Kubernetes\Attribute("podAffinityTerm",type="model",model=PodAffinityTerm::class,isRequired=true)
     * @var PodAffinityTerm
     */
    protected $podAffinityTerm;

    /**
     * @Kubernetes\Attribute("weight",isRequired=true)
     * @var int
     */
    protected $weight;

    /**
     * @param PodAffinityTerm $podAffinityTerm
     * @param int $weight
     */
    public function __construct(PodAffinityTerm $podAffinityTerm, int $weight)
    {
        $this->podAffinityTerm = $podAffinityTerm;
        $this->weight = $weight;
    }

    /**
     * Required. A pod affinity term, associated with the corresponding weight.
     */
    public function getPodAffinityTerm(): PodAffinityTerm
    {
        return $this->podAffinityTerm;
    }

    /**
     * Required. A pod affinity term, associated with the corresponding weight.
     *
     * @return static
     */
    public function setPodAffinityTerm(PodAffinityTerm $podAffinityTerm)
    {
        $this->podAffinityTerm = $podAffinityTerm;

        return $this;
    }

    /**
     * weight associated with matching the corresponding podAffinityTerm, in the range 1-100.
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * weight associated with matching the corresponding podAffinityTerm, in the range 1-100.
     *
     * @return static
     */
    public function setWeight(int $weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
