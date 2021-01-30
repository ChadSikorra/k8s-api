<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1beta1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

class CertificateSigningRequestCondition
{
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
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * timestamp for the last update to this condition
     */
    public function getLastUpdateTime(): ?DateTimeInterface
    {
        return $this->lastUpdateTime;
    }

    /**
     * timestamp for the last update to this condition
     *
     * @return static
     */
    public function setLastUpdateTime(DateTimeInterface $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;

        return $this;
    }

    /**
     * human readable message with details about the request state
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * human readable message with details about the request state
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * brief reason for the request state
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * brief reason for the request state
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * request approval state, currently Approved or Denied.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * request approval state, currently Approved or Denied.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
