<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AutoScaling\v2beta2;

use K8s\Core\Annotation as Kubernetes;

/**
 * PodsMetricSource indicates how to scale on a metric describing each pod in the current scale target
 * (for example, transactions-processed-per-second). The values will be averaged together before being
 * compared to the target value.
 */
class PodsMetricSource
{
    /**
     * @Kubernetes\Attribute("metric",type="model",model=MetricIdentifier::class,isRequired=true)
     * @var MetricIdentifier
     */
    protected $metric;

    /**
     * @Kubernetes\Attribute("target",type="model",model=MetricTarget::class,isRequired=true)
     * @var MetricTarget
     */
    protected $target;

    /**
     * @param MetricIdentifier $metric
     * @param MetricTarget $target
     */
    public function __construct(MetricIdentifier $metric, MetricTarget $target)
    {
        $this->metric = $metric;
        $this->target = $target;
    }

    /**
     * metric identifies the target metric by name and selector
     */
    public function getMetric(): MetricIdentifier
    {
        return $this->metric;
    }

    /**
     * metric identifies the target metric by name and selector
     *
     * @return static
     */
    public function setMetric(MetricIdentifier $metric)
    {
        $this->metric = $metric;

        return $this;
    }

    /**
     * target specifies the target value for the given metric
     */
    public function getTarget(): MetricTarget
    {
        return $this->target;
    }

    /**
     * target specifies the target value for the given metric
     *
     * @return static
     */
    public function setTarget(MetricTarget $target)
    {
        $this->target = $target;

        return $this;
    }
}
