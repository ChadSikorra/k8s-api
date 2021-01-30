<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.17.17
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
 * SecretKeySelector selects a key of a Secret.
 */
class SecretKeySelector
{
    /**
     * @Kubernetes\Attribute("key",isRequired=true)
     * @var string
     */
    protected $key;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("optional")
     * @var bool|null
     */
    protected $optional = null;

    /**
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * The key of the secret to select from.  Must be a valid secret key.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * The key of the secret to select from.  Must be a valid secret key.
     *
     * @return static
     */
    public function setKey(string $key)
    {
        $this->key = $key;

        return $this;
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
     * Specify whether the Secret or its key must be defined
     */
    public function isOptional(): ?bool
    {
        return $this->optional;
    }

    /**
     * Specify whether the Secret or its key must be defined
     *
     * @return static
     */
    public function setIsOptional(bool $optional)
    {
        $this->optional = $optional;

        return $this;
    }
}
