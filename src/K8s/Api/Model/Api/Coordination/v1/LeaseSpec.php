<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Coordination\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * LeaseSpec is a specification of a Lease.
 */
class LeaseSpec
{
    /**
     * @Kubernetes\Attribute("acquireTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $acquireTime = null;

    /**
     * @Kubernetes\Attribute("holderIdentity")
     * @var string|null
     */
    protected $holderIdentity = null;

    /**
     * @Kubernetes\Attribute("leaseDurationSeconds")
     * @var int|null
     */
    protected $leaseDurationSeconds = null;

    /**
     * @Kubernetes\Attribute("leaseTransitions")
     * @var int|null
     */
    protected $leaseTransitions = null;

    /**
     * @Kubernetes\Attribute("renewTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $renewTime = null;

    /**
     * @param DateTimeInterface|null $acquireTime
     * @param string|null $holderIdentity
     * @param int|null $leaseDurationSeconds
     * @param int|null $leaseTransitions
     * @param DateTimeInterface|null $renewTime
     */
    public function __construct(
        ?DateTimeInterface $acquireTime = null,
        ?string $holderIdentity = null,
        ?int $leaseDurationSeconds = null,
        ?int $leaseTransitions = null,
        ?DateTimeInterface $renewTime = null
    ) {
        $this->acquireTime = $acquireTime;
        $this->holderIdentity = $holderIdentity;
        $this->leaseDurationSeconds = $leaseDurationSeconds;
        $this->leaseTransitions = $leaseTransitions;
        $this->renewTime = $renewTime;
    }

    /**
     * acquireTime is a time when the current lease was acquired.
     */
    public function getAcquireTime(): ?DateTimeInterface
    {
        return $this->acquireTime;
    }

    /**
     * acquireTime is a time when the current lease was acquired.
     *
     * @return static
     */
    public function setAcquireTime(DateTimeInterface $acquireTime)
    {
        $this->acquireTime = $acquireTime;

        return $this;
    }

    /**
     * holderIdentity contains the identity of the holder of a current lease.
     */
    public function getHolderIdentity(): ?string
    {
        return $this->holderIdentity;
    }

    /**
     * holderIdentity contains the identity of the holder of a current lease.
     *
     * @return static
     */
    public function setHolderIdentity(string $holderIdentity)
    {
        $this->holderIdentity = $holderIdentity;

        return $this;
    }

    /**
     * leaseDurationSeconds is a duration that candidates for a lease need to wait to force acquire it.
     * This is measure against time of last observed RenewTime.
     */
    public function getLeaseDurationSeconds(): ?int
    {
        return $this->leaseDurationSeconds;
    }

    /**
     * leaseDurationSeconds is a duration that candidates for a lease need to wait to force acquire it.
     * This is measure against time of last observed RenewTime.
     *
     * @return static
     */
    public function setLeaseDurationSeconds(int $leaseDurationSeconds)
    {
        $this->leaseDurationSeconds = $leaseDurationSeconds;

        return $this;
    }

    /**
     * leaseTransitions is the number of transitions of a lease between holders.
     */
    public function getLeaseTransitions(): ?int
    {
        return $this->leaseTransitions;
    }

    /**
     * leaseTransitions is the number of transitions of a lease between holders.
     *
     * @return static
     */
    public function setLeaseTransitions(int $leaseTransitions)
    {
        $this->leaseTransitions = $leaseTransitions;

        return $this;
    }

    /**
     * renewTime is a time when the current holder of a lease has last updated the lease.
     */
    public function getRenewTime(): ?DateTimeInterface
    {
        return $this->renewTime;
    }

    /**
     * renewTime is a time when the current holder of a lease has last updated the lease.
     *
     * @return static
     */
    public function setRenewTime(DateTimeInterface $renewTime)
    {
        $this->renewTime = $renewTime;

        return $this;
    }
}
