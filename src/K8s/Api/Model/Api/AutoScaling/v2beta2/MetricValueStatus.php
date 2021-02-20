<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.17.17
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
 * MetricValueStatus holds the current value for a metric
 */
class MetricValueStatus
{
    /**
     * @Kubernetes\Attribute("averageUtilization")
     * @var int|null
     */
    protected $averageUtilization = null;

    /**
     * @Kubernetes\Attribute("averageValue")
     * @var string|null
     */
    protected $averageValue = null;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @param int|null $averageUtilization
     * @param string|null $averageValue
     * @param string|null $value
     */
    public function __construct(?int $averageUtilization = null, $averageValue = null, $value = null)
    {
        $this->averageUtilization = $averageUtilization;
        $this->averageValue = $averageValue;
        $this->value = $value;
    }

    /**
     * currentAverageUtilization is the current value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.
     */
    public function getAverageUtilization(): ?int
    {
        return $this->averageUtilization;
    }

    /**
     * currentAverageUtilization is the current value of the average of the resource metric across all
     * relevant pods, represented as a percentage of the requested value of the resource for the pods.
     *
     * @return static
     */
    public function setAverageUtilization(int $averageUtilization)
    {
        $this->averageUtilization = $averageUtilization;

        return $this;
    }

    /**
     * averageValue is the current value of the average of the metric across all relevant pods (as a
     * quantity)
     *
     * @return string
     */
    public function getAverageValue()
    {
        return $this->averageValue;
    }

    /**
     * averageValue is the current value of the average of the metric across all relevant pods (as a
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
     * value is the current value of the metric (as a quantity).
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * value is the current value of the metric (as a quantity).
     *
     * @param string $value
     * @return static
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
