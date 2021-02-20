<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.13.12
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
 * A null or empty node selector term matches no objects. The requirements of them are ANDed. The
 * TopologySelectorTerm type implements a subset of the NodeSelectorTerm.
 */
class NodeSelectorTerm
{
    /**
     * @Kubernetes\Attribute("matchExpressions",type="collection",model=NodeSelectorRequirement::class)
     * @var iterable|NodeSelectorRequirement[]|null
     */
    protected $matchExpressions = null;

    /**
     * @Kubernetes\Attribute("matchFields",type="collection",model=NodeSelectorRequirement::class)
     * @var iterable|NodeSelectorRequirement[]|null
     */
    protected $matchFields = null;

    /**
     * @param iterable|NodeSelectorRequirement[] $matchExpressions
     * @param iterable|NodeSelectorRequirement[] $matchFields
     */
    public function __construct(iterable $matchExpressions = [], iterable $matchFields = [])
    {
        $this->matchExpressions = new Collection($matchExpressions);
        $this->matchFields = new Collection($matchFields);
    }

    /**
     * A list of node selector requirements by node's labels.
     *
     * @return iterable|NodeSelectorRequirement[]
     */
    public function getMatchExpressions(): ?iterable
    {
        return $this->matchExpressions;
    }

    /**
     * A list of node selector requirements by node's labels.
     *
     * @return static
     */
    public function setMatchExpressions(iterable $matchExpressions)
    {
        $this->matchExpressions = $matchExpressions;

        return $this;
    }

    /**
     * @return static
     */
    public function addMatchExpressions(NodeSelectorRequirement $matchExpression)
    {
        if (!$this->matchExpressions) {
            $this->matchExpressions = new Collection();
        }
        $this->matchExpressions[] = $matchExpression;

        return $this;
    }

    /**
     * A list of node selector requirements by node's fields.
     *
     * @return iterable|NodeSelectorRequirement[]
     */
    public function getMatchFields(): ?iterable
    {
        return $this->matchFields;
    }

    /**
     * A list of node selector requirements by node's fields.
     *
     * @return static
     */
    public function setMatchFields(iterable $matchFields)
    {
        $this->matchFields = $matchFields;

        return $this;
    }

    /**
     * @return static
     */
    public function addMatchFields(NodeSelectorRequirement $matchField)
    {
        if (!$this->matchFields) {
            $this->matchFields = new Collection();
        }
        $this->matchFields[] = $matchField;

        return $this;
    }
}
