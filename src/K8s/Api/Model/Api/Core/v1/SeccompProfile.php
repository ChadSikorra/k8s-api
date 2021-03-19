<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.5
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
 * SeccompProfile defines a pod/container's seccomp profile settings. Only one profile source may be
 * set.
 */
class SeccompProfile
{
    /**
     * @Kubernetes\Attribute("localhostProfile")
     * @var string|null
     */
    protected $localhostProfile = null;

    /**
     * @Kubernetes\Attribute("type",isRequired=true)
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * localhostProfile indicates a profile defined in a file on the node should be used. The profile must
     * be preconfigured on the node to work. Must be a descending path, relative to the kubelet's
     * configured seccomp profile location. Must only be set if type is "Localhost".
     */
    public function getLocalhostProfile(): ?string
    {
        return $this->localhostProfile;
    }

    /**
     * localhostProfile indicates a profile defined in a file on the node should be used. The profile must
     * be preconfigured on the node to work. Must be a descending path, relative to the kubelet's
     * configured seccomp profile location. Must only be set if type is "Localhost".
     *
     * @return static
     */
    public function setLocalhostProfile(string $localhostProfile)
    {
        $this->localhostProfile = $localhostProfile;

        return $this;
    }

    /**
     * type indicates which kind of seccomp profile will be applied. Valid options are:
     *
     * Localhost - a profile defined in a file on the node should be used. RuntimeDefault - the container
     * runtime default profile should be used. Unconfined - no profile should be applied.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * type indicates which kind of seccomp profile will be applied. Valid options are:
     *
     * Localhost - a profile defined in a file on the node should be used. RuntimeDefault - the container
     * runtime default profile should be used. Unconfined - no profile should be applied.
     *
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}
