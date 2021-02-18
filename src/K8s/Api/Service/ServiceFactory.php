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

namespace K8s\Api\Service;

use K8s\Api\Service\AdmissionRegistration\v1\MutatingWebhookConfigurationService;
use K8s\Api\Service\AdmissionRegistration\v1\ValidatingWebhookConfigurationService;
use K8s\Api\Service\AdmissionRegistration\v1beta1\MutatingWebhookConfigurationService as v1beta1MutatingWebhookConfigurationService;
use K8s\Api\Service\AdmissionRegistration\v1beta1\ValidatingWebhookConfigurationService as v1beta1ValidatingWebhookConfigurationService;
use K8s\Api\Service\ApiExtensions\v1\CustomResourceDefinitionService;
use K8s\Api\Service\ApiExtensions\v1beta1\CustomResourceDefinitionService as v1beta1CustomResourceDefinitionService;
use K8s\Api\Service\ApiRegistration\v1\APIServiceService;
use K8s\Api\Service\ApiRegistration\v1beta1\APIServiceService as v1beta1APIServiceService;
use K8s\Api\Service\Apps\v1\ControllerRevisionService;
use K8s\Api\Service\Apps\v1\DaemonSetService;
use K8s\Api\Service\Apps\v1\DeploymentService;
use K8s\Api\Service\Apps\v1\ReplicaSetService;
use K8s\Api\Service\Apps\v1\StatefulSetService;
use K8s\Api\Service\Authentication\v1\TokenRequestService;
use K8s\Api\Service\Authentication\v1\TokenReviewService;
use K8s\Api\Service\Authentication\v1beta1\TokenReviewService as v1beta1TokenReviewService;
use K8s\Api\Service\Authorization\v1\LocalSubjectAccessReviewService;
use K8s\Api\Service\Authorization\v1\SelfSubjectAccessReviewService;
use K8s\Api\Service\Authorization\v1\SelfSubjectRulesReviewService;
use K8s\Api\Service\Authorization\v1\SubjectAccessReviewService;
use K8s\Api\Service\Authorization\v1beta1\LocalSubjectAccessReviewService as v1beta1LocalSubjectAccessReviewService;
use K8s\Api\Service\Authorization\v1beta1\SelfSubjectAccessReviewService as v1beta1SelfSubjectAccessReviewService;
use K8s\Api\Service\Authorization\v1beta1\SelfSubjectRulesReviewService as v1beta1SelfSubjectRulesReviewService;
use K8s\Api\Service\Authorization\v1beta1\SubjectAccessReviewService as v1beta1SubjectAccessReviewService;
use K8s\Api\Service\AutoScaling\v1\HorizontalPodAutoscalerService;
use K8s\Api\Service\AutoScaling\v1\ScaleService;
use K8s\Api\Service\AutoScaling\v2beta1\HorizontalPodAutoscalerService as v2beta1HorizontalPodAutoscalerService;
use K8s\Api\Service\AutoScaling\v2beta2\HorizontalPodAutoscalerService as v2beta2HorizontalPodAutoscalerService;
use K8s\Api\Service\Batch\v1\JobService;
use K8s\Api\Service\Batch\v1beta1\CronJobService;
use K8s\Api\Service\Batch\v2alpha1\CronJobService as v2alpha1CronJobService;
use K8s\Api\Service\Certificates\v1\CertificateSigningRequestService;
use K8s\Api\Service\Certificates\v1beta1\CertificateSigningRequestService as v1beta1CertificateSigningRequestService;
use K8s\Api\Service\Coordination\v1\LeaseService;
use K8s\Api\Service\Coordination\v1beta1\LeaseService as v1beta1LeaseService;
use K8s\Api\Service\Core\v1\BindingService;
use K8s\Api\Service\Core\v1\ComponentStatusService;
use K8s\Api\Service\Core\v1\ConfigMapService;
use K8s\Api\Service\Core\v1\EndpointsService;
use K8s\Api\Service\Core\v1\EventService;
use K8s\Api\Service\Core\v1\LimitRangeService;
use K8s\Api\Service\Core\v1\NamespaceService;
use K8s\Api\Service\Core\v1\NodeProxyOptionsService;
use K8s\Api\Service\Core\v1\NodeService;
use K8s\Api\Service\Core\v1\PersistentVolumeClaimService;
use K8s\Api\Service\Core\v1\PersistentVolumeService;
use K8s\Api\Service\Core\v1\PodAttachOptionsService;
use K8s\Api\Service\Core\v1\PodExecOptionsService;
use K8s\Api\Service\Core\v1\PodPortForwardOptionsService;
use K8s\Api\Service\Core\v1\PodProxyOptionsService;
use K8s\Api\Service\Core\v1\PodService;
use K8s\Api\Service\Core\v1\PodTemplateService;
use K8s\Api\Service\Core\v1\ReplicationControllerService;
use K8s\Api\Service\Core\v1\ResourceQuotaService;
use K8s\Api\Service\Core\v1\SecretService;
use K8s\Api\Service\Core\v1\ServiceAccountService;
use K8s\Api\Service\Core\v1\ServiceProxyOptionsService;
use K8s\Api\Service\Core\v1\ServiceService;
use K8s\Api\Service\Discovery\v1beta1\EndpointSliceService;
use K8s\Api\Service\Events\v1\EventService as v1EventService;
use K8s\Api\Service\Events\v1beta1\EventService as v1beta1EventService;
use K8s\Api\Service\Extensions\v1beta1\IngressService;
use K8s\Api\Service\FlowControl\ApiServer\v1alpha1\FlowSchemaService;
use K8s\Api\Service\FlowControl\ApiServer\v1alpha1\PriorityLevelConfigurationService;
use K8s\Api\Service\FlowControl\ApiServer\v1beta1\FlowSchemaService as v1beta1FlowSchemaService;
use K8s\Api\Service\FlowControl\ApiServer\v1beta1\PriorityLevelConfigurationService as v1beta1PriorityLevelConfigurationService;
use K8s\Api\Service\Internal\ApiServer\v1alpha1\StorageVersionService;
use K8s\Api\Service\Networking\v1\IngressClassService;
use K8s\Api\Service\Networking\v1\IngressService as v1IngressService;
use K8s\Api\Service\Networking\v1\NetworkPolicyService;
use K8s\Api\Service\Networking\v1beta1\IngressClassService as v1beta1IngressClassService;
use K8s\Api\Service\Networking\v1beta1\IngressService as v1beta1IngressService;
use K8s\Api\Service\Node\v1\RuntimeClassService;
use K8s\Api\Service\Node\v1alpha1\RuntimeClassService as v1alpha1RuntimeClassService;
use K8s\Api\Service\Node\v1beta1\RuntimeClassService as v1beta1RuntimeClassService;
use K8s\Api\Service\Policy\v1beta1\EvictionService;
use K8s\Api\Service\Policy\v1beta1\PodDisruptionBudgetService;
use K8s\Api\Service\Policy\v1beta1\PodSecurityPolicyService;
use K8s\Api\Service\Rbac\Authorization\v1\ClusterRoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1\ClusterRoleService;
use K8s\Api\Service\Rbac\Authorization\v1\RoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1\RoleService;
use K8s\Api\Service\Rbac\Authorization\v1alpha1\ClusterRoleBindingService as v1alpha1ClusterRoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1alpha1\ClusterRoleService as v1alpha1ClusterRoleService;
use K8s\Api\Service\Rbac\Authorization\v1alpha1\RoleBindingService as v1alpha1RoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1alpha1\RoleService as v1alpha1RoleService;
use K8s\Api\Service\Rbac\Authorization\v1beta1\ClusterRoleBindingService as v1beta1ClusterRoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1beta1\ClusterRoleService as v1beta1ClusterRoleService;
use K8s\Api\Service\Rbac\Authorization\v1beta1\RoleBindingService as v1beta1RoleBindingService;
use K8s\Api\Service\Rbac\Authorization\v1beta1\RoleService as v1beta1RoleService;
use K8s\Api\Service\Scheduling\v1\PriorityClassService;
use K8s\Api\Service\Scheduling\v1alpha1\PriorityClassService as v1alpha1PriorityClassService;
use K8s\Api\Service\Scheduling\v1beta1\PriorityClassService as v1beta1PriorityClassService;
use K8s\Api\Service\Storage\v1\CSIDriverService;
use K8s\Api\Service\Storage\v1\CSINodeService;
use K8s\Api\Service\Storage\v1\StorageClassService;
use K8s\Api\Service\Storage\v1\VolumeAttachmentService;
use K8s\Api\Service\Storage\v1alpha1\VolumeAttachmentService as v1alpha1VolumeAttachmentService;
use K8s\Api\Service\Storage\v1beta1\CSIDriverService as v1beta1CSIDriverService;
use K8s\Api\Service\Storage\v1beta1\CSINodeService as v1beta1CSINodeService;
use K8s\Api\Service\Storage\v1beta1\StorageClassService as v1beta1StorageClassService;
use K8s\Api\Service\Storage\v1beta1\VolumeAttachmentService as v1beta1VolumeAttachmentService;
use K8s\Core\Contract\ApiInterface;

