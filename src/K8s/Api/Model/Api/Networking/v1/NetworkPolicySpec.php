<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * NetworkPolicySpec provides the specification of a NetworkPolicy
 */
class NetworkPolicySpec
{
    /**
     * @Kubernetes\Attribute("egress",type="collection",model=NetworkPolicyEgressRule::class)
     * @var iterable|NetworkPolicyEgressRule[]|null
     */
    protected $egress = null;

    /**
     * @Kubernetes\Attribute("ingress",type="collection",model=NetworkPolicyIngressRule::class)
     * @var iterable|NetworkPolicyIngressRule[]|null
     */
    protected $ingress = null;

    /**
     * @Kubernetes\Attribute("podSelector",type="model",model=LabelSelector::class,isRequired=true)
     * @var LabelSelector
     */
    protected $podSelector = null;

    /**
     * @Kubernetes\Attribute("policyTypes")
     * @var string[]|null
     */
    protected $policyTypes = null;

    /**
     * @param LabelSelector $podSelector
     */
    public function __construct(LabelSelector $podSelector)
    {
        $this->podSelector = $podSelector;
    }

    /**
     * List of egress rules to be applied to the selected pods. Outgoing traffic is allowed if there are no
     * NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic matches at least one egress rule across all of the NetworkPolicy objects whose podSelector
     * matches the pod. If this field is empty then this NetworkPolicy limits all outgoing traffic (and
     * serves solely to ensure that the pods it selects are isolated by default). This field is beta-level
     * in 1.8
     *
     * @return iterable|NetworkPolicyEgressRule[]
     */
    public function getEgress(): ?iterable
    {
        return $this->egress;
    }

    /**
     * List of egress rules to be applied to the selected pods. Outgoing traffic is allowed if there are no
     * NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic matches at least one egress rule across all of the NetworkPolicy objects whose podSelector
     * matches the pod. If this field is empty then this NetworkPolicy limits all outgoing traffic (and
     * serves solely to ensure that the pods it selects are isolated by default). This field is beta-level
     * in 1.8
     *
     * @return static
     */
    public function setEgress(iterable $egress)
    {
        $this->egress = $egress;

        return $this;
    }

    /**
     * @return static
     */
    public function addEgress(NetworkPolicyEgressRule $egre)
    {
        if (!$this->egress) {
            $this->egress = new Collection();
        }
        $this->egress[] = $egre;

        return $this;
    }

    /**
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to a pod if there are
     * no NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic source is the pod's local node, OR if the traffic matches at least one ingress rule across
     * all of the NetworkPolicy objects whose podSelector matches the pod. If this field is empty then this
     * NetworkPolicy does not allow any traffic (and serves solely to ensure that the pods it selects are
     * isolated by default)
     *
     * @return iterable|NetworkPolicyIngressRule[]
     */
    public function getIngress(): ?iterable
    {
        return $this->ingress;
    }

    /**
     * List of ingress rules to be applied to the selected pods. Traffic is allowed to a pod if there are
     * no NetworkPolicies selecting the pod (and cluster policy otherwise allows the traffic), OR if the
     * traffic source is the pod's local node, OR if the traffic matches at least one ingress rule across
     * all of the NetworkPolicy objects whose podSelector matches the pod. If this field is empty then this
     * NetworkPolicy does not allow any traffic (and serves solely to ensure that the pods it selects are
     * isolated by default)
     *
     * @return static
     */
    public function setIngress(iterable $ingress)
    {
        $this->ingress = $ingress;

        return $this;
    }

    /**
     * @return static
     */
    public function addIngress(NetworkPolicyIngressRule $ingre)
    {
        if (!$this->ingress) {
            $this->ingress = new Collection();
        }
        $this->ingress[] = $ingre;

        return $this;
    }

    /**
     * Selects the pods to which this NetworkPolicy object applies. The array of ingress rules is applied
     * to any pods selected by this field. Multiple network policies can select the same set of pods. In
     * this case, the ingress rules for each are combined additively. This field is NOT optional and
     * follows standard label selector semantics. An empty podSelector matches all pods in this namespace.
     */
    public function getPodSelector(): LabelSelector
    {
        return $this->podSelector;
    }

    /**
     * Selects the pods to which this NetworkPolicy object applies. The array of ingress rules is applied
     * to any pods selected by this field. Multiple network policies can select the same set of pods. In
     * this case, the ingress rules for each are combined additively. This field is NOT optional and
     * follows standard label selector semantics. An empty podSelector matches all pods in this namespace.
     *
     * @return static
     */
    public function setPodSelector(LabelSelector $podSelector)
    {
        $this->podSelector = $podSelector;

        return $this;
    }

    /**
     * List of rule types that the NetworkPolicy relates to. Valid options are Ingress, Egress, or
     * Ingress,Egress. If this field is not specified, it will default based on the existence of Ingress or
     * Egress rules; policies that contain an Egress section are assumed to affect Egress, and all policies
     * (whether or not they contain an Ingress section) are assumed to affect Ingress. If you want to write
     * an egress-only policy, you must explicitly specify policyTypes [ "Egress" ]. Likewise, if you want
     * to write a policy that specifies that no egress is allowed, you must specify a policyTypes value
     * that include "Egress" (since such a policy would not include an Egress section and would otherwise
     * default to just [ "Ingress" ]). This field is beta-level in 1.8
     */
    public function getPolicyTypes(): ?array
    {
        return $this->policyTypes;
    }

    /**
     * List of rule types that the NetworkPolicy relates to. Valid options are Ingress, Egress, or
     * Ingress,Egress. If this field is not specified, it will default based on the existence of Ingress or
     * Egress rules; policies that contain an Egress section are assumed to affect Egress, and all policies
     * (whether or not they contain an Ingress section) are assumed to affect Ingress. If you want to write
     * an egress-only policy, you must explicitly specify policyTypes [ "Egress" ]. Likewise, if you want
     * to write a policy that specifies that no egress is allowed, you must specify a policyTypes value
     * that include "Egress" (since such a policy would not include an Egress section and would otherwise
     * default to just [ "Ingress" ]). This field is beta-level in 1.8
     *
     * @return static
     */
    public function setPolicyTypes(array $policyTypes)
    {
        $this->policyTypes = $policyTypes;

        return $this;
    }
}
