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

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * QueuingConfiguration holds the configuration parameters for queuing
 */
class QueuingConfiguration
{
    /**
     * @Kubernetes\Attribute("handSize")
     * @var int|null
     */
    protected $handSize = null;

    /**
     * @Kubernetes\Attribute("queueLengthLimit")
     * @var int|null
     */
    protected $queueLengthLimit = null;

    /**
     * @Kubernetes\Attribute("queues")
     * @var int|null
     */
    protected $queues = null;

    /**
     * @param int|null $handSize
     * @param int|null $queueLengthLimit
     * @param int|null $queues
     */
    public function __construct(?int $handSize = null, ?int $queueLengthLimit = null, ?int $queues = null)
    {
        $this->handSize = $handSize;
        $this->queueLengthLimit = $queueLengthLimit;
        $this->queues = $queues;
    }

    /**
     * `handSize` is a small positive number that configures the shuffle sharding of requests into queues.
     * When enqueuing a request at this priority level the request's flow identifier (a string pair) is
     * hashed and the hash value is used to shuffle the list of queues and deal a hand of the size
     * specified here.  The request is put into one of the shortest queues in that hand. `handSize` must be
     * no larger than `queues`, and should be significantly smaller (so that a few heavy flows do not
     * saturate most of the queues).  See the user-facing documentation for more extensive guidance on
     * setting this field.  This field has a default value of 8.
     */
    public function getHandSize(): ?int
    {
        return $this->handSize;
    }

    /**
     * `handSize` is a small positive number that configures the shuffle sharding of requests into queues.
     * When enqueuing a request at this priority level the request's flow identifier (a string pair) is
     * hashed and the hash value is used to shuffle the list of queues and deal a hand of the size
     * specified here.  The request is put into one of the shortest queues in that hand. `handSize` must be
     * no larger than `queues`, and should be significantly smaller (so that a few heavy flows do not
     * saturate most of the queues).  See the user-facing documentation for more extensive guidance on
     * setting this field.  This field has a default value of 8.
     *
     * @return static
     */
    public function setHandSize(int $handSize)
    {
        $this->handSize = $handSize;

        return $this;
    }

    /**
     * `queueLengthLimit` is the maximum number of requests allowed to be waiting in a given queue of this
     * priority level at a time; excess requests are rejected.  This value must be positive.  If not
     * specified, it will be defaulted to 50.
     */
    public function getQueueLengthLimit(): ?int
    {
        return $this->queueLengthLimit;
    }

    /**
     * `queueLengthLimit` is the maximum number of requests allowed to be waiting in a given queue of this
     * priority level at a time; excess requests are rejected.  This value must be positive.  If not
     * specified, it will be defaulted to 50.
     *
     * @return static
     */
    public function setQueueLengthLimit(int $queueLengthLimit)
    {
        $this->queueLengthLimit = $queueLengthLimit;

        return $this;
    }

    /**
     * `queues` is the number of queues for this priority level. The queues exist independently at each
     * apiserver. The value must be positive.  Setting it to 1 effectively precludes shufflesharding and
     * thus makes the distinguisher method of associated flow schemas irrelevant.  This field has a default
     * value of 64.
     */
    public function getQueues(): ?int
    {
        return $this->queues;
    }

    /**
     * `queues` is the number of queues for this priority level. The queues exist independently at each
     * apiserver. The value must be positive.  Setting it to 1 effectively precludes shufflesharding and
     * thus makes the distinguisher method of associated flow schemas irrelevant.  This field has a default
     * value of 64.
     *
     * @return static
     */
    public function setQueues(int $queues)
    {
        $this->queues = $queues;

        return $this;
    }
}
