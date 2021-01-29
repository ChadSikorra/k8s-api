<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\AdmissionRegistration\v1;

use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\LabelSelector;
use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * ValidatingWebhook describes an admission webhook and the resources and operations it applies to.
 */
class ValidatingWebhook
{
    /**
     * @Kubernetes\Attribute("admissionReviewVersions",isRequired=true)
     * @var string[]
     */
    protected $admissionReviewVersions = null;

    /**
     * @Kubernetes\Attribute("clientConfig",type="model",model=WebhookClientConfig::class,isRequired=true)
     * @var WebhookClientConfig
     */
    protected $clientConfig = null;

    /**
     * @Kubernetes\Attribute("failurePolicy")
     * @var string|null
     */
    protected $failurePolicy = null;

    /**
     * @Kubernetes\Attribute("matchPolicy")
     * @var string|null
     */
    protected $matchPolicy = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespaceSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $namespaceSelector = null;

    /**
     * @Kubernetes\Attribute("objectSelector",type="model",model=LabelSelector::class)
     * @var LabelSelector|null
     */
    protected $objectSelector = null;

    /**
     * @Kubernetes\Attribute("rules",type="collection",model=RuleWithOperations::class)
     * @var iterable|RuleWithOperations[]|null
     */
    protected $rules = null;

    /**
     * @Kubernetes\Attribute("sideEffects",isRequired=true)
     * @var string
     */
    protected $sideEffects = null;

    /**
     * @Kubernetes\Attribute("timeoutSeconds")
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * @param string[] $admissionReviewVersions
     * @param WebhookClientConfig $clientConfig
     * @param string $name
     * @param string $sideEffects
     */
    public function __construct(array $admissionReviewVersions, WebhookClientConfig $clientConfig, string $name, string $sideEffects)
    {
        $this->admissionReviewVersions = $admissionReviewVersions;
        $this->clientConfig = $clientConfig;
        $this->name = $name;
        $this->sideEffects = $sideEffects;
    }

    /**
     * AdmissionReviewVersions is an ordered list of preferred `AdmissionReview` versions the Webhook
     * expects. API server will try to use first version in the list which it supports. If none of the
     * versions specified in this list supported by API server, validation will fail for this object. If a
     * persisted webhook configuration specifies allowed versions and does not include any versions known
     * to the API Server, calls to the webhook will fail and be subject to the failure policy.
     */
    public function getAdmissionReviewVersions(): array
    {
        return $this->admissionReviewVersions;
    }

    /**
     * AdmissionReviewVersions is an ordered list of preferred `AdmissionReview` versions the Webhook
     * expects. API server will try to use first version in the list which it supports. If none of the
     * versions specified in this list supported by API server, validation will fail for this object. If a
     * persisted webhook configuration specifies allowed versions and does not include any versions known
     * to the API Server, calls to the webhook will fail and be subject to the failure policy.
     *
     * @return static
     */
    public function setAdmissionReviewVersions(array $admissionReviewVersions)
    {
        $this->admissionReviewVersions = $admissionReviewVersions;

        return $this;
    }

    /**
     * ClientConfig defines how to communicate with the hook. Required
     */
    public function getClientConfig(): WebhookClientConfig
    {
        return $this->clientConfig;
    }

    /**
     * ClientConfig defines how to communicate with the hook. Required
     *
     * @return static
     */
    public function setClientConfig(WebhookClientConfig $clientConfig)
    {
        $this->clientConfig = $clientConfig;

        return $this;
    }

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are handled - allowed
     * values are Ignore or Fail. Defaults to Fail.
     */
    public function getFailurePolicy(): ?string
    {
        return $this->failurePolicy;
    }

    /**
     * FailurePolicy defines how unrecognized errors from the admission endpoint are handled - allowed
     * values are Ignore or Fail. Defaults to Fail.
     *
     * @return static
     */
    public function setFailurePolicy(string $failurePolicy)
    {
        $this->failurePolicy = $failurePolicy;

        return $this;
    }

    /**
     * matchPolicy defines how the "rules" list is used to match incoming requests. Allowed values are
     * "Exact" or "Equivalent".
     *
     * - Exact: match a request only if it exactly matches a specified rule. For example, if deployments
     * can be modified via apps/v1, apps/v1beta1, and extensions/v1beta1, but "rules" only included
     * `apiGroups:["apps"], apiVersions:["v1"], resources: ["deployments"]`, a request to apps/v1beta1 or
     * extensions/v1beta1 would not be sent to the webhook.
     *
     * - Equivalent: match a request if modifies a resource listed in rules, even via another API group or
     * version. For example, if deployments can be modified via apps/v1, apps/v1beta1, and
     * extensions/v1beta1, and "rules" only included `apiGroups:["apps"], apiVersions:["v1"], resources:
     * ["deployments"]`, a request to apps/v1beta1 or extensions/v1beta1 would be converted to apps/v1 and
     * sent to the webhook.
     *
     * Defaults to "Equivalent"
     */
    public function getMatchPolicy(): ?string
    {
        return $this->matchPolicy;
    }

