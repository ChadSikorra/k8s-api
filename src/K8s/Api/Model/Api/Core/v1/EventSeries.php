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

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * EventSeries contain information on series of events, i.e. thing that was/is happening continuously
 * for some time.
 */
class EventSeries
{
    /**
     * @Kubernetes\Attribute("count")
     * @var int|null
     */
    protected $count = null;

    /**
     * @Kubernetes\Attribute("lastObservedTime",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $lastObservedTime = null;

    /**
     * @Kubernetes\Attribute("state")
     * @var string|null
     */
    protected $state = null;

    /**
     * @param int|null $count
     * @param DateTimeInterface|null $lastObservedTime
     * @param string|null $state
     */
    public function __construct(?int $count = null, ?DateTimeInterface $lastObservedTime = null, ?string $state = null)
    {
        $this->count = $count;
        $this->lastObservedTime = $lastObservedTime;
        $this->state = $state;
    }

    /**
     * Number of occurrences in this series up to the last heartbeat time
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Number of occurrences in this series up to the last heartbeat time
     *
     * @return static
     */
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Time of the last occurrence observed
     */
    public function getLastObservedTime(): ?DateTimeInterface
    {
        return $this->lastObservedTime;
    }

    /**
     * Time of the last occurrence observed
     *
     * @return static
     */
    public function setLastObservedTime(DateTimeInterface $lastObservedTime)
    {
        $this->lastObservedTime = $lastObservedTime;

        return $this;
    }

    /**
     * State of this Series: Ongoing or Finished
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * State of this Series: Ongoing or Finished
     *
     * @return static
     */
    public function setState(string $state)
    {
        $this->state = $state;

        return $this;
    }
}