class ServiceFactory
{
    /** @var ApiInterface */
    private $api;

    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function v1CoreComponentStatus(): ComponentStatusService
    {
        return new ComponentStatusService($this->api);
    }

    public function v1CoreConfigMap(): ConfigMapService
    {
        return new ConfigMapService($this->api);
    }

    public function v1CoreEndpoints(): EndpointsService
    {
        return new EndpointsService($this->api);
    }

    public function v1CoreEvent(): EventService
    {
        return new EventService($this->api);
    }

    public function v1CoreLimitRange(): LimitRangeService
    {
        return new LimitRangeService($this->api);
    }

    public function v1CoreNamespace(): NamespaceService
    {
        return new NamespaceService($this->api);
    }

    public function v1CoreBinding(): BindingService
    {
        return new BindingService($this->api);
    }

    public function v1CorePersistentVolumeClaim(): PersistentVolumeClaimService
    {
        return new PersistentVolumeClaimService($this->api);
    }

    public function v1CorePod(): PodService
    {
        return new PodService($this->api);
    }

    public function v1CorePodAttachOptions(): PodAttachOptionsService
    {
        return new PodAttachOptionsService($this->api);
    }

    public function v1CorePodExecOptions(): PodExecOptionsService
    {
        return new PodExecOptionsService($this->api);
    }