    /**
     * matchPolicy defines how the "rules" list is used to match incoming requests. Allowed values are
     * "Exact" or "Equivalent".
     *
     * - Exact: match a request only if it exactly matches a specified rule. For example, if deployments
     * can be modified via apps/v1, apps/v1beta1, and extensions/v1beta1, but "rules" only included
     * `apiGroups:["apps"], apiVersions:["v1"], resources: ["deployments"]`, a request to apps/v1beta1 or
     * extensions/v1beta1 would not be sent to the webhook.
     *
     * - Equivalent: match a request if modifies a resource listed in rules, even via another API group or
     * version. For example, if deployments can be modified via apps/v1, apps/v1beta1, and
     * extensions/v1beta1, and "rules" only included `apiGroups:["apps"], apiVersions:["v1"], resources:
     * ["deployments"]`, a request to apps/v1beta1 or extensions/v1beta1 would be converted to apps/v1 and
     * sent to the webhook.
     *
     * Defaults to "Equivalent"
     *
     * @return static
     */
    public function setMatchPolicy(string $matchPolicy)
    {
        $this->matchPolicy = $matchPolicy;

        return $this;
    }

    /**
     * The name of the admission webhook. Name should be fully qualified, e.g., imagepolicy.kubernetes.io,
     * where "imagepolicy" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the admission webhook. Name should be fully qualified, e.g., imagepolicy.kubernetes.io,
     * where "imagepolicy" is the name of the webhook, and kubernetes.io is the name of the organization.
     * Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * NamespaceSelector decides whether to run the webhook on an object based on whether the namespace for
     * that object matches the selector. If the object itself is a namespace, the matching is performed on
     * object.metadata.labels. If the object is another cluster scoped resource, it never skips the
     * webhook.
     *
     * For example, to run the webhook on any objects whose namespace is not associated with "runlevel" of
     * "0" or "1";  you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "runlevel",
     *       "operator": "NotIn",
     *       "values": [
     *         "0",
     *         "1"
     *       ]
     *     }
     *   ]
     * }
     *
     * If instead you want to only run the webhook on any objects whose namespace is associated with the
     * "environment" of "prod" or "staging"; you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "environment",
     *       "operator": "In",
     *       "values": [
     *         "prod",
     *         "staging"
     *       ]
     *     }
     *   ]
     * }
     *
     * See https://kubernetes.io/docs/concepts/overview/working-with-objects/labels for more examples of
     * label selectors.
     *
     * Default to the empty LabelSelector, which matches everything.
     */
    public function getNamespaceSelector(): ?LabelSelector
    {
        return $this->namespaceSelector;
    }

    /**
     * NamespaceSelector decides whether to run the webhook on an object based on whether the namespace for
     * that object matches the selector. If the object itself is a namespace, the matching is performed on
     * object.metadata.labels. If the object is another cluster scoped resource, it never skips the
     * webhook.
     *
     * For example, to run the webhook on any objects whose namespace is not associated with "runlevel" of
     * "0" or "1";  you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "runlevel",
     *       "operator": "NotIn",
     *       "values": [
     *         "0",
     *         "1"
     *       ]
     *     }
     *   ]
     * }
     *
     * If instead you want to only run the webhook on any objects whose namespace is associated with the
     * "environment" of "prod" or "staging"; you will set the selector as follows: "namespaceSelector": {
     *   "matchExpressions": [
     *     {
     *       "key": "environment",
     *       "operator": "In",
     *       "values": [
     *         "prod",
     *         "staging"
     *       ]
     *     }
     *   ]
     * }
     *
     * See https://kubernetes.io/docs/concepts/overview/working-with-objects/labels for more examples of
     * label selectors.
     *
     * Default to the empty LabelSelector, which matches everything.
     *
     * @return static
     */
    public function setNamespaceSelector(LabelSelector $namespaceSelector)
    {
        $this->namespaceSelector = $namespaceSelector;

        return $this;
    }

