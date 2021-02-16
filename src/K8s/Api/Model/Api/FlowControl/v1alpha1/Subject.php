<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Subject matches the originator of a request, as identified by the request authentication system.
 * There are three ways of matching an originator; by user, group, or service account.
 */
class Subject
{
    /**
     * @Kubernetes\Attribute("group",type="model",model=GroupSubject::class)
     * @var GroupSubject|null
     */
    protected $group = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("serviceAccount",type="model",model=ServiceAccountSubject::class)
     * @var ServiceAccountSubject|null
     */
    protected $serviceAccount = null;

    /**
     * @Kubernetes\Attribute("user",type="model",model=UserSubject::class)
     * @var UserSubject|null
     */
    protected $user = null;

    /**
     * @param string $kind
     */
    public function __construct(string $kind)
    {
        $this->kind = $kind;
    }

    public function getGroup(): ?GroupSubject
    {
        return $this->group;
    }

    /**
     * @return static
     */
    public function setGroup(GroupSubject $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Required
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Required
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    public function getServiceAccount(): ?ServiceAccountSubject
    {
        return $this->serviceAccount;
    }

    /**
     * @return static
     */
    public function setServiceAccount(ServiceAccountSubject $serviceAccount)
    {
        $this->serviceAccount = $serviceAccount;

        return $this;
    }

    public function getUser(): ?UserSubject
    {
        return $this->user;
    }

    /**
     * @return static
     */
    public function setUser(UserSubject $user)
    {
        $this->user = $user;

        return $this;
    }
}
