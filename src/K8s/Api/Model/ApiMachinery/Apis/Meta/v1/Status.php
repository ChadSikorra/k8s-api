<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.14.10
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
 * Status is a return value for calls that don't return other objects.
 *
 * @Kubernetes\Kind("Status",version="v1")
 * @Kubernetes\Operation("post",path="/apis/apps/v1beta1/namespaces/{namespace}/deployments/{name}/rollback",body="model",response="static::class")
 */
class Status
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("code")
     * @var int|null
     */
    protected $code = null;

    /**
     * @Kubernetes\Attribute("details",type="model",model=StatusDetails::class)
     * @var StatusDetails|null
     */
    protected $details = null;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'Status';

    /**
     * @Kubernetes\Attribute("message")
     * @var string|null
     */
    protected $message = null;

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ListMeta::class)
     * @var ListMeta|null
     */
    protected $metadata = null;

    /**
     * @Kubernetes\Attribute("reason")
     * @var string|null
     */
    protected $reason = null;

    /**
     * @Kubernetes\Attribute("status")
     * @var string|null
     */
    protected $status = null;

    public function __construct()
    {
    }

    /**
     * continue may be set if the user set a limit on the number of items returned, and indicates that the
     * server has more data available. The value is opaque and may be used to issue another request to the
     * endpoint that served this list to retrieve the next set of available objects. Continuing a
     * consistent list may not be possible if the server configuration has changed or more than a few
     * minutes have passed. The resourceVersion field returned when using this continue value will be
     * identical to the value in the first response, unless you have received this token from an error
     * message.
     */
    public function getContinue(): ?string
    {
        return $this->metadata->getContinue();
    }

    /**
     * String that identifies the server's internal version of this object that can be used by clients to
     * determine when objects have changed. Value must be treated as opaque by clients and passed
     * unmodified back to the server. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * selfLink is a URL representing this object. Populated by the system. Read-only.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Suggested HTTP return code for this status, 0 if not set.
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * Suggested HTTP return code for this status, 0 if not set.
     *
     * @return static
     */
    public function setCode(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Extended data associated with the reason.  Each reason may define its own extended details. This
     * field is optional and the data returned is not guaranteed to conform to any schema except that
     * defined by the reason type.
     */
    public function getDetails(): ?StatusDetails
    {
        return $this->details;
    }

    /**
     * Extended data associated with the reason.  Each reason may define its own extended details. This
     * field is optional and the data returned is not guaranteed to conform to any schema except that
     * defined by the reason type.
     *
     * @return static
     */
    public function setDetails(StatusDetails $details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * A human-readable description of the status of this operation.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * A human-readable description of the status of this operation.
     *
     * @return static
     */
    public function setMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getMetadata(): ?ListMeta
    {
        return $this->metadata;
    }

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setMetadata(ListMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * A machine-readable description of why this operation is in the "Failure" status. If this value is
     * empty there is no information available. A Reason clarifies an HTTP status code but does not
     * override it.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * A machine-readable description of why this operation is in the "Failure" status. If this value is
     * empty there is no information available. A Reason clarifies an HTTP status code but does not
     * override it.
     *
     * @return static
     */
    public function setReason(string $reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Status of the operation. One of: "Success" or "Failure". More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Status of the operation. One of: "Success" or "Failure". More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }
}
