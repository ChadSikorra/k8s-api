<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * WebhookConversion describes how to call a conversion webhook
 */
class WebhookConversion
{
    /**
     * @Kubernetes\Attribute("clientConfig",type="model",model=WebhookClientConfig::class)
     * @var WebhookClientConfig|null
     */
    protected $clientConfig = null;

    /**
     * @Kubernetes\Attribute("conversionReviewVersions",isRequired=true)
     * @var string[]
     */
    protected $conversionReviewVersions;

    /**
     * @param string[] $conversionReviewVersions
     */
    public function __construct(array $conversionReviewVersions)
    {
        $this->conversionReviewVersions = $conversionReviewVersions;
    }

    /**
     * clientConfig is the instructions for how to call the webhook if strategy is `Webhook`.
     */
    public function getClientConfig(): ?WebhookClientConfig
    {
        return $this->clientConfig;
    }

    /**
     * clientConfig is the instructions for how to call the webhook if strategy is `Webhook`.
     *
     * @return static
     */
    public function setClientConfig(WebhookClientConfig $clientConfig)
    {
        $this->clientConfig = $clientConfig;

        return $this;
    }

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. The API server will use the first version in the list which it supports. If none of the
     * versions specified in this list are supported by API server, conversion will fail for the custom
     * resource. If a persisted Webhook configuration specifies allowed versions and does not include any
     * versions known to the API Server, calls to the webhook will fail.
     */
    public function getConversionReviewVersions(): array
    {
        return $this->conversionReviewVersions;
    }

    /**
     * conversionReviewVersions is an ordered list of preferred `ConversionReview` versions the Webhook
     * expects. The API server will use the first version in the list which it supports. If none of the
     * versions specified in this list are supported by API server, conversion will fail for the custom
     * resource. If a persisted Webhook configuration specifies allowed versions and does not include any
     * versions known to the API Server, calls to the webhook will fail.
     *
     * @return static
     */
    public function setConversionReviewVersions(array $conversionReviewVersions)
    {
        $this->conversionReviewVersions = $conversionReviewVersions;

        return $this;
    }
}
