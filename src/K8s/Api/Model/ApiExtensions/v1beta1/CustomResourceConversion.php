<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion
{
    /**
     * @Kubernetes\Attribute("conversionReviewVersions")
     * @var string[]|null
     */
    protected $conversionReviewVersions = null;

    /**
     * @Kubernetes\Attribute("strategy",isRequired=true)
     * @var string
     */
    protected $strategy;

    /**
     * @Kubernetes\Attribute("webhookClientConfig",type="model",model=WebhookClientConfig::class)
     * @var WebhookClientConfig|null
     */
    protected $webhookClientConfig = null;

    /**
     * @param string $strategy
     */
    public function __construct(string $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. The API server will use the first version in the list which it supports. If none of the
     * versions specified in this list are supported by API server, conversion will fail for the custom
     * resource. If a persisted Webhook configuration specifies allowed versions and does not include any
     * versions known to the API Server, calls to the webhook will fail. Defaults to `["v1beta1"]`.
     */
    public function getConversionReviewVersions(): ?array
    {
        return $this->conversionReviewVersions;
    }

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. The API server will use the first version in the list which it supports. If none of the
     * versions specified in this list are supported by API server, conversion will fail for the custom
     * resource. If a persisted Webhook configuration specifies allowed versions and does not include any
     * versions known to the API Server, calls to the webhook will fail. Defaults to `["v1beta1"]`.
     *
     * @return static
     */
    public function setConversionReviewVersions(array $conversionReviewVersions)
    {
        $this->conversionReviewVersions = $conversionReviewVersions;

        return $this;
    }

    /**
     * strategy specifies how custom resources are converted between versions. Allowed values are: -
     * `None`: The converter only change the apiVersion and would not touch any other field in the custom
     * resource. - `Webhook`: API Server will call to an external webhook to do the conversion. Additional
     * information
     *   is needed for this option. This requires spec.preserveUnknownFields to be false, and
     * spec.conversion.webhookClientConfig to be set.
     */
    public function getStrategy(): string
    {
        return $this->strategy;
    }

    /**
     * strategy specifies how custom resources are converted between versions. Allowed values are: -
     * `None`: The converter only change the apiVersion and would not touch any other field in the custom
     * resource. - `Webhook`: API Server will call to an external webhook to do the conversion. Additional
     * information
     *   is needed for this option. This requires spec.preserveUnknownFields to be false, and
     * spec.conversion.webhookClientConfig to be set.
     *
     * @return static
     */
    public function setStrategy(string $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * webhookClientConfig is the instructions for how to call the webhook if strategy is `Webhook`.
     * Required when `strategy` is set to `Webhook`.
     */
    public function getWebhookClientConfig(): ?WebhookClientConfig
    {
        return $this->webhookClientConfig;
    }

    /**
     * webhookClientConfig is the instructions for how to call the webhook if strategy is `Webhook`.
     * Required when `strategy` is set to `Webhook`.
     *
     * @return static
     */
    public function setWebhookClientConfig(WebhookClientConfig $webhookClientConfig)
    {
        $this->webhookClientConfig = $webhookClientConfig;

        return $this;
    }
}
