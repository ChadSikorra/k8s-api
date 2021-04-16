<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.6
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
 * RuntimeClassStrategyOptions define the strategy that will dictate the allowable RuntimeClasses for a
 * pod.
 */
class RuntimeClassStrategyOptions
{
    /**
     * @Kubernetes\Attribute("allowedRuntimeClassNames",isRequired=true)
     * @var string[]
     */
    protected $allowedRuntimeClassNames;

    /**
     * @Kubernetes\Attribute("defaultRuntimeClassName")
     * @var string|null
     */
    protected $defaultRuntimeClassName = null;

    /**
     * @param string[] $allowedRuntimeClassNames
     */
    public function __construct(array $allowedRuntimeClassNames)
    {
        $this->allowedRuntimeClassNames = $allowedRuntimeClassNames;
    }

    /**
     * allowedRuntimeClassNames is an allowlist of RuntimeClass names that may be specified on a pod. A
     * value of "*" means that any RuntimeClass name is allowed, and must be the only item in the list. An
     * empty list requires the RuntimeClassName field to be unset.
     */
    public function getAllowedRuntimeClassNames(): array
    {
        return $this->allowedRuntimeClassNames;
    }

    /**
     * allowedRuntimeClassNames is an allowlist of RuntimeClass names that may be specified on a pod. A
     * value of "*" means that any RuntimeClass name is allowed, and must be the only item in the list. An
     * empty list requires the RuntimeClassName field to be unset.
     *
     * @return static
     */
    public function setAllowedRuntimeClassNames(array $allowedRuntimeClassNames)
    {
        $this->allowedRuntimeClassNames = $allowedRuntimeClassNames;

        return $this;
    }

    /**
     * defaultRuntimeClassName is the default RuntimeClassName to set on the pod. The default MUST be
     * allowed by the allowedRuntimeClassNames list. A value of nil does not mutate the Pod.
     */
    public function getDefaultRuntimeClassName(): ?string
    {
        return $this->defaultRuntimeClassName;
    }

    /**
     * defaultRuntimeClassName is the default RuntimeClassName to set on the pod. The default MUST be
     * allowed by the allowedRuntimeClassNames list. A value of nil does not mutate the Pod.
     *
     * @return static
     */
    public function setDefaultRuntimeClassName(string $defaultRuntimeClassName)
    {
        $this->defaultRuntimeClassName = $defaultRuntimeClassName;

        return $this;
    }
}
