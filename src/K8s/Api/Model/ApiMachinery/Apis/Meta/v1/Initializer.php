<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.15.12
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
 * Initializer is information about an initializer that has not yet completed.
 */
class Initializer
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * name of the process that is responsible for initializing this object.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name of the process that is responsible for initializing this object.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