    public function v1CorePodPortForwardOptions(): PodPortForwardOptionsService
    {
        return new PodPortForwardOptionsService($this->api);
    }

    public function v1CorePodProxyOptions(): PodProxyOptionsService
    {
        return new PodProxyOptionsService($this->api);
    }

    public function v1CorePodTemplate(): PodTemplateService
    {
        return new PodTemplateService($this->api);
    }

    public function v1CoreReplicationController(): ReplicationControllerService
    {
        return new ReplicationControllerService($this->api);
    }

    public function v1CoreResourceQuota(): ResourceQuotaService
    {
        return new ResourceQuotaService($this->api);
    }

    public function v1CoreSecret(): SecretService
    {
        return new SecretService($this->api);
    }

    public function v1CoreServiceAccount(): ServiceAccountService
    {
        return new ServiceAccountService($this->api);
    }

    public function v1CoreService(): ServiceService
    {
        return new ServiceService($this->api);
    }

    public function v1CoreServiceProxyOptions(): ServiceProxyOptionsService
    {
        return new ServiceProxyOptionsService($this->api);
    }

    public function v1CoreNode(): NodeService
    {
        return new NodeService($this->api);
    }

    public function v1CoreNodeProxyOptions(): NodeProxyOptionsService
    {
        return new NodeProxyOptionsService($this->api);
    }

