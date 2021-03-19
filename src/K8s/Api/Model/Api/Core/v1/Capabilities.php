<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.19.9
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
 * Adds and removes POSIX capabilities from running containers.
 */
class Capabilities
{
    /**
     * @Kubernetes\Attribute("add")
     * @var string[]|null
     */
    protected $add = null;

    /**
     * @Kubernetes\Attribute("drop")
     * @var string[]|null
     */
    protected $drop = null;

    /**
     * @param string[]|null $add
     * @param string[]|null $drop
     */
    public function __construct(?array $add = null, ?array $drop = null)
    {
        $this->add = $add;
        $this->drop = $drop;
    }

    /**
     * Added capabilities
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }

    /**
     * Added capabilities
     *
     * @return static
     */
    public function setAdd(array $add)
    {
        $this->add = $add;

        return $this;
    }

    /**
     * Removed capabilities
     */
    public function getDrop(): ?array
    {
        return $this->drop;
    }

    /**
     * Removed capabilities
     *
     * @return static
     */
    public function setDrop(array $drop)
    {
        $this->drop = $drop;

        return $this;
    }
}
