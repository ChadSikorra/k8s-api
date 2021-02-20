<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.13.12
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
 * ConfigMapNodeConfigSource contains the information to reference a ConfigMap as a config source for
 * the Node.
 */
class ConfigMapNodeConfigSource
{
    /**
     * @Kubernetes\Attribute("kubeletConfigKey",isRequired=true)
     * @var string
     */
    protected $kubeletConfigKey;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("namespace",isRequired=true)
     * @var string
     */
    protected $namespace;

    /**
     * @Kubernetes\Attribute("resourceVersion")
     * @var string|null
     */
    protected $resourceVersion = null;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid = null;

    /**
     * @param string $kubeletConfigKey
     * @param string $name
     * @param string $namespace
     */
    public function __construct(string $kubeletConfigKey, string $name, string $namespace)
    {
        $this->kubeletConfigKey = $kubeletConfigKey;
        $this->name = $name;
        $this->namespace = $namespace;
    }

    /**
     * KubeletConfigKey declares which key of the referenced ConfigMap corresponds to the
     * KubeletConfiguration structure This field is required in all cases.
     */
    public function getKubeletConfigKey(): string
    {
        return $this->kubeletConfigKey;
    }

    /**
     * KubeletConfigKey declares which key of the referenced ConfigMap corresponds to the
     * KubeletConfiguration structure This field is required in all cases.
     *
     * @return static
     */
    public function setKubeletConfigKey(string $kubeletConfigKey)
    {
        $this->kubeletConfigKey = $kubeletConfigKey;

        return $this;
    }

    /**
     * Name is the metadata.name of the referenced ConfigMap. This field is required in all cases.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the metadata.name of the referenced ConfigMap. This field is required in all cases.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Namespace is the metadata.namespace of the referenced ConfigMap. This field is required in all
     * cases.
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * Namespace is the metadata.namespace of the referenced ConfigMap. This field is required in all
     * cases.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * ResourceVersion is the metadata.ResourceVersion of the referenced ConfigMap. This field is forbidden
     * in Node.Spec, and required in Node.Status.
     */
    public function getResourceVersion(): ?string
    {
        return $this->resourceVersion;
    }

    /**
     * ResourceVersion is the metadata.ResourceVersion of the referenced ConfigMap. This field is forbidden
     * in Node.Spec, and required in Node.Status.
     *
     * @return static
     */
    public function setResourceVersion(string $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * UID is the metadata.UID of the referenced ConfigMap. This field is forbidden in Node.Spec, and
     * required in Node.Status.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * UID is the metadata.UID of the referenced ConfigMap. This field is forbidden in Node.Spec, and
     * required in Node.Status.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
