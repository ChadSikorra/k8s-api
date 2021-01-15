<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.17.17
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
 * A scoped-resource selector requirement is a selector that contains values, a scope name, and an
 * operator that relates the scope name and values.
 */
class ScopedResourceSelectorRequirement
{
    /**
     * @Kubernetes\Attribute("operator",isRequired=true)
     * @var string
     */
    protected $operator;

    /**
     * @Kubernetes\Attribute("scopeName",isRequired=true)
     * @var string
     */
    protected $scopeName;

    /**
     * @Kubernetes\Attribute("values")
     * @var string[]|null
     */
    protected $values;

    /**
     * @param string $operator
     * @param string $scopeName
     */
    public function __construct(string $operator, string $scopeName)
    {
        $this->operator = $operator;
        $this->scopeName = $scopeName;
    }

    /**
     * Represents a scope's relationship to a set of values. Valid operators are In, NotIn, Exists,
     * DoesNotExist.
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Represents a scope's relationship to a set of values. Valid operators are In, NotIn, Exists,
     * DoesNotExist.
     *
     * @return static
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * The name of the scope that the selector applies to.
     */
    public function getScopeName(): string
    {
        return $this->scopeName;
    }

    /**
     * The name of the scope that the selector applies to.
     *
     * @return static
     */
    public function setScopeName(string $scopeName)
    {
        $this->scopeName = $scopeName;

        return $this;
    }

    /**
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If
     * the operator is Exists or DoesNotExist, the values array must be empty. This array is replaced
     * during a strategic merge patch.
     */
    public function getValues(): ?array
    {
        return $this->values;
    }

    /**
     * An array of string values. If the operator is In or NotIn, the values array must be non-empty. If
     * the operator is Exists or DoesNotExist, the values array must be empty. This array is replaced
     * during a strategic merge patch.
     *
     * @return static
     */
    public function setValues(array $values)
    {
        $this->values = $values;

        return $this;
    }
}
