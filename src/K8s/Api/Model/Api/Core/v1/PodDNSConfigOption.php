<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.19.7
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
 * PodDNSConfigOption defines DNS resolver options of a pod.
 */
class PodDNSConfigOption
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("value")
     * @var string|null
     */
    protected $value = null;

    /**
     * @param string|null $name
     * @param string|null $value
     */
    public function __construct(?string $name = null, ?string $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Required.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @return static
     */
    public function setValue(string $value)
    {
        $this->value = $value;

        return $this;
    }
}
