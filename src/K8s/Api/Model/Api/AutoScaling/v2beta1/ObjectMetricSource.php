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

namespace K8s\Api\Model\Api\AutoScaling\v2beta1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;

/**
 * ObjectMetricSource indicates how to scale on a metric describing a kubernetes object (for example,
 * hits-per-second on an Ingress object).
 */
class ObjectMetricSource
{
    /**
     * @Kubernetes\Attribute("averageValue")
     * @var string|null
     */
    protected $averageValue = null;

    /**
     * @Kubernetes\Attribute("metricName",isRequired=true)
     * @var string
     */
    protected $metricName;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("target",type="model",model=CrossVersionObjectReference::class,isRequired=true)
     * @var CrossVersionObjectReference
     */
    protected $target;

    /**
     * @Kubernetes\Attribute("targetValue",isRequired=true)
     * @var string
     */
    protected $targetValue;

    /**
     * @param string $metricName
     * @param CrossVersionObjectReference $target
     * @param string $targetValue
     */
    public function __construct(string $metricName, CrossVersionObjectReference $target, $targetValue)
    {
        $this->metricName = $metricName;
        $this->target = $target;
        $this->targetValue = $targetValue;
    }

    /**
     * averageValue is the target value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @return string
     */
    public function getAverageValue()
    {
        return $this->averageValue;
    }

    /**
     * averageValue is the target value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @param string $averageValue
     * @return static
     */
    public function setAverageValue($averageValue)
    {
        $this->averageValue = $averageValue;

        return $this;
    }

    /**
     * metricName is the name of the metric in question.
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * metricName is the name of the metric in question.
     *
     * @return static
     */
    public function setMetricName(string $metricName)
    {
        $this->metricName = $metricName;

        return $this;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set, it is passed as an additional parameter to the metrics server for more specific metrics
     * scoping When unset, just the metricName will be used to gather metrics.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * selector is the string-encoded form of a standard kubernetes label selector for the given metric
     * When set, it is passed as an additional parameter to the metrics server for more specific metrics
     * scoping When unset, just the metricName will be used to gather metrics.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * target is the described Kubernetes object.
     */
    public function getTarget(): CrossVersionObjectReference
    {
        return $this->target;
    }

    /**
     * target is the described Kubernetes object.
     *
     * @return static
     */
    public function setTarget(CrossVersionObjectReference $target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * targetValue is the target value of the metric (as a quantity).
     *
     * @return string
     */
    public function getTargetValue()
    {
        return $this->targetValue;
    }

    /**
     * targetValue is the target value of the metric (as a quantity).
     *
     * @param string $targetValue
     * @return static
     */
    public function setTargetValue($targetValue)
    {
        $this->targetValue = $targetValue;

        return $this;
    }
}
