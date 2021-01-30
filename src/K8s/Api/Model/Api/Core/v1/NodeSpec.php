<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * NodeSpec describes the attributes that a node is created with.
 */
class NodeSpec
{
    /**
     * @Kubernetes\Attribute("configSource",type="model",model=NodeConfigSource::class)
     * @var NodeConfigSource|null
     */
    protected $configSource = null;

    /**
     * @Kubernetes\Attribute("externalID")
     * @var string|null
     */
    protected $externalID = null;

    /**
     * @Kubernetes\Attribute("podCIDR")
     * @var string|null
     */
    protected $podCIDR = null;

    /**
     * @Kubernetes\Attribute("providerID")
     * @var string|null
     */
    protected $providerID = null;

    /**
     * @Kubernetes\Attribute("taints",type="collection",model=Taint::class)
     * @var iterable|Taint[]|null
     */
    protected $taints = null;

    /**
     * @Kubernetes\Attribute("unschedulable")
     * @var bool|null
     */
    protected $unschedulable = null;

    /**
     * If specified, the source to get node configuration from The DynamicKubeletConfig feature gate must
     * be enabled for the Kubelet to use this field
     */
    public function getConfigSource(): ?NodeConfigSource
    {
        return $this->configSource;
    }

    /**
     * If specified, the source to get node configuration from The DynamicKubeletConfig feature gate must
     * be enabled for the Kubelet to use this field
     *
     * @return static
     */
    public function setConfigSource(NodeConfigSource $configSource)
    {
        $this->configSource = $configSource;

        return $this;
    }

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see:
     * https://issues.k8s.io/61966
     */
    public function getExternalID(): ?string
    {
        return $this->externalID;
    }

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see:
     * https://issues.k8s.io/61966
     *
     * @return static
     */
    public function setExternalID(string $externalID)
    {
        $this->externalID = $externalID;

        return $this;
    }

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     */
    public function getPodCIDR(): ?string
    {
        return $this->podCIDR;
    }

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     *
     * @return static
     */
    public function setPodCIDR(string $podCIDR)
    {
        $this->podCIDR = $podCIDR;

        return $this;
    }

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     */
    public function getProviderID(): ?string
    {
        return $this->providerID;
    }

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     *
     * @return static
     */
    public function setProviderID(string $providerID)
    {
        $this->providerID = $providerID;

        return $this;
    }

    /**
     * If specified, the node's taints.
     *
     * @return iterable|Taint[]
     */
    public function getTaints(): ?iterable
    {
        return $this->taints;
    }

    /**
     * If specified, the node's taints.
     *
     * @return static
     */
    public function setTaints(iterable $taints)
    {
        $this->taints = $taints;

        return $this;
    }

    /**
     * @return static
     */
    public function addTaints(Taint $taint)
    {
        if (!$this->taints) {
            $this->taints = new Collection();
        }
        $this->taints[] = $taint;

        return $this;
    }

    /**
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     */
    public function isUnschedulable(): ?bool
    {
        return $this->unschedulable;
    }

    /**
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     *
     * @return static
     */
    public function setIsUnschedulable(bool $unschedulable)
    {
        $this->unschedulable = $unschedulable;

        return $this;
    }
}
