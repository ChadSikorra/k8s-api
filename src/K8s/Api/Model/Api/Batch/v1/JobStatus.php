<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * JobStatus represents the current state of a Job.
 */
class JobStatus
{
    /**
     * @Kubernetes\Attribute("active")
     * @var int|null
     */
    protected $active = null;

    /**
     * @Kubernetes\Attribute("completionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $completionTime = null;

    /**
     * @Kubernetes\Attribute("conditions",type="collection",model=JobCondition::class)
     * @var iterable|JobCondition[]|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("failed")
     * @var int|null
     */
    protected $failed = null;

    /**
     * @Kubernetes\Attribute("startTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $startTime = null;

    /**
     * @Kubernetes\Attribute("succeeded")
     * @var int|null
     */
    protected $succeeded = null;

    /**
     * The number of actively running pods.
     */
    public function getActive(): ?int
    {
        return $this->active;
    }

    /**
     * The number of actively running pods.
     *
     * @return static
     */
    public function setActive(int $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in happens-before order
     * across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public function getCompletionTime(): ?DateTimeInterface
    {
        return $this->completionTime;
    }

    /**
     * Represents time when the job was completed. It is not guaranteed to be set in happens-before order
     * across separate operations. It is represented in RFC3339 form and is in UTC.
     *
     * @return static
     */
    public function setCompletionTime(DateTimeInterface $completionTime)
    {
        $this->completionTime = $completionTime;

        return $this;
    }

    /**
     * The latest available observations of an object's current state. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
     *
     * @return iterable|JobCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->conditions;
    }

    /**
     * The latest available observations of an object's current state. More info:
     * https://kubernetes.io/docs/concepts/workloads/controllers/jobs-run-to-completion/
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
    public function addConditions(JobCondition $condition)
    {
        if (!$this->conditions) {
            $this->conditions = new Collection();
        }
        $this->conditions[] = $condition;

        return $this;
    }

    /**
     * The number of pods which reached phase Failed.
     */
    public function getFailed(): ?int
    {
        return $this->failed;
    }

    /**
     * The number of pods which reached phase Failed.
     *
     * @return static
     */
    public function setFailed(int $failed)
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * Represents time when the job was acknowledged by the job controller. It is not guaranteed to be set
     * in happens-before order across separate operations. It is represented in RFC3339 form and is in UTC.
     */
    public function getStartTime(): ?DateTimeInterface
    {
        return $this->startTime;
    }

    /**
     * Represents time when the job was acknowledged by the job controller. It is not guaranteed to be set
     * in happens-before order across separate operations. It is represented in RFC3339 form and is in UTC.
     *
     * @return static
     */
    public function setStartTime(DateTimeInterface $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * The number of pods which reached phase Succeeded.
     */
    public function getSucceeded(): ?int
    {
        return $this->succeeded;
    }

    /**
     * The number of pods which reached phase Succeeded.
     *
     * @return static
     */
    public function setSucceeded(int $succeeded)
    {
        $this->succeeded = $succeeded;

        return $this;
    }
}
