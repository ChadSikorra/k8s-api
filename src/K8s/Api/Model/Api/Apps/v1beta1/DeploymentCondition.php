<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Apps\v1beta1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * DeploymentCondition describes the state of a deployment at a certain point.
 */
class DeploymentCondition
{
    /**
     * @Kubernetes\Attribute("lastTransitionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastTransitionTime = null;

    /**
     * @Kubernetes\Attribute("lastUpdateTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastUpdateTime = null;

    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

    /**
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason = null;

    /**
     * @Kubernetes\Attribute("status",isRequired=true)
     * @var string
     */
    protected $status;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $status
     * @param string $type
     */
    public function __construct(string $status, string $type)
    {
        $this->status = $status;
        $this->type = $type;
    }

    /**
     * Last time the condition transitioned from one status to another.
     */
    public function getLastTransitionTime(): ?DateTimeInterface
    {
        return $this->lastTransitionTime;
    }

    /**
     * Last time the condition transitioned from one status to another.
     *
     * @return static
     */
    public function setLastTransitionTime(DateTimeInterface $lastTransitionTime)
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    /**
     * The last time this condition was updated.
     */
    public function getLastUpdateTime(): ?DateTimeInterface
    {
        return $this->lastUpdateTime;
    }

    /**
     * The last time this condition was updated.
     *
     * @return static
     */
    public function setLastUpdateTime(DateTimeInterface $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * A human readable message indicating details about the transition.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human readable message indicating details about the transition.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * The reason for the condition's last transition.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * The reason for the condition's last transition.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Status of the condition, one of True, False, Unknown.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Type of deployment condition.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of deployment condition.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
