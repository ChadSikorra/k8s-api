<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * Node affinity is a group of node affinity scheduling rules.
 */
class NodeAffinity
{
    /**
     * @Kubernetes\Attribute("preferredDuringSchedulingIgnoredDuringExecution",type="collection",model=PreferredSchedulingTerm::class)
     * @var iterable|PreferredSchedulingTerm[]|null
     */
    protected $preferredDuringSchedulingIgnoredDuringExecution = null;

    /**
     * @Kubernetes\Attribute("requiredDuringSchedulingIgnoredDuringExecution",type="model",model=NodeSelector::class)
     * @var NodeSelector|null
     */
    protected $requiredDuringSchedulingIgnoredDuringExecution = null;

    /**
     * @param iterable|PreferredSchedulingTerm[] $preferredDuringSchedulingIgnoredDuringExecution
     * @param NodeSelector|null $requiredDuringSchedulingIgnoredDuringExecution
     */
    public function __construct(
        iterable $preferredDuringSchedulingIgnoredDuringExecution = [],
        ?NodeSelector $requiredDuringSchedulingIgnoredDuringExecution = null
    ) {
        $this->preferredDuringSchedulingIgnoredDuringExecution = new Collection($preferredDuringSchedulingIgnoredDuringExecution);
        $this->requiredDuringSchedulingIgnoredDuringExecution = $requiredDuringSchedulingIgnoredDuringExecution;
    }

    /**
     * The scheduler will prefer to schedule pods to nodes that satisfy the affinity expressions specified
     * by this field, but it may choose a node that violates one or more of the expressions. The node that
     * is most preferred is the one with the greatest sum of weights, i.e. for each node that meets all of
     * the scheduling requirements (resource request, requiredDuringScheduling affinity expressions, etc.),
     * compute a sum by iterating through the elements of this field and adding "weight" to the sum if the
     * node matches the corresponding matchExpressions; the node(s) with the highest sum are the most
     * preferred.
     *
     * @return iterable|PreferredSchedulingTerm[]
     */
    public function getPreferredDuringSchedulingIgnoredDuringExecution(): ?iterable
    {
        return $this->preferredDuringSchedulingIgnoredDuringExecution;
    }

    /**
     * The scheduler will prefer to schedule pods to nodes that satisfy the affinity expressions specified
     * by this field, but it may choose a node that violates one or more of the expressions. The node that
     * is most preferred is the one with the greatest sum of weights, i.e. for each node that meets all of
     * the scheduling requirements (resource request, requiredDuringScheduling affinity expressions, etc.),
     * compute a sum by iterating through the elements of this field and adding "weight" to the sum if the
     * node matches the corresponding matchExpressions; the node(s) with the highest sum are the most
     * preferred.
     *
     * @return static
     */
    public function setPreferredDuringSchedulingIgnoredDuringExecution(iterable $preferredDuringSchedulingIgnoredDuringExecution)
    {
        $this->preferredDuringSchedulingIgnoredDuringExecution = $preferredDuringSchedulingIgnoredDuringExecution;

        return $this;
    }

    /**
     * @return static
     */
    public function addPreferredDuringSchedulingIgnoredDuringExecution(PreferredSchedulingTerm $preferredDuringSchedulingIgnoredDuringExecution)
    {
        if (!$this->preferredDuringSchedulingIgnoredDuringExecution) {
            $this->preferredDuringSchedulingIgnoredDuringExecution = new Collection();
        }
        $this->preferredDuringSchedulingIgnoredDuringExecution[] = $preferredDuringSchedulingIgnoredDuringExecution;

        return $this;
    }

    /**
     * If the affinity requirements specified by this field are not met at scheduling time, the pod will
     * not be scheduled onto the node. If the affinity requirements specified by this field cease to be met
     * at some point during pod execution (e.g. due to an update), the system may or may not try to
     * eventually evict the pod from its node.
     */
    public function getRequiredDuringSchedulingIgnoredDuringExecution(): ?NodeSelector
    {
        return $this->requiredDuringSchedulingIgnoredDuringExecution;
    }

    /**
     * If the affinity requirements specified by this field are not met at scheduling time, the pod will
     * not be scheduled onto the node. If the affinity requirements specified by this field cease to be met
     * at some point during pod execution (e.g. due to an update), the system may or may not try to
     * eventually evict the pod from its node.
     *
     * @return static
     */
    public function setRequiredDuringSchedulingIgnoredDuringExecution(NodeSelector $requiredDuringSchedulingIgnoredDuringExecution)
    {
        $this->requiredDuringSchedulingIgnoredDuringExecution = $requiredDuringSchedulingIgnoredDuringExecution;

        return $this;
    }
}
