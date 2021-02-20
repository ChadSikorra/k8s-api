<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1beta1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * VolumeError captures an error encountered during a volume operation.
 */
class VolumeError
{
    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

    /**
     * @Kubernetes\Attribute("time",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $time = null;

    /**
     * @param string|null $message
     * @param DateTimeInterface|null $time
     */
    public function __construct(?string $message = null, ?DateTimeInterface $time = null)
    {
        $this->message = $message;
        $this->time = $time;
    }

    /**
     * String detailing the error encountered during Attach or Detach operation. This string may be logged,
     * so it should not contain sensitive information.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * String detailing the error encountered during Attach or Detach operation. This string may be logged,
     * so it should not contain sensitive information.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Time the error was encountered.
     */
    public function getTime(): ?DateTimeInterface
    {
        return $this->time;
    }

    /**
     * Time the error was encountered.
     *
     * @return static
     */
    public function setTime(DateTimeInterface $time)
    {
        $this->time = $time;

        return $this;
    }
}
