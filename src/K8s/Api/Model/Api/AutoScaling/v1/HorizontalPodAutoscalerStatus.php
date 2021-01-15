<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * current status of a horizontal pod autoscaler
 */
class HorizontalPodAutoscalerStatus
{
    /**
     * @Kubernetes\Attribute("currentCPUUtilizationPercentage")
     * @var int|null
     */
    protected $currentCPUUtilizationPercentage;

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
    protected $lastScaleTime;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration;

    /**
     * @param int $currentReplicas
     * @param int $desiredReplicas
     */
    public function __construct(int $currentReplicas, int $desiredReplicas)
    {
        $this->currentReplicas = $currentReplicas;
        $this->desiredReplicas = $desiredReplicas;
    }

    /**
     * current average CPU utilization over all pods, represented as a percentage of requested CPU, e.g. 70
     * means that an average pod is using now 70% of its requested CPU.
     */
    public function getCurrentCPUUtilizationPercentage(): ?int
    {
        return $this->currentCPUUtilizationPercentage;
    }

    /**
     * current average CPU utilization over all pods, represented as a percentage of requested CPU, e.g. 70
     * means that an average pod is using now 70% of its requested CPU.
     *
     * @return static
     */
    public function setCurrentCPUUtilizationPercentage(int $currentCPUUtilizationPercentage)
    {
        $this->currentCPUUtilizationPercentage = $currentCPUUtilizationPercentage;

        return $this;
    }

    /**
     * current number of replicas of pods managed by this autoscaler.
     */
    public function getCurrentReplicas(): int
    {
        return $this->currentReplicas;
    }

    /**
     * current number of replicas of pods managed by this autoscaler.
     *
     * @return static
     */
    public function setCurrentReplicas(int $currentReplicas)
    {
        $this->currentReplicas = $currentReplicas;

        return $this;
    }

    /**
     * desired number of replicas of pods managed by this autoscaler.
     */
    public function getDesiredReplicas(): int
    {
        return $this->desiredReplicas;
    }

    /**
     * desired number of replicas of pods managed by this autoscaler.
     *
     * @return static
     */
    public function setDesiredReplicas(int $desiredReplicas)
    {
        $this->desiredReplicas = $desiredReplicas;

        return $this;
    }

    /**
     * last time the HorizontalPodAutoscaler scaled the number of pods; used by the autoscaler to control
     * how often the number of pods is changed.
     */
    public function getLastScaleTime(): ?DateTimeInterface
    {
        return $this->lastScaleTime;
    }

    /**
     * last time the HorizontalPodAutoscaler scaled the number of pods; used by the autoscaler to control
     * how often the number of pods is changed.
     *
     * @return static
     */
    public function setLastScaleTime(DateTimeInterface $lastScaleTime)
    {
        $this->lastScaleTime = $lastScaleTime;

        return $this;
    }

    /**
     * most recent generation observed by this autoscaler.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * most recent generation observed by this autoscaler.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }
}
