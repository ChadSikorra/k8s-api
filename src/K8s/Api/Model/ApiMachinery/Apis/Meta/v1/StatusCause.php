<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * StatusCause provides more information about an api.Status failure, including cases when multiple
 * errors are encountered.
 */
class StatusCause
{
    /**
     * @Kubernetes\Attribute("field")
     * @var string|null
     */
    protected $field = null;

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
     * @param string|null $field
     * @param string|null $message
     * @param string|null $reason
     */
    public function __construct(?string $field = null, ?string $message = null, ?string $reason = null)
    {
        $this->field = $field;
        $this->message = $message;
        $this->reason = $reason;
    }

    /**
     * The field of the resource that has caused this error, as named by its JSON serialization. May
     * include dot and postfix notation for nested attributes. Arrays are zero-indexed.  Fields may appear
     * more than once in an array of causes due to fields having multiple errors. Optional.
     *
     * Examples:
     *   "name" - the field "name" on the current resource
     *   "items[0].name" - the field "name" on the first array entry in "items"
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * The field of the resource that has caused this error, as named by its JSON serialization. May
     * include dot and postfix notation for nested attributes. Arrays are zero-indexed.  Fields may appear
     * more than once in an array of causes due to fields having multiple errors. Optional.
     *
     * Examples:
     *   "name" - the field "name" on the current resource
     *   "items[0].name" - the field "name" on the first array entry in "items"
     *
     * @return static
     */
    public function setField(string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * A human-readable description of the cause of the error.  This field may be presented as-is to a
     * reader.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human-readable description of the cause of the error.  This field may be presented as-is to a
     * reader.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * A machine-readable description of the cause of the error. If this value is empty there is no
     * information available.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * A machine-readable description of the cause of the error. If this value is empty there is no
     * information available.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
