<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.5
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
 * A label selector requirement is a selector that contains values, a key, and an operator that relates
 * the key and values.
 */
class LabelSelectorRequirement
{
    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key;

    /**
     * @Kubernetes\Attribute("operator",isRequired=true)
     * @var string
     */
    protected $operator;

    /**
     * @Kubernetes\Attribute("values")
     * @var string[]|null
     */
    protected $values = null;

    /**
     * @param string $key
     * @param string $operator
     */
    public function __construct(string $key, string $operator)
    {
        $this->key = $key;
        $this->operator = $operator;
    }

    /**
     * key is the label key that the selector applies to.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * key is the label key that the selector applies to.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * operator represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists
     * and DoesNotExist.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * operator represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists
     * and DoesNotExist.
     *
     * @return static
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * values is an array of string values. If the operator is In or NotIn, the values array must be
     * non-empty. If the operator is Exists or DoesNotExist, the values array must be empty. This array is
     * replaced during a strategic merge patch.
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * values is an array of string values. If the operator is In or NotIn, the values array must be
     * non-empty. If the operator is Exists or DoesNotExist, the values array must be empty. This array is
     * replaced during a strategic merge patch.
     *
     * @return static
     */
    public function setValues(array $values)
    {
        $this->values = $values;

        return $this;
    }
}
