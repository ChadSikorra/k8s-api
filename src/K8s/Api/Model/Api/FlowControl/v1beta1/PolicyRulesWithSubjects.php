<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.3
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PolicyRulesWithSubjects prescribes a test that applies to a request to an apiserver. The test
 * considers the subject making the request, the verb being requested, and the resource to be acted
 * upon. This PolicyRulesWithSubjects matches a request if and only if both (a) at least one member of
 * subjects matches the request and (b) at least one member of resourceRules or nonResourceRules
 * matches the request.
 */
class PolicyRulesWithSubjects
{
    /**
     * @Kubernetes\Attribute("nonResourceRules",type="collection",model=NonResourcePolicyRule::class)
     * @var iterable|NonResourcePolicyRule[]|null
     */
    protected $nonResourceRules = null;

    /**
     * @Kubernetes\Attribute("resourceRules",type="collection",model=ResourcePolicyRule::class)
     * @var iterable|ResourcePolicyRule[]|null
     */
    protected $resourceRules = null;

    /**
     * @Kubernetes\Attribute("subjects",type="collection",model=Subject::class,isRequired=true)
     * @var iterable|Subject[]
     */
    protected $subjects;

    /**
     * @param iterable|Subject[] $subjects
     */
    public function __construct(iterable $subjects)
    {
        $this->subjects = new Collection($subjects);
    }

    /**
     * `nonResourceRules` is a list of NonResourcePolicyRules that identify matching requests according to
     * their verb and the target non-resource URL.
     *
     * @return iterable|NonResourcePolicyRule[]
     */
    public function getNonResourceRules(): ?iterable
    {
        return $this->nonResourceRules;
    }

    /**
     * `nonResourceRules` is a list of NonResourcePolicyRules that identify matching requests according to
     * their verb and the target non-resource URL.
     *
     * @return static
     */
    public function setNonResourceRules(iterable $nonResourceRules)
    {
        $this->nonResourceRules = $nonResourceRules;

        return $this;
    }

    /**
     * @return static
     */
    public function addNonResourceRules(NonResourcePolicyRule $nonResourceRule)
    {
        if (!$this->nonResourceRules) {
            $this->nonResourceRules = new Collection();
        }
        $this->nonResourceRules[] = $nonResourceRule;

        return $this;
    }

    /**
     * `resourceRules` is a slice of ResourcePolicyRules that identify matching requests according to their
     * verb and the target resource. At least one of `resourceRules` and `nonResourceRules` has to be
     * non-empty.
     *
     * @return iterable|ResourcePolicyRule[]
     */
    public function getResourceRules(): ?iterable
    {
        return $this->resourceRules;
    }

    /**
     * `resourceRules` is a slice of ResourcePolicyRules that identify matching requests according to their
     * verb and the target resource. At least one of `resourceRules` and `nonResourceRules` has to be
     * non-empty.
     *
     * @return static
     */
    public function setResourceRules(iterable $resourceRules)
    {
        $this->resourceRules = $resourceRules;

        return $this;
    }

    /**
     * @return static
     */
    public function addResourceRules(ResourcePolicyRule $resourceRule)
    {
        if (!$this->resourceRules) {
            $this->resourceRules = new Collection();
        }
        $this->resourceRules[] = $resourceRule;

        return $this;
    }

    /**
     * subjects is the list of normal user, serviceaccount, or group that this rule cares about. There must
     * be at least one member in this slice. A slice that includes both the system:authenticated and
     * system:unauthenticated user groups matches every request. Required.
     *
     * @return iterable|Subject[]
     */
    public function getSubjects(): iterable
    {
        return $this->subjects;
    }

    /**
     * subjects is the list of normal user, serviceaccount, or group that this rule cares about. There must
     * be at least one member in this slice. A slice that includes both the system:authenticated and
     * system:unauthenticated user groups matches every request. Required.
     *
     * @return static
     */
    public function setSubjects(iterable $subjects)
    {
        $this->subjects = $subjects;

        return $this;
    }

    /**
     * @return static
     */
    public function addSubjects(Subject $subject)
    {
        if (!$this->subjects) {
            $this->subjects = new Collection();
        }
        $this->subjects[] = $subject;

        return $this;
    }
}
