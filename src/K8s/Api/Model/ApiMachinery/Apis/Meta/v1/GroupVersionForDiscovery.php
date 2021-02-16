<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.16.15
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
 * GroupVersion contains the "group/version" and "version" string of a version. It is made a struct to
 * keep extensibility.
 */
class GroupVersionForDiscovery
{
    /**
     * @Kubernetes\Attribute("groupVersion",isRequired=true)
     * @var string
     */
    protected $groupVersion;

    /**
     * @Kubernetes\Attribute("version",isRequired=true)
     * @var string
     */
    protected $version;

    /**
     * @param string $groupVersion
     * @param string $version
     */
    public function __construct(string $groupVersion, string $version)
    {
        $this->groupVersion = $groupVersion;
        $this->version = $version;
    }

    /**
     * groupVersion specifies the API group and version in the form "group/version"
     */
    public function getGroupVersion(): string
    {
        return $this->groupVersion;
    }

    /**
     * groupVersion specifies the API group and version in the form "group/version"
     *
     * @return static
     */
    public function setGroupVersion(string $groupVersion)
    {
        $this->groupVersion = $groupVersion;

        return $this;
    }

    /**
     * version specifies the version in the form of "version". This is to save the clients the trouble of
     * splitting the GroupVersion.
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * version specifies the version in the form of "version". This is to save the clients the trouble of
     * splitting the GroupVersion.
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }
}
