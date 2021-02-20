<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1beta2;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * DeploymentStatus is the most recently observed status of the Deployment.
 */
class DeploymentStatus
{
    /**
     * @Kubernetes\Attribute("availableReplicas")
     * @var int|null
     */
    protected $availableReplicas = null;

    /**
     * @Kubernetes\Attribute("collisionCount")
     * @var int|null
     */
    protected $collisionCount = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=DeploymentCondition::class)
     * @var iterable|DeploymentCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration = null;

    /**
     * @Kubernetes\Attribute("readyReplicas")
     * @var int|null
     */
    protected $readyReplicas = null;

    /**
     * @Kubernetes\Attribute("replicas")
     * @var int|null
     */
    protected $replicas = null;

    /**
     * @Kubernetes\Attribute("unavailableReplicas")
     * @var int|null
     */
    protected $unavailableReplicas = null;

    /**
     * @Kubernetes\Attribute("updatedReplicas")
     * @var int|null
     */
    protected $updatedReplicas = null;

    /**
     * Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     */
    public function getAvailableReplicas(): ?int
    {
        return $this->availableReplicas;
    }

    /**
     * Total number of available pods (ready for at least minReadySeconds) targeted by this deployment.
     *
     * @return static
     */
    public function setAvailableReplicas(int $availableReplicas)
    {
        $this->availableReplicas = $availableReplicas;

        return $this;
    }

    /**
     * Count of hash collisions for the Deployment. The Deployment controller uses this field as a
     * collision avoidance mechanism when it needs to create the name for the newest ReplicaSet.
     */
    public function getCollisionCount(): ?int
    {
        return $this->collisionCount;
    }

    /**
     * Count of hash collisions for the Deployment. The Deployment controller uses this field as a
     * collision avoidance mechanism when it needs to create the name for the newest ReplicaSet.
     *
     * @return static
     */
    public function setCollisionCount(int $collisionCount)
    {
        $this->collisionCount = $collisionCount;

        return $this;
    }

    /**
     * Represents the latest available observations of a deployment's current state.
     *
     * @return iterable|DeploymentCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Represents the latest available observations of a deployment's current state.
     *
     * @return static
     */
    public function setConditions(iterable $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return static
     */
    public function addConditions(DeploymentCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The generation observed by the deployment controller.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * The generation observed by the deployment controller.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }

    /**
     * Total number of ready pods targeted by this deployment.
     */
    public function getReadyReplicas(): ?int
    {
        return $this->readyReplicas;
    }

    /**
     * Total number of ready pods targeted by this deployment.
     *
     * @return static
     */
    public function setReadyReplicas(int $readyReplicas)
    {
        $this->readyReplicas = $readyReplicas;

        return $this;
    }

    /**
     * Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     */
    public function getReplicas(): ?int
    {
        return $this->replicas;
    }

    /**
     * Total number of non-terminated pods targeted by this deployment (their labels match the selector).
     *
     * @return static
     */
    public function setReplicas(int $replicas)
    {
        $this->replicas = $replicas;

        return $this;
    }

    /**
     * Total number of unavailable pods targeted by this deployment. This is the total number of pods that
     * are still required for the deployment to have 100% available capacity. They may either be pods that
     * are running but not yet available or pods that still have not been created.
     */
    public function getUnavailableReplicas(): ?int
    {
        return $this->unavailableReplicas;
    }

    /**
     * Total number of unavailable pods targeted by this deployment. This is the total number of pods that
     * are still required for the deployment to have 100% available capacity. They may either be pods that
     * are running but not yet available or pods that still have not been created.
     *
     * @return static
     */
    public function setUnavailableReplicas(int $unavailableReplicas)
    {
        $this->unavailableReplicas = $unavailableReplicas;

        return $this;
    }

    /**
     * Total number of non-terminated pods targeted by this deployment that have the desired template spec.
     */
    public function getUpdatedReplicas(): ?int
    {
        return $this->updatedReplicas;
    }

    /**
     * Total number of non-terminated pods targeted by this deployment that have the desired template spec.
     *
     * @return static
     */
    public function setUpdatedReplicas(int $updatedReplicas)
    {
        $this->updatedReplicas = $updatedReplicas;

        return $this;
    }
}
