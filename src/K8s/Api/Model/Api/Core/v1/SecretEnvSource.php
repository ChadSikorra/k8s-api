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
 * SecretEnvSource selects a Secret to populate the environment variables with.
 *
 * The contents of the target Secret's Data field will represent the key-value pairs as environment
 * variables.
 */
class SecretEnvSource
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("optional")
     * @var bool|null
     */
    protected $optional;

    /**
     * @param string|null $name
     * @param bool|null $optional
     */
    public function __construct(?string $name = null, ?bool $optional = null)
    {
        $this->name = $name;
        $this->optional = $optional;
    }

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Specify whether the Secret must be defined
     */
    public function isOptional(): ?bool
    {
        return $this->optional;
    }

    /**
     * Specify whether the Secret must be defined
     *
     * @return static
     */
    public function setIsOptional(bool $optional)
    {
        $this->optional = $optional;

        return $this;
    }
}
