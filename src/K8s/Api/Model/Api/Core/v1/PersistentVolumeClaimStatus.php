<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.20.2
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
 * PersistentVolumeClaimStatus is the current status of a persistent volume claim.
 */
class PersistentVolumeClaimStatus
{
    /**
     * @Kubernetes\Attribute("accessModes")
     * @var string[]|null
     */
    protected $accessModes = null;

    /**
     * @Kubernetes\Attribute("capacity")
     * @var object[]|null
     */
    protected $capacity = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=PersistentVolumeClaimCondition::class)
     * @var iterable|PersistentVolumeClaimCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase = null;

    /**
     * @param string[]|null $accessModes
     * @param object[]|null $capacity
     * @param iterable|PersistentVolumeClaimCondition[] $conditions
     * @param string|null $phase
     */
    public function __construct(?array $accessModes = null, ?array $capacity = null, iterable $conditions = [], ?string $phase = null)
    {
        $this->accessModes = $accessModes;
        $this->capacity = $capacity;
        $this->conditions = new Collection($conditions);
        $this->phase = $phase;
    }

    /**
     * AccessModes contains the actual access modes the volume backing the PVC has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     */
    public function getAccessModes(): ?array
    {
        return $this->accessModes;
    }

    /**
     * AccessModes contains the actual access modes the volume backing the PVC has. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @return static
     */
    public function setAccessModes(array $accessModes)
    {
        $this->accessModes = $accessModes;

        return $this;
    }

    /**
     * Represents the actual resources of the underlying volume.
     */
    public function getCapacity(): ?array
    {
        return $this->capacity;
    }

    /**
     * Represents the actual resources of the underlying volume.
     *
     * @return static
     */
    public function setCapacity(array $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Current Condition of persistent volume claim. If underlying persistent volume is being resized then
     * the Condition will be set to 'ResizeStarted'.
     *
     * @return iterable|PersistentVolumeClaimCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * Current Condition of persistent volume claim. If underlying persistent volume is being resized then
     * the Condition will be set to 'ResizeStarted'.
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
    public function addConditions(PersistentVolumeClaimCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * Phase represents the current phase of PersistentVolumeClaim.
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * Phase represents the current phase of PersistentVolumeClaim.
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }
}
