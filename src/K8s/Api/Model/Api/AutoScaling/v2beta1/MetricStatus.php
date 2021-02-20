<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.4
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * MetricStatus describes the last-read state of a single metric.
 */
class MetricStatus
{
    /**
     * @Kubernetes\Attribute("containerResource",type="model",model=ContainerResourceMetricStatus::class)
     * @var ContainerResourceMetricStatus|null
     */
    protected $containerResource = null;

    /**
     * @Kubernetes\Attribute("external",type="model",model=ExternalMetricStatus::class)
     * @var ExternalMetricStatus|null
     */
    protected $external = null;

    /**
     * @Kubernetes\Attribute("object",type="model",model=ObjectMetricStatus::class)
     * @var ObjectMetricStatus|null
     */
    protected $object = null;

    /**
     * @Kubernetes\Attribute("pods",type="model",model=PodsMetricStatus::class)
     * @var PodsMetricStatus|null
     */
    protected $pods = null;

    /**
     * @Kubernetes\Attribute("resource",type="model",model=ResourceMetricStatus::class)
     * @var ResourceMetricStatus|null
     */
    protected $resource = null;

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
     * container resource refers to a resource metric (such as those specified in requests and limits)
     * known to Kubernetes describing a single container in each pod in the current scale target (e.g. CPU
     * or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of
     * those available to normal per-pod metrics using the "pods" source.
     */
    public function getContainerResource(): ?ContainerResourceMetricStatus
    {
        return $this->containerResource;
    }

    /**
     * container resource refers to a resource metric (such as those specified in requests and limits)
     * known to Kubernetes describing a single container in each pod in the current scale target (e.g. CPU
     * or memory). Such metrics are built in to Kubernetes, and have special scaling options on top of
     * those available to normal per-pod metrics using the "pods" source.
     *
     * @return static
     */
    public function setContainerResource(ContainerResourceMetricStatus $containerResource)
    {
        $this->containerResource = $containerResource;

        return $this;
    }

    /**
     * external refers to a global metric that is not associated with any Kubernetes object. It allows
     * autoscaling based on information coming from components running outside of cluster (for example
     * length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster).
     */
    public function getExternal(): ?ExternalMetricStatus
    {
        return $this->external;
    }

    /**
     * external refers to a global metric that is not associated with any Kubernetes object. It allows
     * autoscaling based on information coming from components running outside of cluster (for example
     * length of queue in cloud messaging service, or QPS from loadbalancer running outside of cluster).
     *
     * @return static
     */
    public function setExternal(ExternalMetricStatus $external)
    {
        $this->external = $external;

        return $this;
    }

    /**
     * object refers to a metric describing a single kubernetes object (for example, hits-per-second on an
     * Ingress object).
     */
    public function getObject(): ?ObjectMetricStatus
    {
        return $this->object;
    }

    /**
     * object refers to a metric describing a single kubernetes object (for example, hits-per-second on an
     * Ingress object).
     *
     * @return static
     */
    public function setObject(ObjectMetricStatus $object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * pods refers to a metric describing each pod in the current scale target (for example,
     * transactions-processed-per-second).  The values will be averaged together before being compared to
     * the target value.
     */
    public function getPods(): ?PodsMetricStatus
    {
        return $this->pods;
    }

    /**
     * pods refers to a metric describing each pod in the current scale target (for example,
     * transactions-processed-per-second).  The values will be averaged together before being compared to
     * the target value.
     *
     * @return static
     */
    public function setPods(PodsMetricStatus $pods)
    {
        $this->pods = $pods;

        return $this;
    }

    /**
     * resource refers to a resource metric (such as those specified in requests and limits) known to
     * Kubernetes describing each pod in the current scale target (e.g. CPU or memory). Such metrics are
     * built in to Kubernetes, and have special scaling options on top of those available to normal per-pod
     * metrics using the "pods" source.
     */
    public function getResource(): ?ResourceMetricStatus
    {
        return $this->resource;
    }

    /**
     * resource refers to a resource metric (such as those specified in requests and limits) known to
     * Kubernetes describing each pod in the current scale target (e.g. CPU or memory). Such metrics are
     * built in to Kubernetes, and have special scaling options on top of those available to normal per-pod
     * metrics using the "pods" source.
     *
     * @return static
     */
    public function setResource(ResourceMetricStatus $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * type is the type of metric source.  It will be one of "ContainerResource", "External", "Object",
     * "Pods" or "Resource", each corresponds to a matching field in the object. Note: "ContainerResource"
     * type is available on when the feature-gate HPAContainerMetrics is enabled
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type is the type of metric source.  It will be one of "ContainerResource", "External", "Object",
     * "Pods" or "Resource", each corresponds to a matching field in the object. Note: "ContainerResource"
     * type is available on when the feature-gate HPAContainerMetrics is enabled
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