    /**
     * ObjectSelector decides whether to run the webhook based on if the object has matching labels.
     * objectSelector is evaluated against both the oldObject and newObject that would be sent to the
     * webhook, and is considered to match if either object matches the selector. A null object (oldObject
     * in the case of create, or newObject in the case of delete) or an object that cannot have labels
     * (like a DeploymentRollback or a PodProxyOptions object) is not considered to match. Use the object
     * selector only if the webhook is opt-in, because end users may skip the admission webhook by setting
     * the labels. Default to the empty LabelSelector, which matches everything.
     */
    public function getObjectSelector(): ?LabelSelector
    {
        return $this->objectSelector;
    }

    /**
     * ObjectSelector decides whether to run the webhook based on if the object has matching labels.
     * objectSelector is evaluated against both the oldObject and newObject that would be sent to the
     * webhook, and is considered to match if either object matches the selector. A null object (oldObject
     * in the case of create, or newObject in the case of delete) or an object that cannot have labels
     * (like a DeploymentRollback or a PodProxyOptions object) is not considered to match. Use the object
     * selector only if the webhook is opt-in, because end users may skip the admission webhook by setting
     * the labels. Default to the empty LabelSelector, which matches everything.
     *
     * @return static
     */
    public function setObjectSelector(LabelSelector $objectSelector)
    {
        $this->objectSelector = $objectSelector;

        return $this;
    }

    /**
     * Rules describes what operations on what resources/subresources the webhook cares about. The webhook
     * cares about an operation if it matches _any_ Rule. However, in order to prevent
     * ValidatingAdmissionWebhooks and MutatingAdmissionWebhooks from putting the cluster in a state which
     * cannot be recovered from without completely disabling the plugin, ValidatingAdmissionWebhooks and
     * MutatingAdmissionWebhooks are never called on admission requests for ValidatingWebhookConfiguration
     * and MutatingWebhookConfiguration objects.
     *
     * @return iterable|RuleWithOperations[]
     */
    public function getRules(): ?iterable
    {
        return $this->rules;
    }

    /**
     * Rules describes what operations on what resources/subresources the webhook cares about. The webhook
     * cares about an operation if it matches _any_ Rule. However, in order to prevent
     * ValidatingAdmissionWebhooks and MutatingAdmissionWebhooks from putting the cluster in a state which
     * cannot be recovered from without completely disabling the plugin, ValidatingAdmissionWebhooks and
     * MutatingAdmissionWebhooks are never called on admission requests for ValidatingWebhookConfiguration
     * and MutatingWebhookConfiguration objects.
     *
     * @return static
     */
    public function setRules(iterable $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @return static
     */
    public function addRules(RuleWithOperations $rule)
    {
        if (!$this->rules) {
            $this->rules = new Collection();
        }
        $this->rules[] = $rule;

        return $this;
    }

    /**
     * SideEffects states whether this webhook has side effects. Acceptable values are: None, NoneOnDryRun
     * (webhooks created via v1beta1 may also specify Some or Unknown). Webhooks with side effects MUST
     * implement a reconciliation system, since a request may be rejected by a future step in the admission
     * change and the side effects therefore need to be undone. Requests with the dryRun attribute will be
     * auto-rejected if they match a webhook with sideEffects == Unknown or Some.
     */
    public function getSideEffects(): string
    {
        return $this->sideEffects;
    }

    /**
     * SideEffects states whether this webhook has side effects. Acceptable values are: None, NoneOnDryRun
     * (webhooks created via v1beta1 may also specify Some or Unknown). Webhooks with side effects MUST
     * implement a reconciliation system, since a request may be rejected by a future step in the admission
     * change and the side effects therefore need to be undone. Requests with the dryRun attribute will be
     * auto-rejected if they match a webhook with sideEffects == Unknown or Some.
     *
     * @return static
     */
    public function setSideEffects(string $sideEffects)
    {
        $this->sideEffects = $sideEffects;

        return $this;
    }

    /**
     * TimeoutSeconds specifies the timeout for this webhook. After the timeout passes, the webhook call
     * will be ignored or the API call will fail based on the failure policy. The timeout value must be
     * between 1 and 30 seconds. Default to 10 seconds.
     */
    public function getTimeoutSeconds(): ?int
    {
        return $this->timeoutSeconds;
    }

    /**
     * TimeoutSeconds specifies the timeout for this webhook. After the timeout passes, the webhook call
     * will be ignored or the API call will fail based on the failure policy. The timeout value must be
     * between 1 and 30 seconds. Default to 10 seconds.
     *
     * @return static
     */
    public function setTimeoutSeconds(int $timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;

        return $this;
    }
}
