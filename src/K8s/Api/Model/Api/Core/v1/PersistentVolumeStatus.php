<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PersistentVolumeStatus is the current status of a persistent volume.
 */
class PersistentVolumeStatus
{
    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message;

    /**
     * @Kubernetes\Attribute("phase")
     * @var string|null
     */
    protected $phase;

    /**
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason;

    /**
     * @param string|null $message
     * @param string|null $phase
     * @param string|null $reason
     */
    public function __construct(?string $message = null, ?string $phase = null, ?string $reason = null)
    {
        $this->message = $message;
        $this->phase = $phase;
        $this->reason = $reason;
    }

    /**
     * A human-readable message indicating details about why the volume is in this state.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human-readable message indicating details about why the volume is in this state.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Phase indicates if a volume is available, bound to a claim, or released by a claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#phase
     */
    public function getPhase(): ?string
    {
        return $this->phase;
    }

    /**
     * Phase indicates if a volume is available, bound to a claim, or released by a claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#phase
     *
     * @return static
     */
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Reason is a brief CamelCase string that describes any failure and is meant for machine parsing and
     * tidy display in the CLI.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Reason is a brief CamelCase string that describes any failure and is meant for machine parsing and
     * tidy display in the CLI.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
