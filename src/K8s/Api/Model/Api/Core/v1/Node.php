<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use DateTimeInterface;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ManagedFieldsEntry;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\ObjectMeta;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\OwnerReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * Node is a worker node in Kubernetes. Each node will have a unique identifier in the cache (i.e. in
 * etcd).
 *
 * @Kubernetes\Kind("Node",version="v1")
 * @Kubernetes\Operation("get",path="/api/v1/nodes/{name}",response="static::class")
 * @Kubernetes\Operation("post",path="/api/v1/nodes",body="model",response="static::class")
 * @Kubernetes\Operation("delete",path="/api/v1/nodes/{name}",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("deletecollection-all",path="/api/v1/nodes",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status")
 * @Kubernetes\Operation("watch-all",path="/api/v1/nodes",response="K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent")
 * @Kubernetes\Operation("patch",path="/api/v1/nodes/{name}",body="patch",response="static::class")
 * @Kubernetes\Operation("list-all",path="/api/v1/nodes",response="K8s\Api\Model\Api\Core\v1\NodeList")
 */
class Node
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string
     */
    protected $kind = 'Node';

    /**
     * @Kubernetes\Attribute("metadata",type="model",model=ObjectMeta::class)
     * @var ObjectMeta
     */
    protected $metadata;

    /**
     * @Kubernetes\Attribute("spec",type="model",model=NodeSpec::class)
     * @var NodeSpec
     */
    protected $spec;

    /**
     * @Kubernetes\Attribute("status",type="model",model=NodeStatus::class)
     * @var NodeStatus|null
     */
    protected $status;

    public function __construct(?string $name)
    {
        $this->metadata = new ObjectMeta($name);
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     */
    public function getAnnotations(): ?array
    {
        return $this->metadata->getAnnotations();
    }

    /**
     * Annotations is an unstructured key value map stored with a resource that may be set by external
     * tools to store and retrieve arbitrary metadata. They are not queryable and should be preserved when
     * modifying objects. More info: http://kubernetes.io/docs/user-guide/annotations
     *
     * @return static
     */
    public function setAnnotations(array $annotations)
    {
        $this->metadata->setAnnotations($annotations);

        return $this;
    }

    /**
     * The name of the cluster which the object belongs to. This is used to distinguish resources with same
     * name and namespace in different clusters. This field is not set anywhere right now and apiserver is
     * going to ignore it if set in create or update request.
     */
    public function getClusterName(): ?string
    {
        return $this->metadata->getClusterName();
    }

    /**
     * The name of the cluster which the object belongs to. This is used to distinguish resources with same
     * name and namespace in different clusters. This field is not set anywhere right now and apiserver is
     * going to ignore it if set in create or update request.
     *
     * @return static
     */
    public function setClusterName(string $clusterName)
    {
        $this->metadata->setClusterName($clusterName);

        return $this;
    }

    /**
     * CreationTimestamp is a timestamp representing the server time when this object was created. It is
     * not guaranteed to be set in happens-before order across separate operations. Clients may not set
     * this value. It is represented in RFC3339 form and is in UTC.
     *
     * Populated by the system. Read-only. Null for lists. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getCreationTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getCreationTimestamp();
    }

    /**
     * Number of seconds allowed for this object to gracefully terminate before it will be removed from the
     * system. Only set when deletionTimestamp is also set. May only be shortened. Read-only.
     */
    public function getDeletionGracePeriodSeconds(): ?int
    {
        return $this->metadata->getDeletionGracePeriodSeconds();
    }

    /**
     * DeletionTimestamp is RFC 3339 date and time at which this resource will be deleted. This field is
     * set by the server when a graceful deletion is requested by the user, and is not directly settable by
     * a client. The resource is expected to be deleted (no longer visible from resource lists, and not
     * reachable by name) after the time in this field, once the finalizers list is empty. As long as the
     * finalizers list contains items, deletion is blocked. Once the deletionTimestamp is set, this value
     * may not be unset or be set further into the future, although it may be shortened or the resource may
     * be deleted prior to this time. For example, a user may request that a pod is deleted in 30 seconds.
     * The Kubelet will react by sending a graceful termination signal to the containers in the pod. After
     * that 30 seconds, the Kubelet will send a hard termination signal (SIGKILL) to the container and
     * after cleanup, remove the pod from the API. In the presence of network partitions, this object may
     * still exist after this timestamp, until an administrator or automated process can determine the
     * resource is fully terminated. If not set, graceful deletion of the object has not been requested.
     *
     * Populated by the system when a graceful deletion is requested. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getDeletionTimestamp(): ?DateTimeInterface
    {
        return $this->metadata->getDeletionTimestamp();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed.
     */
    public function getFinalizers(): ?array
    {
        return $this->metadata->getFinalizers();
    }

    /**
     * Must be empty before the object is deleted from the registry. Each entry is an identifier for the
     * responsible component that will remove the entry from the list. If the deletionTimestamp of the
     * object is non-nil, entries in this list can only be removed.
     *
     * @return static
     */
    public function setFinalizers(array $finalizers)
    {
        $this->metadata->setFinalizers($finalizers);

        return $this;
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
     */
    public function getGenerateName(): ?string
    {
        return $this->metadata->getGenerateName();
    }

    /**
     * GenerateName is an optional prefix, used by the server, to generate a unique name ONLY IF the Name
     * field has not been provided. If this field is used, the name returned to the client will be
     * different than the name passed. This value will also be combined with a unique suffix. The provided
     * value has the same validation rules as the Name field, and may be truncated by the length of the
     * suffix required to make the value unique on the server.
     *
     * If this field is specified and the generated name exists, the server will NOT return a 409 -
     * instead, it will either return 201 Created or 500 with Reason ServerTimeout indicating a unique name
     * could not be found in the time allotted, and the client should retry (optionally after the time
     * indicated in the Retry-After header).
     *
     * Applied only if Name is not specified. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#idempotency
     *
     * @return static
     */
    public function setGenerateName(string $generateName)
    {
        $this->metadata->setGenerateName($generateName);

        return $this;
    }

    /**
     * A sequence number representing a specific generation of the desired state. Populated by the system.
     * Read-only.
     */
    public function getGeneration(): ?int
    {
        return $this->metadata->getGeneration();
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     */
    public function getLabels(): ?array
    {
        return $this->metadata->getLabels();
    }

    /**
     * Map of string keys and values that can be used to organize and categorize (scope and select)
     * objects. May match selectors of replication controllers and services. More info:
     * http://kubernetes.io/docs/user-guide/labels
     *
     * @return static
     */
    public function setLabels(array $labels)
    {
        $this->metadata->setLabels($labels);

        return $this;
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * @return iterable|ManagedFieldsEntry[]
     */
    public function getManagedFields(): ?iterable
    {
        return $this->metadata->getManagedFields();
    }

    /**
     * ManagedFields maps workflow-id and version to the set of fields that are managed by that workflow.
     * This is mostly for internal housekeeping, and users typically shouldn't need to set or understand
     * this field. A workflow can be the user's name, a controller's name, or the name of a specific apply
     * path like "ci-cd". The set of fields is always in the version that the workflow used when modifying
     * the object.
     *
     * @return static
     */
    public function setManagedFields(iterable $managedFields)
    {
        $this->metadata->setManagedFields($managedFields);

        return $this;
    }

    /**
     * @return static
     */
    public function addManagedFields(ManagedFieldsEntry $managedField)
    {
        $this->metadata->addManagedFields($managedField);

        return $this;
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     */
    public function getName(): ?string
    {
        return $this->metadata->getName();
    }

    /**
     * Name must be unique within a namespace. Is required when creating resources, although some resources
     * may allow a client to request the generation of an appropriate name automatically. Name is primarily
     * intended for creation idempotence and configuration definition. Cannot be updated. More info:
     * http://kubernetes.io/docs/user-guide/identifiers#names
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->metadata->setName($name);

        return $this;
    }

    /**
     * Namespace defines the space within each name must be unique. An empty namespace is equivalent to the
     * "default" namespace, but "default" is the canonical representation. Not all objects are required to
     * be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     */
    public function getNamespace(): ?string
    {
        return $this->metadata->getNamespace();
    }

    /**
     * Namespace defines the space within each name must be unique. An empty namespace is equivalent to the
     * "default" namespace, but "default" is the canonical representation. Not all objects are required to
     * be scoped to a namespace - the value of this field for those objects will be empty.
     *
     * Must be a DNS_LABEL. Cannot be updated. More info: http://kubernetes.io/docs/user-guide/namespaces
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->metadata->setNamespace($namespace);

        return $this;
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return iterable|OwnerReference[]
     */
    public function getOwnerReferences(): ?iterable
    {
        return $this->metadata->getOwnerReferences();
    }

    /**
     * List of objects depended by this object. If ALL objects in the list have been deleted, this object
     * will be garbage collected. If this object is managed by a controller, then an entry in this list
     * will point to this controller, with the controller field set to true. There cannot be more than one
     * managing controller.
     *
     * @return static
     */
    public function setOwnerReferences(iterable $ownerReferences)
    {
        $this->metadata->setOwnerReferences($ownerReferences);

        return $this;
    }

    /**
     * @return static
     */
    public function addOwnerReferences(OwnerReference $ownerReference)
    {
        $this->metadata->addOwnerReferences($ownerReference);

        return $this;
    }

    /**
     * An opaque value that represents the internal version of this object that can be used by clients to
     * determine when objects have changed. May be used for optimistic concurrency, change detection, and
     * the watch operation on a resource or set of resources. Clients must treat these values as opaque and
     * passed unmodified back to the server. They may only be valid for a particular resource or set of
     * resources.
     *
     * Populated by the system. Read-only. Value must be treated as opaque by clients and . More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#concurrency-control-and-consistency
     */
    public function getResourceVersion(): ?string
    {
        return $this->metadata->getResourceVersion();
    }

    /**
     * SelfLink is a URL representing this object. Populated by the system. Read-only.
     *
     * DEPRECATED Kubernetes will stop propagating this field in 1.20 release and the field is planned to
     * be removed in 1.21 release.
     */
    public function getSelfLink(): ?string
    {
        return $this->metadata->getSelfLink();
    }

    /**
     * UID is the unique in time and space value for this object. It is typically generated by the server
     * on successful creation of a resource and is not allowed to change on PUT operations.
     *
     * Populated by the system. Read-only. More info: http://kubernetes.io/docs/user-guide/identifiers#uids
     */
    public function getUid(): ?string
    {
        return $this->metadata->getUid();
    }

    /**
     * If specified, the source to get node configuration from The DynamicKubeletConfig feature gate must
     * be enabled for the Kubelet to use this field
     */
    public function getConfigSource(): ?NodeConfigSource
    {
        return $this->spec->getConfigSource();
    }

    /**
     * If specified, the source to get node configuration from The DynamicKubeletConfig feature gate must
     * be enabled for the Kubelet to use this field
     *
     * @return static
     */
    public function setConfigSource(NodeConfigSource $configSource)
    {
        $this->spec->setConfigSource($configSource);

        return $this;
    }

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see:
     * https://issues.k8s.io/61966
     */
    public function getExternalID(): ?string
    {
        return $this->spec->getExternalID();
    }

    /**
     * Deprecated. Not all kubelets will set this field. Remove field after 1.13. see:
     * https://issues.k8s.io/61966
     *
     * @return static
     */
    public function setExternalID(string $externalID)
    {
        $this->spec->setExternalID($externalID);

        return $this;
    }

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     */
    public function getPodCIDR(): ?string
    {
        return $this->spec->getPodCIDR();
    }

    /**
     * PodCIDR represents the pod IP range assigned to the node.
     *
     * @return static
     */
    public function setPodCIDR(string $podCIDR)
    {
        $this->spec->setPodCIDR($podCIDR);

        return $this;
    }

    /**
     * podCIDRs represents the IP ranges assigned to the node for usage by Pods on that node. If this field
     * is specified, the 0th entry must match the podCIDR field. It may contain at most 1 value for each of
     * IPv4 and IPv6.
     */
    public function getPodCIDRs(): ?array
    {
        return $this->spec->getPodCIDRs();
    }

    /**
     * podCIDRs represents the IP ranges assigned to the node for usage by Pods on that node. If this field
     * is specified, the 0th entry must match the podCIDR field. It may contain at most 1 value for each of
     * IPv4 and IPv6.
     *
     * @return static
     */
    public function setPodCIDRs(array $podCIDRs)
    {
        $this->spec->setPodCIDRs($podCIDRs);

        return $this;
    }

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     */
    public function getProviderID(): ?string
    {
        return $this->spec->getProviderID();
    }

    /**
     * ID of the node assigned by the cloud provider in the format:
     * <ProviderName>://<ProviderSpecificNodeID>
     *
     * @return static
     */
    public function setProviderID(string $providerID)
    {
        $this->spec->setProviderID($providerID);

        return $this;
    }

    /**
     * If specified, the node's taints.
     *
     * @return iterable|Taint[]
     */
    public function getTaints(): ?iterable
    {
        return $this->spec->getTaints();
    }

    /**
     * If specified, the node's taints.
     *
     * @return static
     */
    public function setTaints(iterable $taints)
    {
        $this->spec->setTaints($taints);

        return $this;
    }

    /**
     * @return static
     */
    public function addTaints(Taint $taint)
    {
        $this->spec->addTaints($taint);

        return $this;
    }

    /**
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     */
    public function isUnschedulable(): ?bool
    {
        return $this->spec->isUnschedulable();
    }

    /**
     * Unschedulable controls node schedulability of new pods. By default, node is schedulable. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#manual-node-administration
     *
     * @return static
     */
    public function setIsUnschedulable(bool $unschedulable)
    {
        $this->spec->setIsUnschedulable($unschedulable);

        return $this;
    }

    /**
     * List of addresses reachable to the node. Queried from cloud provider, if available. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#addresses Note: This field is declared as mergeable,
     * but the merge key is not sufficiently unique, which can cause data corruption when it is merged.
     * Callers should instead use a full-replacement patch. See http://pr.k8s.io/79391 for an example.
     *
     * @return iterable|NodeAddress[]
     */
    public function getAddresses(): ?iterable
    {
        return $this->status->getAddresses();
    }

    /**
     * Allocatable represents the resources of a node that are available for scheduling. Defaults to
     * Capacity.
     */
    public function getAllocatable(): ?array
    {
        return $this->status->getAllocatable();
    }

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#capacity
     */
    public function getCapacity(): ?array
    {
        return $this->status->getCapacity();
    }

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#condition
     *
     * @return iterable|NodeCondition[]
     */
    public function getConditions(): ?iterable
    {
        return $this->status->getConditions();
    }

    /**
     * Status of the config assigned to the node via the dynamic Kubelet config feature.
     */
    public function getConfig(): ?NodeConfigStatus
    {
        return $this->status->getConfig();
    }

    /**
     * Endpoints of daemons running on the Node.
     */
    public function getDaemonEndpoints(): ?NodeDaemonEndpoints
    {
        return $this->status->getDaemonEndpoints();
    }

    /**
     * List of container images on this node
     *
     * @return iterable|ContainerImage[]
     */
    public function getImages(): ?iterable
    {
        return $this->status->getImages();
    }

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#info
     */
    public function getNodeInfo(): ?NodeSystemInfo
    {
        return $this->status->getNodeInfo();
    }

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never populated, and now is
     * deprecated.
     */
    public function getPhase(): ?string
    {
        return $this->status->getPhase();
    }

    /**
     * List of volumes that are attached to the node.
     *
     * @return iterable|AttachedVolume[]
     */
    public function getVolumesAttached(): ?iterable
    {
        return $this->status->getVolumesAttached();
    }

    /**
     * List of attachable volumes in use (mounted) by the node.
     */
    public function getVolumesInUse(): ?array
    {
        return $this->status->getVolumesInUse();
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
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
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     */
    public function getMetadata(): ObjectMeta
    {
        return $this->metadata;
    }

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @return static
     */
    public function setMetadata(ObjectMeta $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }

    /**
     * Spec defines the behavior of a node.
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public function getSpec(): NodeSpec
    {
        return $this->spec;
    }

    /**
     * Spec defines the behavior of a node.
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     *
     * @return static
     */
    public function setSpec(NodeSpec $spec)
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * Most recently observed status of the node. Populated by the system. Read-only. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#spec-and-status
     */
    public function getStatus(): ?NodeStatus
    {
        return $this->status;
    }
}
