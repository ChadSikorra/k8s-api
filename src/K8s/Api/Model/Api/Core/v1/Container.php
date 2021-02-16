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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * A single application container that you want to run within a pod.
 */
class Container
{
    /**
     * @Kubernetes\Attribute("args")
     * @var string[]|null
     */
    protected $args = null;

    /**
     * @Kubernetes\Attribute("command")
     * @var string[]|null
     */
    protected $command = null;

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
     * @Kubernetes\Attribute("image")
     * @var string|null
     */
    protected $image = null;

    /**
     * @Kubernetes\Attribute("imagePullPolicy")
     * @var string|null
     */
    protected $imagePullPolicy = null;

    /**
     * @Kubernetes\Attribute("lifecycle",type="model",model=Lifecycle::class)
     * @var Lifecycle|null
     */
    protected $lifecycle = null;

    /**
     * @Kubernetes\Attribute("livenessProbe",type="model",model=Probe::class)
     * @var Probe|null
     */
    protected $livenessProbe = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("ports",type="collection",model=ContainerPort::class)
     * @var iterable|ContainerPort[]|null
     */
    protected $ports = null;

    /**
     * @Kubernetes\Attribute("readinessProbe",type="model",model=Probe::class)
     * @var Probe|null
     */
    protected $readinessProbe = null;

    /**
     * @Kubernetes\Attribute("resources",type="model",model=ResourceRequirements::class)
     * @var ResourceRequirements|null
     */
    protected $resources = null;

    /**
     * @Kubernetes\Attribute("securityContext",type="model",model=SecurityContext::class)
     * @var SecurityContext|null
     */
    protected $securityContext = null;

    /**
     * @Kubernetes\Attribute("startupProbe",type="model",model=Probe::class)
     * @var Probe|null
     */
    protected $startupProbe = null;

    /**
     * @Kubernetes\Attribute("stdin")
     * @var bool|null
     */
    protected $stdin = null;

    /**
     * @Kubernetes\Attribute("stdinOnce")
     * @var bool|null
     */
    protected $stdinOnce = null;

    /**
     * @Kubernetes\Attribute("terminationMessagePath")
     * @var string|null
     */
    protected $terminationMessagePath = null;

    /**
     * @Kubernetes\Attribute("terminationMessagePolicy")
     * @var string|null
     */
    protected $terminationMessagePolicy = null;

    /**
     * @Kubernetes\Attribute("tty")
     * @var bool|null
     */
    protected $tty = null;

    /**
     * @Kubernetes\Attribute("volumeDevices",type="collection",model=VolumeDevice::class)
     * @var iterable|VolumeDevice[]|null
     */
    protected $volumeDevices = null;

    /**
     * @Kubernetes\Attribute("volumeMounts",type="collection",model=VolumeMount::class)
     * @var iterable|VolumeMount[]|null
     */
    protected $volumeMounts = null;

    /**
     * @Kubernetes\Attribute("workingDir")
     * @var string|null
     */
    protected $workingDir = null;

    /**
     * @param string $name
     * @param string|null $image
     */
    public function __construct(string $name, ?string $image = null)
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * Arguments to the entrypoint. The docker image's CMD is used if this is not provided. Variable
     * references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be
     * resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped
     * with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether
     * the variable exists or not. Cannot be updated. More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     */
    public function getArgs(): ?array
    {
        return $this->args;
    }

    /**
     * Arguments to the entrypoint. The docker image's CMD is used if this is not provided. Variable
     * references $(VAR_NAME) are expanded using the container's environment. If a variable cannot be
     * resolved, the reference in the input string will be unchanged. The $(VAR_NAME) syntax can be escaped
     * with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded, regardless of whether
     * the variable exists or not. Cannot be updated. More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * @return static
     */
    public function setArgs(array $args)
    {
        $this->args = $args;

        return $this;
    }

    /**
     * Entrypoint array. Not executed within a shell. The docker image's ENTRYPOINT is used if this is not
     * provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a
     * variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not. Cannot be updated. More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     */
    public function getCommand(): ?array
    {
        return $this->command;
    }

