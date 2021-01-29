<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

class CustomResourceDefinitionVersion
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("served",isRequired=true)
     * @var bool
     */
    protected $served = null;

    /**
     * @Kubernetes\Attribute("storage",isRequired=true)
     * @var bool
     */
    protected $storage = null;

    /**
     * @param string $name
     * @param bool $served
     * @param bool $storage
     */
    public function __construct(string $name, bool $served, bool $storage)
    {
        $this->name = $name;
        $this->served = $served;
        $this->storage = $storage;
    }

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     */
    public function isServed(): bool
    {
        return $this->served;
    }

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @return static
     */
    public function setIsServed(bool $served)
    {
        $this->served = $served;

        return $this;
    }

    /**
     * Storage flags the version as storage version. There must be exactly one flagged as storage version.
     */
    public function isStorage(): bool
    {
        return $this->storage;
    }

    /**
     * Storage flags the version as storage version. There must be exactly one flagged as storage version.
     *
     * @return static
     */
    public function setIsStorage(bool $storage)
    {
        $this->storage = $storage;

        return $this;
    }
}
