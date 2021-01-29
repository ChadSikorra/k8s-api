<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.20.2
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
 * A node selector requirement is a selector that contains values, a key, and an operator that relates
 * the key and values.
 */
class NodeSelectorRequirement
{
    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key = null;

    /**
     * @Kubernetes\Attribute("operator",isRequired=true)
     * @var string
     */
    protected $operator = null;

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
     * Represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists,
     * DoesNotExist. Gt, and Lt.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Represents a key's relationship to a set of values. Valid operators are In, NotIn, Exists,
     * DoesNotExist. Gt, and Lt.
     *
     * @return static
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If
     * the operator is Exists or DoesNotExist, the values array must be empty. If the operator is Gt or Lt,
     * the values array must have a single element, which will be interpreted as an integer. This array is
     * replaced during a strategic merge patch.
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If
     * the operator is Exists or DoesNotExist, the values array must be empty. If the operator is Gt or Lt,
     * the values array must have a single element, which will be interpreted as an integer. This array is
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
