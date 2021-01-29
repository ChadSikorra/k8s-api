<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.20.2
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
 * ObjectReference contains enough information to let you inspect or modify the referred object.
 */
class ObjectReference
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("fieldPath")
     * @var string|null
     */
    protected $fieldPath = null;

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace = null;

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
     * API version of the referent.
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * API version of the referent.
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * If referring to a piece of an object instead of an entire object, this string should contain a valid
     * JSON/Go field access statement, such as desiredState.manifest.containers[2]. For example, if the
     * object reference is to a container within a pod, this would take on a value like:
     * "spec.containers{name}" (where "name" refers to the name of the container that triggered the event)
     * or if no container name is specified "spec.containers[2]" (container with index 2 in this pod). This
     * syntax is chosen only to have some well-defined way of referencing a part of an object.
     */
    public function getFieldPath(): ?string
    {
        return $this->fieldPath;
    }

    /**
     * If referring to a piece of an object instead of an entire object, this string should contain a valid
     * JSON/Go field access statement, such as desiredState.manifest.containers[2]. For example, if the
     * object reference is to a container within a pod, this would take on a value like:
     * "spec.containers{name}" (where "name" refers to the name of the container that triggered the event)
     * or if no container name is specified "spec.containers[2]" (container with index 2 in this pod). This
     * syntax is chosen only to have some well-defined way of referencing a part of an object.
     *
     * @return static
     */
    public function setFieldPath(string $fieldPath)
    {
        $this->fieldPath = $fieldPath;

        return $this;
    }

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

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
     * Namespace of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/namespaces/
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/namespaces/
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Specific resourceVersion to which this reference is made, if any. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->resourceVersion;
    }

    /**
     * Specific resourceVersion to which this reference is made, if any. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     *
     * @return static
     */
    public function setResourceVersion(string $resourceVersion)
    {
        $this->resourceVersion = $resourceVersion;

        return $this;
    }

    /**
     * UID of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#uids
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * UID of the referent. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#uids
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
