<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.11.10
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
 * PodsMetricStatus indicates the current value of a metric describing each pod in the current scale
 * target (for example, transactions-processed-per-second).
 */
class PodsMetricStatus
{
    /**
     * @Kubernetes\Attribute("currentAverageValue",isRequired=true)
     * @var string
     */
    protected $currentAverageValue;

    /**
     * @Kubernetes\Attribute("metricName",isRequired=true)
     * @var string
     */
    protected $metricName;

    /**
     * @param string $currentAverageValue
     * @param string $metricName
     */
    public function __construct($currentAverageValue, string $metricName)
    {
        $this->currentAverageValue = $currentAverageValue;
        $this->metricName = $metricName;
    }

    /**
     * currentAverageValue is the current value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @return string
     */
    public function getCurrentAverageValue()
    {
        return $this->currentAverageValue;
    }

    /**
     * currentAverageValue is the current value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @param string $currentAverageValue
     * @return static
     */
    public function setCurrentAverageValue($currentAverageValue)
    {
        $this->currentAverageValue = $currentAverageValue;

        return $this;
    }

    /**
     * metricName is the name of the metric in question
     */
    public function getMetricName(): string
    {
        return $this->metricName;
    }

    /**
     * metricName is the name of the metric in question
     *
     * @return static
     */
    public function setMetricName(string $metricName)
    {
        $this->metricName = $metricName;

        return $this;
    }
}
