<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.14.10
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
    protected $conversionReviewVersions;

    /**
     * @Kubernetes\Attribute("strategy",isRequired=true)
     * @var string
     */
    protected $strategy;

    /**
     * @Kubernetes\Attribute("webhookClientConfig",type="model",model=WebhookClientConfig::class)
     * @var WebhookClientConfig|null
     */
    protected $webhookClientConfig;

    /**
     * @param string $strategy
     */
    public function __construct(string $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * ConversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. API server will try to use first version in the list which it supports. If none of the
     * versions specified in this list supported by API server, conversion will fail for this object. If a
     * persisted Webhook configuration specifies allowed versions and does not include any versions known
     * to the API Server, calls to the webhook will fail. Default to `['v1beta1']`.
     */
    public function getConversionReviewVersions(): ?array
    {
        return $this->conversionReviewVersions;
    }

    /**
     * ConversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. API server will try to use first version in the list which it supports. If none of the
     * versions specified in this list supported by API server, conversion will fail for this object. If a
     * persisted Webhook configuration specifies allowed versions and does not include any versions known
     * to the API Server, calls to the webhook will fail. Default to `['v1beta1']`.
     *
     * @return static
     */
    public function setConversionReviewVersions(array $conversionReviewVersions)
    {
        $this->conversionReviewVersions = $conversionReviewVersions;

        return $this;
    }

    /**
     * `strategy` specifies the conversion strategy. Allowed values are: - `None`: The converter only
     * change the apiVersion and would not touch any other field in the CR. - `Webhook`: API Server will
     * call to an external webhook to do the conversion. Additional information is needed for this option.
     */
    public function getStrategy(): string
    {
        return $this->strategy;
    }

    /**
     * `strategy` specifies the conversion strategy. Allowed values are: - `None`: The converter only
     * change the apiVersion and would not touch any other field in the CR. - `Webhook`: API Server will
     * call to an external webhook to do the conversion. Additional information is needed for this option.
     *
     * @return static
     */
    public function setStrategy(string $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * `webhookClientConfig` is the instructions for how to call the webhook if strategy is `Webhook`. This
     * field is alpha-level and is only honored by servers that enable the CustomResourceWebhookConversion
     * feature.
     */
    public function getWebhookClientConfig(): ?WebhookClientConfig
    {
        return $this->webhookClientConfig;
    }

    /**
     * `webhookClientConfig` is the instructions for how to call the webhook if strategy is `Webhook`. This
     * field is alpha-level and is only honored by servers that enable the CustomResourceWebhookConversion
     * feature.
     *
     * @return static
     */
    public function setWebhookClientConfig(WebhookClientConfig $webhookClientConfig)
    {
        $this->webhookClientConfig = $webhookClientConfig;

        return $this;
    }
}
