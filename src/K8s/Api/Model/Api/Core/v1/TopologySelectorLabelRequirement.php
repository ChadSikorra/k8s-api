<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.12.10
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
 * A topology selector requirement is a selector that matches given label. This is an alpha feature and
 * may change in the future.
 */
class TopologySelectorLabelRequirement
{
    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key;

    /**
     * @Kubernetes\Attribute("values",isRequired=true)
     * @var string[]
     */
    protected $values;

    /**
     * @param string $key
     * @param string[] $values
     */
    public function __construct(string $key, array $values)
    {
        $this->key = $key;
        $this->values = $values;
    }

    /**
     * The label key that the selector applies to.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * The label key that the selector applies to.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * An array of string values. One value must match the label to be selected. Each entry in Values is
     * ORed.
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * An array of string values. One value must match the label to be selected. Each entry in Values is
     * ORed.
     *
     * @return static
     */
    public function setValues(array $values)
    {
        $this->values = $values;

        return $this;
    }
}
