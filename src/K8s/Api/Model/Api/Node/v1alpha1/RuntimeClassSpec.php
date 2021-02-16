<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Node\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * RuntimeClassSpec is a specification of a RuntimeClass. It contains parameters that are required to
 * describe the RuntimeClass to the Container Runtime Interface (CRI) implementation, as well as any
 * other components that need to understand how the pod will be run. The RuntimeClassSpec is immutable.
 */
class RuntimeClassSpec
{
    /**
     * @Kubernetes\Attribute("overhead",type="model",model=Overhead::class)
     * @var Overhead|null
     */
    protected $overhead = null;

    /**
     * @Kubernetes\Attribute("runtimeHandler",isRequired=true)
     * @var string
     */
    protected $runtimeHandler;

    /**
     * @Kubernetes\Attribute("scheduling",type="model",model=Scheduling::class)
     * @var Scheduling|null
     */
    protected $scheduling = null;

    /**
     * @param string $runtimeHandler
     */
    public function __construct(string $runtimeHandler)
    {
        $this->runtimeHandler = $runtimeHandler;
    }

    /**
     * Overhead represents the resource overhead associated with running a pod for a given RuntimeClass.
     * For more details, see https://git.k8s.io/enhancements/keps/sig-node/20190226-pod-overhead.md This
     * field is alpha-level as of Kubernetes v1.15, and is only honored by servers that enable the
     * PodOverhead feature.
     */
    public function getOverhead(): ?Overhead
    {
        return $this->overhead;
    }

    /**
     * Overhead represents the resource overhead associated with running a pod for a given RuntimeClass.
     * For more details, see https://git.k8s.io/enhancements/keps/sig-node/20190226-pod-overhead.md This
     * field is alpha-level as of Kubernetes v1.15, and is only honored by servers that enable the
     * PodOverhead feature.
     *
     * @return static
     */
    public function setOverhead(Overhead $overhead)
    {
        $this->overhead = $overhead;

        return $this;
    }

    /**
     * RuntimeHandler specifies the underlying runtime and configuration that the CRI implementation will
     * use to handle pods of this class. The possible values are specific to the node & CRI configuration.
     * It is assumed that all handlers are available on every node, and handlers of the same name are
     * equivalent on every node. For example, a handler called "runc" might specify that the runc OCI
     * runtime (using native Linux containers) will be used to run the containers in a pod. The
     * RuntimeHandler must conform to the DNS Label (RFC 1123) requirements and is immutable.
     */
    public function getRuntimeHandler(): string
    {
        return $this->runtimeHandler;
    }

    /**
     * RuntimeHandler specifies the underlying runtime and configuration that the CRI implementation will
     * use to handle pods of this class. The possible values are specific to the node & CRI configuration.
     * It is assumed that all handlers are available on every node, and handlers of the same name are
     * equivalent on every node. For example, a handler called "runc" might specify that the runc OCI
     * runtime (using native Linux containers) will be used to run the containers in a pod. The
     * RuntimeHandler must conform to the DNS Label (RFC 1123) requirements and is immutable.
     *
     * @return static
     */
    public function setRuntimeHandler(string $runtimeHandler)
    {
        $this->runtimeHandler = $runtimeHandler;

        return $this;
    }

    /**
     * Scheduling holds the scheduling constraints to ensure that pods running with this RuntimeClass are
     * scheduled to nodes that support it. If scheduling is nil, this RuntimeClass is assumed to be
     * supported by all nodes.
     */
    public function getScheduling(): ?Scheduling
    {
        return $this->scheduling;
    }

    /**
     * Scheduling holds the scheduling constraints to ensure that pods running with this RuntimeClass are
     * scheduled to nodes that support it. If scheduling is nil, this RuntimeClass is assumed to be
     * supported by all nodes.
     *
     * @return static
     */
    public function setScheduling(Scheduling $scheduling)
    {
        $this->scheduling = $scheduling;

        return $this;
    }
}