    public function v1CorePersistentVolume(): PersistentVolumeService
    {
        return new PersistentVolumeService($this->api);
    }

    public function v1beta1PolicyEviction(): EvictionService
    {
        return new EvictionService($this->api);
    }

    public function v1beta1PolicyPodDisruptionBudget(): PodDisruptionBudgetService
    {
        return new PodDisruptionBudgetService($this->api);
    }

    public function v1beta1PolicyPodSecurityPolicy(): PodSecurityPolicyService
    {
        return new PodSecurityPolicyService($this->api);
    }

    public function v1AutoscalingScale(): ScaleService
    {
        return new ScaleService($this->api);
    }

    public function v1AutoscalingHorizontalPodAutoscaler(): HorizontalPodAutoscalerService
    {
        return new HorizontalPodAutoscalerService($this->api);
    }

    public function v2beta1AutoscalingHorizontalPodAutoscaler(): v2beta1HorizontalPodAutoscalerService
    {
        return new v2beta1HorizontalPodAutoscalerService($this->api);
    }

    public function v2beta2AutoscalingHorizontalPodAutoscaler(): v2beta2HorizontalPodAutoscalerService
    {
        return new v2beta2HorizontalPodAutoscalerService($this->api);
    }

    public function v1AuthenticationTokenRequest(): TokenRequestService
    {
        return new TokenRequestService($this->api);
    }

    public function v1AuthenticationTokenReview(): TokenReviewService
    {
        return new TokenReviewService($this->api);
    }

    public function v1beta1AuthenticationTokenReview(): v1beta1TokenReviewService
    {
        return new v1beta1TokenReviewService($this->api);
    }

    public function v1AdmissionregistrationMutatingWebhookConfiguration(): MutatingWebhookConfigurationService
    {
        return new MutatingWebhookConfigurationService($this->api);
    }

    public function v1beta1AdmissionregistrationMutatingWebhookConfiguration(): v1beta1MutatingWebhookConfigurationService
    {
        return new v1beta1MutatingWebhookConfigurationService($this->api);
    }

    public function v1AdmissionregistrationValidatingWebhookConfiguration(): ValidatingWebhookConfigurationService
    {
        return new ValidatingWebhookConfigurationService($this->api);
    }

    public function v1beta1AdmissionregistrationValidatingWebhookConfiguration(): v1beta1ValidatingWebhookConfigurationService
    {
        return new v1beta1ValidatingWebhookConfigurationService($this->api);
    }

    public function v1ApiextensionsCustomResourceDefinition(): CustomResourceDefinitionService
    {
        return new CustomResourceDefinitionService($this->api);
    }

    public function v1beta1ApiextensionsCustomResourceDefinition(): v1beta1CustomResourceDefinitionService
    {
        return new v1beta1CustomResourceDefinitionService($this->api);
    }

    public function v1ApiregistrationAPIService(): APIServiceService
    {
        return new APIServiceService($this->api);
    }

    public function v1beta1ApiregistrationAPIService(): v1beta1APIServiceService
    {
        return new v1beta1APIServiceService($this->api);
    }

    public function v1AppsControllerRevision(): ControllerRevisionService
    {
        return new ControllerRevisionService($this->api);
    }

    public function v1AppsDaemonSet(): DaemonSetService
    {
        return new DaemonSetService($this->api);
    }

    public function v1AppsDeployment(): DeploymentService
    {
        return new DeploymentService($this->api);
    }

    public function v1AppsReplicaSet(): ReplicaSetService
    {
        return new ReplicaSetService($this->api);
    }

    public function v1AppsStatefulSet(): StatefulSetService
    {
        return new StatefulSetService($this->api);
    }

    public function v1AuthorizationLocalSubjectAccessReview(): LocalSubjectAccessReviewService
    {
        return new LocalSubjectAccessReviewService($this->api);
    }