    /**
     * Entrypoint array. Not executed within a shell. The docker image's ENTRYPOINT is used if this is not
     * provided. Variable references $(VAR_NAME) are expanded using the container's environment. If a
     * variable cannot be resolved, the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not. Cannot be updated. More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * @return static
     */
    public function setCommand(array $command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * List of environment variables to set in the container. Cannot be updated.
     *
     * @return iterable|EnvVar[]
     */
    public function getEnv(): ?iterable
    {
        return $this->env;
    }

    /**
     * List of environment variables to set in the container. Cannot be updated.
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
     * List of sources to populate environment variables in the container. The keys defined within a source
     * must be a C_IDENTIFIER. All invalid keys will be reported as an event when the container is
     * starting. When a key exists in multiple sources, the value associated with the last source will take
     * precedence. Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
     *
     * @return iterable|EnvFromSource[]
     */
    public function getEnvFrom(): ?iterable
    {
        return $this->envFrom;
    }

    /**
     * List of sources to populate environment variables in the container. The keys defined within a source
     * must be a C_IDENTIFIER. All invalid keys will be reported as an event when the container is
     * starting. When a key exists in multiple sources, the value associated with the last source will take
     * precedence. Values defined by an Env with a duplicate key will take precedence. Cannot be updated.
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
     * Docker image name. More info: https://kubernetes.io/docs/concepts/containers/images This field is
     * optional to allow higher level config management to default or override container images in workload
     * controllers like Deployments and StatefulSets.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Docker image name. More info: https://kubernetes.io/docs/concepts/containers/images This field is
     * optional to allow higher level config management to default or override container images in workload
     * controllers like Deployments and StatefulSets.
     *
     * @return static
     */
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is
     * specified, or IfNotPresent otherwise. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/containers/images#updating-images
     */
    public function getImagePullPolicy(): ?string
    {
        return $this->imagePullPolicy;
    }

    /**
     * Image pull policy. One of Always, Never, IfNotPresent. Defaults to Always if :latest tag is
     * specified, or IfNotPresent otherwise. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/containers/images#updating-images
     *
     * @return static
     */
    public function setImagePullPolicy(string $imagePullPolicy)
    {
        $this->imagePullPolicy = $imagePullPolicy;

        return $this;
    }

    /**
     * Actions that the management system should take in response to container lifecycle events. Cannot be
     * updated.
     */
    public function getLifecycle(): ?Lifecycle
    {
        return $this->lifecycle;
    }

    /**
     * Actions that the management system should take in response to container lifecycle events. Cannot be
     * updated.
     *
     * @return static
     */
    public function setLifecycle(Lifecycle $lifecycle)
    {
        $this->lifecycle = $lifecycle;

        return $this;
    }

    /**
     * Periodic probe of container liveness. Container will be restarted if the probe fails. Cannot be
     * updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public function getLivenessProbe(): ?Probe
    {
        return $this->livenessProbe;
    }

    /**
     * Periodic probe of container liveness. Container will be restarted if the probe fails. Cannot be
     * updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return static
     */
    public function setLivenessProbe(Probe $livenessProbe)
    {
        $this->livenessProbe = $livenessProbe;

        return $this;
    }

    /**
     * Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name
     * (DNS_LABEL). Cannot be updated.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the container specified as a DNS_LABEL. Each container in a pod must have a unique name
     * (DNS_LABEL). Cannot be updated.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * List of ports to expose from the container. Exposing a port here gives the system additional
     * information about the network connections a container uses, but is primarily informational. Not
     * specifying a port here DOES NOT prevent that port from being exposed. Any port which is listening on
     * the default "0.0.0.0" address inside a container will be accessible from the network. Cannot be
     * updated.
     *
     * @return iterable|ContainerPort[]
     */
    public function getPorts(): ?iterable
    {
        return $this->ports;
    }

    /**
     * List of ports to expose from the container. Exposing a port here gives the system additional
     * information about the network connections a container uses, but is primarily informational. Not
     * specifying a port here DOES NOT prevent that port from being exposed. Any port which is listening on
     * the default "0.0.0.0" address inside a container will be accessible from the network. Cannot be
     * updated.
     *
     * @return static
     */
    public function setPorts(iterable $ports)
    {
        $this->ports = $ports;

        return $this;
    }

    /**
     * @return static
     */
    public function addPorts(ContainerPort $port)
    {
        if (!$this->ports) {
            $this->ports = new Collection();
        }
        $this->ports[] = $port;

        return $this;
    }

    /**
     * Periodic probe of container service readiness. Container will be removed from service endpoints if
     * the probe fails. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public function getReadinessProbe(): ?Probe
    {
        return $this->readinessProbe;
    }

    /**
     * Periodic probe of container service readiness. Container will be removed from service endpoints if
     * the probe fails. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return static
     */
    public function setReadinessProbe(Probe $readinessProbe)
    {
        $this->readinessProbe = $readinessProbe;

        return $this;
    }

    /**
     * Compute Resources required by this container. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-compute-resources-container/
     */
    public function getResources(): ?ResourceRequirements
    {
        return $this->resources;
    }

    /**
     * Compute Resources required by this container. Cannot be updated. More info:
     * https://kubernetes.io/docs/concepts/configuration/manage-compute-resources-container/
     *
     * @return static
     */
    public function setResources(ResourceRequirements $resources)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * Security options the pod should run with. More info:
     * https://kubernetes.io/docs/concepts/policy/security-context/ More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     */
    public function getSecurityContext(): ?SecurityContext
    {
        return $this->securityContext;
    }

    /**
     * Security options the pod should run with. More info:
     * https://kubernetes.io/docs/concepts/policy/security-context/ More info:
     * https://kubernetes.io/docs/tasks/configure-pod-container/security-context/
     *
     * @return static
     */
    public function setSecurityContext(SecurityContext $securityContext)
    {
        $this->securityContext = $securityContext;

        return $this;
    }

    /**
     * StartupProbe indicates that the Pod has successfully initialized. If specified, no other probes are
     * executed until this completes successfully. If this probe fails, the Pod will be restarted, just as
     * if the livenessProbe failed. This can be used to provide different probe parameters at the beginning
     * of a Pod's lifecycle, when it might take a long time to load data or warm a cache, than during
     * steady-state operation. This cannot be updated. This is an alpha feature enabled by the StartupProbe
     * feature flag. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     */
    public function getStartupProbe(): ?Probe
    {
        return $this->startupProbe;
    }

    /**
     * StartupProbe indicates that the Pod has successfully initialized. If specified, no other probes are
     * executed until this completes successfully. If this probe fails, the Pod will be restarted, just as
     * if the livenessProbe failed. This can be used to provide different probe parameters at the beginning
     * of a Pod's lifecycle, when it might take a long time to load data or warm a cache, than during
     * steady-state operation. This cannot be updated. This is an alpha feature enabled by the StartupProbe
     * feature flag. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#container-probes
     *
     * @return static
     */
    public function setStartupProbe(Probe $startupProbe)
    {
        $this->startupProbe = $startupProbe;

        return $this;
    }

    /**
     * Whether this container should allocate a buffer for stdin in the container runtime. If this is not
     * set, reads from stdin in the container will always result in EOF. Default is false.
     */
    public function isStdin(): ?bool
    {
        return $this->stdin;
    }

    /**
     * Whether this container should allocate a buffer for stdin in the container runtime. If this is not
     * set, reads from stdin in the container will always result in EOF. Default is false.
     *
     * @return static
     */
    public function setIsStdin(bool $stdin)
    {
        $this->stdin = $stdin;

        return $this;
    }

    /**
     * Whether the container runtime should close the stdin channel after it has been opened by a single
     * attach. When stdin is true the stdin stream will remain open across multiple attach sessions. If
     * stdinOnce is set to true, stdin is opened on container start, is empty until the first client
     * attaches to stdin, and then remains open and accepts data until the client disconnects, at which
     * time stdin is closed and remains closed until the container is restarted. If this flag is false, a
     * container processes that reads from stdin will never receive an EOF. Default is false
     */
    public function isStdinOnce(): ?bool
    {
        return $this->stdinOnce;
    }

    /**
     * Whether the container runtime should close the stdin channel after it has been opened by a single
     * attach. When stdin is true the stdin stream will remain open across multiple attach sessions. If
     * stdinOnce is set to true, stdin is opened on container start, is empty until the first client
     * attaches to stdin, and then remains open and accepts data until the client disconnects, at which
     * time stdin is closed and remains closed until the container is restarted. If this flag is false, a
     * container processes that reads from stdin will never receive an EOF. Default is false
     *
     * @return static
     */
    public function setIsStdinOnce(bool $stdinOnce)
    {
        $this->stdinOnce = $stdinOnce;

        return $this;
    }

    /**
     * Optional: Path at which the file to which the container's termination message will be written is
     * mounted into the container's filesystem. Message written is intended to be brief final status, such
     * as an assertion failure message. Will be truncated by the node if greater than 4096 bytes. The total
     * message length across all containers will be limited to 12kb. Defaults to /dev/termination-log.
     * Cannot be updated.
     */
    public function getTerminationMessagePath(): ?string
    {
        return $this->terminationMessagePath;
    }

    /**
     * Optional: Path at which the file to which the container's termination message will be written is
     * mounted into the container's filesystem. Message written is intended to be brief final status, such
     * as an assertion failure message. Will be truncated by the node if greater than 4096 bytes. The total
     * message length across all containers will be limited to 12kb. Defaults to /dev/termination-log.
     * Cannot be updated.
     *
     * @return static
     */
    public function setTerminationMessagePath(string $terminationMessagePath)
    {
        $this->terminationMessagePath = $terminationMessagePath;

        return $this;
    }

    /**
     * Indicate how the termination message should be populated. File will use the contents of
     * terminationMessagePath to populate the container status message on both success and failure.
     * FallbackToLogsOnError will use the last chunk of container log output if the termination message
     * file is empty and the container exited with an error. The log output is limited to 2048 bytes or 80
     * lines, whichever is smaller. Defaults to File. Cannot be updated.
     */
    public function getTerminationMessagePolicy(): ?string
    {
        return $this->terminationMessagePolicy;
    }

    /**
     * Indicate how the termination message should be populated. File will use the contents of
     * terminationMessagePath to populate the container status message on both success and failure.
     * FallbackToLogsOnError will use the last chunk of container log output if the termination message
     * file is empty and the container exited with an error. The log output is limited to 2048 bytes or 80
     * lines, whichever is smaller. Defaults to File. Cannot be updated.
     *
     * @return static
     */
    public function setTerminationMessagePolicy(string $terminationMessagePolicy)
    {
        $this->terminationMessagePolicy = $terminationMessagePolicy;

        return $this;
    }

    /**
     * Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default
     * is false.
     */
    public function isTty(): ?bool
    {
        return $this->tty;
    }

    /**
     * Whether this container should allocate a TTY for itself, also requires 'stdin' to be true. Default
     * is false.
     *
     * @return static
     */
    public function setIsTty(bool $tty)
    {
        $this->tty = $tty;

        return $this;
    }

    /**
     * volumeDevices is the list of block devices to be used by the container. This is a beta feature.
     *
     * @return iterable|VolumeDevice[]
     */
    public function getVolumeDevices(): ?iterable
    {
        return $this->volumeDevices;
    }

    /**
     * volumeDevices is the list of block devices to be used by the container. This is a beta feature.
     *
     * @return static
     */
    public function setVolumeDevices(iterable $volumeDevices)
    {
        $this->volumeDevices = $volumeDevices;

        return $this;
    }

    /**
     * @return static
     */
    public function addVolumeDevices(VolumeDevice $volumeDevice)
    {
        if (!$this->volumeDevices) {
            $this->volumeDevices = new Collection();
        }
        $this->volumeDevices[] = $volumeDevice;

        return $this;
    }

    /**
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
     *
     * @return iterable|VolumeMount[]
     */
    public function getVolumeMounts(): ?iterable
    {
        return $this->volumeMounts;
    }

    /**
     * Pod volumes to mount into the container's filesystem. Cannot be updated.
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
     * Container's working directory. If not specified, the container runtime's default will be used, which
     * might be configured in the container image. Cannot be updated.
     */
    public function getWorkingDir(): ?string
    {
        return $this->workingDir;
    }

    /**
     * Container's working directory. If not specified, the container runtime's default will be used, which
     * might be configured in the container image. Cannot be updated.
     *
     * @return static
     */
    public function setWorkingDir(string $workingDir)
    {
        $this->workingDir = $workingDir;

        return $this;
    }
}
