<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * AllowedCSIDriver represents a single inline CSI Driver that is allowed to be used.
 */
class AllowedCSIDriver
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
     * Name is the registered name of the CSI driver
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the registered name of the CSI driver
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
