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

namespace K8s\Api\Model\Api\Settings\v1alpha1;

use K8s\Api\Model\Api\Core\v1\EnvFromSource;
use K8s\Api\Model\Api\Core\v1\EnvVar;
use K8s\Api\Model\Api\Core\v1\Volume;
use K8s\Api\Model\Api\Core\v1\VolumeMount;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * PodPresetSpec is a description of a pod preset.
 */
class PodPresetSpec
{
    /**
     * @Kubernetes\Attribute("env",type="collection",model=EnvVar::class)
     * @var iterable|EnvVar[]|null
     */
    protected $env = null;

    /**
     * @Kubernetes\Attribute("envFrom",type="collection",model=EnvFromSource::class)
     * @var iterable|EnvFromSource[]|null
     */
    protected $envFrom = null;

    /**
     * @Kubernetes\Attribute("selector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $selector = null;

    /**
     * @Kubernetes\Attribute("volumeMounts",type="collection",model=VolumeMount::class)
     * @var iterable|VolumeMount[]|null
     */
    protected $volumeMounts = null;

    /**
     * @Kubernetes\Attribute("volumes",type="collection",model=Volume::class)
     * @var iterable|Volume[]|null
     */
    protected $volumes = null;

    /**
     * @param iterable|EnvVar[] $env
     * @param iterable|EnvFromSource[] $envFrom
     * @param LabelSelector|null $selector
     * @param iterable|VolumeMount[] $volumeMounts
     * @param iterable|Volume[] $volumes
     */
    public function __construct(
        iterable $env = [],
        iterable $envFrom = [],
        ?LabelSelector $selector = null,
        iterable $volumeMounts = [],
        iterable $volumes = []
    ) {
        $this->env = new Collection($env);
        $this->envFrom = new Collection($envFrom);
        $this->selector = $selector;
        $this->volumeMounts = new Collection($volumeMounts);
        $this->volumes = new Collection($volumes);
    }

    /**
     * Env defines the collection of EnvVar to inject into containers.
     *
     * @return iterable|EnvVar[]
     */
    public function getEnv(): ?iterable
    {
        return $this->env;
    }

    /**
     * Env defines the collection of EnvVar to inject into containers.
     *
     * @return static
     */
    public function setEnv(iterable $env)
    {
        $this->env = $env;

        return $this;
    }

    /**
     * @return static
     */
    public function addEnv(EnvVar $env)
    {
        if (!$this->env) {
            $this->env = new Collection();
        }
        $this->env[] = $env;

        return $this;
    }

    /**
     * EnvFrom defines the collection of EnvFromSource to inject into containers.
     *
     * @return iterable|EnvFromSource[]
     */
    public function getEnvFrom(): ?iterable
    {
        return $this->envFrom;
    }

    /**
     * EnvFrom defines the collection of EnvFromSource to inject into containers.
     *
     * @return static
     */
    public function setEnvFrom(iterable $envFrom)
    {
        $this->envFrom = $envFrom;

        return $this;
    }

    /**
     * @return static
     */
    public function addEnvFrom(EnvFromSource $envFrom)
    {
        if (!$this->envFrom) {
            $this->envFrom = new Collection();
        }
        $this->envFrom[] = $envFrom;

        return $this;
    }

    /**
     * Selector is a label query over a set of resources, in this case pods. Required.
     */
    public function getSelector(): ?LabelSelector
    {
        return $this->selector;
    }

    /**
     * Selector is a label query over a set of resources, in this case pods. Required.
     *
     * @return static
     */
    public function setSelector(LabelSelector $selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * VolumeMounts defines the collection of VolumeMount to inject into containers.
     *
     * @return iterable|VolumeMount[]
     */
    public function getVolumeMounts(): ?iterable
    {
        return $this->volumeMounts;
    }

    /**
     * VolumeMounts defines the collection of VolumeMount to inject into containers.
     *
     * @return static
     */
    public function setVolumeMounts(iterable $volumeMounts)
    {
        $this->volumeMounts = $volumeMounts;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumeMounts(VolumeMount $volumeMount)
    {
        if (!$this->volumeMounts) {
            $this->volumeMounts = new Collection();
        }
        $this->volumeMounts[] = $volumeMount;

        return $this;
    }

    /**
     * Volumes defines the collection of Volume to inject into the pod.
     *
     * @return iterable|Volume[]
     */
    public function getVolumes(): ?iterable
    {
        return $this->volumes;
    }

    /**
     * Volumes defines the collection of Volume to inject into the pod.
     *
     * @return static
     */
    public function setVolumes(iterable $volumes)
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumes(Volume $volume)
    {
        if (!$this->volumes) {
            $this->volumes = new Collection();
        }
        $this->volumes[] = $volume;

        return $this;
    }
}
