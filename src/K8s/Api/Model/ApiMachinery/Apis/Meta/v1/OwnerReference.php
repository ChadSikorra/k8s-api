<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.14.10
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
 * OwnerReference contains enough information to let you identify an owning object. An owning object
 * must be in the same namespace as the dependent, or be cluster-scoped, so there is no namespace
 * field.
 */
class OwnerReference
{
    /**
     * @Kubernetes\Attribute("apiVersion",isRequired=true)
     * @var string
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("blockOwnerDeletion")
     * @var bool|null
     */
    protected $blockOwnerDeletion = null;

    /**
     * @Kubernetes\Attribute("controller")
     * @var bool|null
     */
    protected $controller = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("uid",isRequired=true)
     * @var string
     */
    protected $uid;

    /**
     * @param string $apiVersion
     * @param string $kind
     * @param string $name
     * @param string $uid
     */
    public function __construct(string $apiVersion, string $kind, string $name, string $uid)
    {
        $this->apiVersion = $apiVersion;
        $this->kind = $kind;
        $this->name = $name;
        $this->uid = $uid;
    }

    /**
     * API version of the referent.
     */
    public function getApiVersion(): string
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
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then the owner cannot be deleted
     * from the key-value store until this reference is removed. Defaults to false. To set this field, a
     * user needs "delete" permission of the owner, otherwise 422 (Unprocessable Entity) will be returned.
     */
    public function isBlockOwnerDeletion(): ?bool
    {
        return $this->blockOwnerDeletion;
    }

    /**
     * If true, AND if the owner has the "foregroundDeletion" finalizer, then the owner cannot be deleted
     * from the key-value store until this reference is removed. Defaults to false. To set this field, a
     * user needs "delete" permission of the owner, otherwise 422 (Unprocessable Entity) will be returned.
     *
     * @return static
     */
    public function setIsBlockOwnerDeletion(bool $blockOwnerDeletion)
    {
        $this->blockOwnerDeletion = $blockOwnerDeletion;

        return $this;
    }

    /**
     * If true, this reference points to the managing controller.
     */
    public function isController(): ?bool
    {
        return $this->controller;
    }

    /**
     * If true, this reference points to the managing controller.
     *
     * @return static
     */
    public function setIsController(bool $controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind of the referent. More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * UID of the referent. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }
}
