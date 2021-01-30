<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.11.10
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
 * A node selector represents the union of the results of one or more label queries over a set of
 * nodes; that is, it represents the OR of the selectors represented by the node selector terms.
 */
class NodeSelector
{
    /**
     * @Kubernetes\Attribute("nodeSelectorTerms",type="collection",model=NodeSelectorTerm::class,isRequired=true)
     * @var iterable|NodeSelectorTerm[]
     */
    protected $nodeSelectorTerms;

    /**
     * @param iterable|NodeSelectorTerm[] $nodeSelectorTerms
     */
    public function __construct(iterable $nodeSelectorTerms)
    {
        $this->nodeSelectorTerms = new Collection($nodeSelectorTerms);
    }

    /**
     * Required. A list of node selector terms. The terms are ORed.
     *
     * @return iterable|NodeSelectorTerm[]
     */
    public function getNodeSelectorTerms(): iterable
    {
        return $this->nodeSelectorTerms;
    }

    /**
     * Required. A list of node selector terms. The terms are ORed.
     *
     * @return static
     */
    public function setNodeSelectorTerms(iterable $nodeSelectorTerms)
    {
        $this->nodeSelectorTerms = $nodeSelectorTerms;

        return $this;
    }

    /**
     * @return static
     */
    public function addNodeSelectorTerms(NodeSelectorTerm $nodeSelectorTerm)
    {
        if (!$this->nodeSelectorTerms) {
            $this->nodeSelectorTerms = new Collection();
        }
        $this->nodeSelectorTerms[] = $nodeSelectorTerm;

        return $this;
    }
}