    public function v1beta1AuthorizationLocalSubjectAccessReview(): v1beta1LocalSubjectAccessReviewService
    {
        return new v1beta1LocalSubjectAccessReviewService($this->api);
    }

    public function v1AuthorizationSelfSubjectAccessReview(): SelfSubjectAccessReviewService
    {
        return new SelfSubjectAccessReviewService($this->api);
    }

    public function v1beta1AuthorizationSelfSubjectAccessReview(): v1beta1SelfSubjectAccessReviewService
    {
        return new v1beta1SelfSubjectAccessReviewService($this->api);
    }

    public function v1AuthorizationSelfSubjectRulesReview(): SelfSubjectRulesReviewService
    {
        return new SelfSubjectRulesReviewService($this->api);
    }

    public function v1beta1AuthorizationSelfSubjectRulesReview(): v1beta1SelfSubjectRulesReviewService
    {
        return new v1beta1SelfSubjectRulesReviewService($this->api);
    }

    public function v1AuthorizationSubjectAccessReview(): SubjectAccessReviewService
    {
        return new SubjectAccessReviewService($this->api);
    }

    public function v1beta1AuthorizationSubjectAccessReview(): v1beta1SubjectAccessReviewService
    {
        return new v1beta1SubjectAccessReviewService($this->api);
    }

    public function v1BatchJob(): JobService
    {
        return new JobService($this->api);
    }

    public function v1beta1BatchCronJob(): CronJobService
    {
        return new CronJobService($this->api);
    }

    public function v2alpha1BatchCronJob(): v2alpha1CronJobService
    {
        return new v2alpha1CronJobService($this->api);
    }

    public function v1CertificatesCertificateSigningRequest(): CertificateSigningRequestService
    {
        return new CertificateSigningRequestService($this->api);
    }

    public function v1beta1CertificatesCertificateSigningRequest(): v1beta1CertificateSigningRequestService
    {
        return new v1beta1CertificateSigningRequestService($this->api);
    }

    public function v1CoordinationLease(): LeaseService
    {
        return new LeaseService($this->api);
    }

    public function v1beta1CoordinationLease(): v1beta1LeaseService
    {
        return new v1beta1LeaseService($this->api);
    }

    public function v1beta1DiscoveryEndpointSlice(): EndpointSliceService
    {
        return new EndpointSliceService($this->api);
    }

    public function v1EventsEvent(): v1EventService
    {
        return new v1EventService($this->api);
    }

    public function v1beta1EventsEvent(): v1beta1EventService
    {
        return new v1beta1EventService($this->api);
    }

    public function v1beta1ExtensionsIngress(): IngressService
    {
        return new IngressService($this->api);
    }

    public function v1alpha1FlowcontrolFlowSchema(): FlowSchemaService
    {
        return new FlowSchemaService($this->api);
    }

    public function v1beta1FlowcontrolFlowSchema(): v1beta1FlowSchemaService
    {
        return new v1beta1FlowSchemaService($this->api);
    }

    public function v1alpha1FlowcontrolPriorityLevelConfiguration(): PriorityLevelConfigurationService
    {
        return new PriorityLevelConfigurationService($this->api);
    }

    public function v1beta1FlowcontrolPriorityLevelConfiguration(): v1beta1PriorityLevelConfigurationService
    {
        return new v1beta1PriorityLevelConfigurationService($this->api);
    }

    public function v1alpha1InternalStorageVersion(): StorageVersionService
    {
        return new StorageVersionService($this->api);
    }

    public function v1NetworkingIngressClass(): IngressClassService
    {
        return new IngressClassService($this->api);
    }

    public function v1beta1NetworkingIngressClass(): v1beta1IngressClassService
    {
        return new v1beta1IngressClassService($this->api);
    }

    public function v1NetworkingIngress(): v1IngressService
    {
        return new v1IngressService($this->api);
    }

    public function v1beta1NetworkingIngress(): v1beta1IngressService
    {
        return new v1beta1IngressService($this->api);
    }

