<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * NodeCondition contains condition information for a node.
 */
class NodeCondition
{
    /**
     * @Kubernetes\Attribute("lastHeartbeatTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastHeartbeatTime = null;

    /**
     * @Kubernetes\Attribute("lastTransitionTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastTransitionTime = null;

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
     * Last time we got an update on a given condition.
     */
    public function getLastHeartbeatTime(): ?DateTimeInterface
    {
        return $this->lastHeartbeatTime;
    }

    /**
     * Last time we got an update on a given condition.
     *
     * @return static
     */
    public function setLastHeartbeatTime(DateTimeInterface $lastHeartbeatTime)
    {
        $this->lastHeartbeatTime = $lastHeartbeatTime;

        return $this;
    }

    /**
     * Last time the condition transit from one status to another.
     */
    public function getLastTransitionTime(): ?DateTimeInterface
    {
        return $this->lastTransitionTime;
    }

    /**
     * Last time the condition transit from one status to another.
     *
     * @return static
     */
    public function setLastTransitionTime(DateTimeInterface $lastTransitionTime)
    {
        $this->lastTransitionTime = $lastTransitionTime;

        return $this;
    }

    /**
     * Human readable message indicating details about last transition.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Human readable message indicating details about last transition.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * (brief) reason for the condition's last transition.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * (brief) reason for the condition's last transition.
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
     * Type of node condition.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of node condition.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
