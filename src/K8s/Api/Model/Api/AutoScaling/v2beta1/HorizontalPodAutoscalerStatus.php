<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.18.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * HorizontalPodAutoscalerStatus describes the current status of a horizontal pod autoscaler.
 */
class HorizontalPodAutoscalerStatus
{
    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=HorizontalPodAutoscalerCondition::class,isRequired=true)
     * @var iterable|HorizontalPodAutoscalerCondition[]
     */
    protected $conditions;

    /**
     * @Kubernetes\Attribute("currentMetrics",type="collection",model=MetricStatus::class)
     * @var iterable|MetricStatus[]|null
     */
    protected $currentMetrics = null;

    /**
     * @Kubernetes\Attribute("currentReplicas",isRequired=true)
     * @var int
     */
    protected $currentReplicas;

    /**
     * @Kubernetes\Attribute("desiredReplicas",isRequired=true)
     * @var int
     */
    protected $desiredReplicas;

    /**
     * @Kubernetes\Attribute("lastScaleTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastScaleTime = null;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration = null;

    /**
     * @param iterable|HorizontalPodAutoscalerCondition[] $conditions
     * @param int $currentReplicas
     * @param int $desiredReplicas
     */
    public function __construct(iterable $conditions, int $currentReplicas, int $desiredReplicas)
    {
        $this->conditions = new Collection($conditions);
        $this->currentReplicas = $currentReplicas;
        $this->desiredReplicas = $desiredReplicas;
    }

    /**
     * conditions is the set of conditions required for this autoscaler to scale its target, and indicates
     * whether or not those conditions are met.
     *
     * @return iterable|HorizontalPodAutoscalerCondition[]
     */
    public function getConditions(): iterable
    {
        return $this->conditions;
    }

    /**
     * conditions is the set of conditions required for this autoscaler to scale its target, and indicates
     * whether or not those conditions are met.
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
    public function addConditions(HorizontalPodAutoscalerCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * currentMetrics is the last read state of the metrics used by this autoscaler.
     *
     * @return iterable|MetricStatus[]
     */
    public function getCurrentMetrics(): ?iterable
    {
        return $this->currentMetrics;
    }

    /**
     * currentMetrics is the last read state of the metrics used by this autoscaler.
     *
     * @return static
     */
    public function setCurrentMetrics(iterable $currentMetrics)
    {
        $this->currentMetrics = $currentMetrics;

        return $this;
    }

    /**
     * @return static
     */
    public function addCurrentMetrics(MetricStatus $currentMetric)
    {
        if (!$this->currentMetrics) {
            $this->currentMetrics = new Collection();
        }
        $this->currentMetrics[] = $currentMetric;

        return $this;
    }

    /**
     * currentReplicas is current number of replicas of pods managed by this autoscaler, as last seen by
     * the autoscaler.
     */
    public function getCurrentReplicas(): int
    {
        return $this->currentReplicas;
    }

    /**
     * currentReplicas is current number of replicas of pods managed by this autoscaler, as last seen by
     * the autoscaler.
     *
     * @return static
     */
    public function setCurrentReplicas(int $currentReplicas)
    {
        $this->currentReplicas = $currentReplicas;

        return $this;
    }

    /**
     * desiredReplicas is the desired number of replicas of pods managed by this autoscaler, as last
     * calculated by the autoscaler.
     */
    public function getDesiredReplicas(): int
    {
        return $this->desiredReplicas;
    }

    /**
     * desiredReplicas is the desired number of replicas of pods managed by this autoscaler, as last
     * calculated by the autoscaler.
     *
     * @return static
     */
    public function setDesiredReplicas(int $desiredReplicas)
    {
        $this->desiredReplicas = $desiredReplicas;

        return $this;
    }

    /**
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of pods, used by the
     * autoscaler to control how often the number of pods is changed.
     */
    public function getLastScaleTime(): ?DateTimeInterface
    {
        return $this->lastScaleTime;
    }

    /**
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of pods, used by the
     * autoscaler to control how often the number of pods is changed.
     *
     * @return static
     */
    public function setLastScaleTime(DateTimeInterface $lastScaleTime)
    {
        $this->lastScaleTime = $lastScaleTime;

        return $this;
    }

    /**
     * observedGeneration is the most recent generation observed by this autoscaler.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * observedGeneration is the most recent generation observed by this autoscaler.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }
}