    public function v1NetworkingNetworkPolicy(): NetworkPolicyService
    {
        return new NetworkPolicyService($this->api);
    }

    public function v1NodeRuntimeClass(): RuntimeClassService
    {
        return new RuntimeClassService($this->api);
    }

    public function v1alpha1NodeRuntimeClass(): v1alpha1RuntimeClassService
    {
        return new v1alpha1RuntimeClassService($this->api);
    }

    public function v1beta1NodeRuntimeClass(): v1beta1RuntimeClassService
    {
        return new v1beta1RuntimeClassService($this->api);
    }

    public function v1RbacClusterRoleBinding(): ClusterRoleBindingService
    {
        return new ClusterRoleBindingService($this->api);
    }

    public function v1alpha1RbacClusterRoleBinding(): v1alpha1ClusterRoleBindingService
    {
        return new v1alpha1ClusterRoleBindingService($this->api);
    }

    public function v1beta1RbacClusterRoleBinding(): v1beta1ClusterRoleBindingService
    {
        return new v1beta1ClusterRoleBindingService($this->api);
    }

    public function v1RbacClusterRole(): ClusterRoleService
    {
        return new ClusterRoleService($this->api);
    }

    public function v1alpha1RbacClusterRole(): v1alpha1ClusterRoleService
    {
        return new v1alpha1ClusterRoleService($this->api);
    }

    public function v1beta1RbacClusterRole(): v1beta1ClusterRoleService
    {
        return new v1beta1ClusterRoleService($this->api);
    }

    public function v1RbacRoleBinding(): RoleBindingService
    {
        return new RoleBindingService($this->api);
    }

    public function v1alpha1RbacRoleBinding(): v1alpha1RoleBindingService
    {
        return new v1alpha1RoleBindingService($this->api);
    }

    public function v1beta1RbacRoleBinding(): v1beta1RoleBindingService
    {
        return new v1beta1RoleBindingService($this->api);
    }

    public function v1RbacRole(): RoleService
    {
        return new RoleService($this->api);
    }

    public function v1alpha1RbacRole(): v1alpha1RoleService
    {
        return new v1alpha1RoleService($this->api);
    }

    public function v1beta1RbacRole(): v1beta1RoleService
    {
        return new v1beta1RoleService($this->api);
    }

    public function v1SchedulingPriorityClass(): PriorityClassService
    {
        return new PriorityClassService($this->api);
    }

    public function v1alpha1SchedulingPriorityClass(): v1alpha1PriorityClassService
    {
        return new v1alpha1PriorityClassService($this->api);
    }

    public function v1beta1SchedulingPriorityClass(): v1beta1PriorityClassService
    {
        return new v1beta1PriorityClassService($this->api);
    }

    public function v1StorageCSIDriver(): CSIDriverService
    {
        return new CSIDriverService($this->api);
    }

    public function v1beta1StorageCSIDriver(): v1beta1CSIDriverService
    {
        return new v1beta1CSIDriverService($this->api);
    }

    public function v1StorageCSINode(): CSINodeService
    {
        return new CSINodeService($this->api);
    }

    public function v1beta1StorageCSINode(): v1beta1CSINodeService
    {
        return new v1beta1CSINodeService($this->api);
    }

    public function v1StorageStorageClass(): StorageClassService
    {
        return new StorageClassService($this->api);
    }

    public function v1beta1StorageStorageClass(): v1beta1StorageClassService
    {
        return new v1beta1StorageClassService($this->api);
    }

    public function v1StorageVolumeAttachment(): VolumeAttachmentService
    {
        return new VolumeAttachmentService($this->api);
    }

    public function v1alpha1StorageVolumeAttachment(): v1alpha1VolumeAttachmentService
    {
        return new v1alpha1VolumeAttachmentService($this->api);
    }

    public function v1beta1StorageVolumeAttachment(): v1beta1VolumeAttachmentService
    {
        return new v1beta1VolumeAttachmentService($this->api);
    }
}
