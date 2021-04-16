<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.19.10
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
 * CustomResourceConversion describes how to convert different versions of a CR.
 */
class CustomResourceConversion
{
    /**
     * @Kubernetes\Attribute("strategy",isRequired=true)
     * @var string
     */
    protected $strategy;

    /**
     * @Kubernetes\Attribute("webhook",type="model",model=WebhookConversion::class)
     * @var WebhookConversion|null
     */
    protected $webhook = null;

    /**
     * @param string $strategy
     */
    public function __construct(string $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * strategy specifies how custom resources are converted between versions. Allowed values are: -
     * `None`: The converter only change the apiVersion and would not touch any other field in the custom
     * resource. - `Webhook`: API Server will call to an external webhook to do the conversion. Additional
     * information
     *   is needed for this option. This requires spec.preserveUnknownFields to be false, and
     * spec.conversion.webhook to be set.
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
     * spec.conversion.webhook to be set.
     *
     * @return static
     */
    public function setStrategy(string $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * webhook describes how to call the conversion webhook. Required when `strategy` is set to `Webhook`.
     */
    public function getWebhook(): ?WebhookConversion
    {
        return $this->webhook;
    }

    /**
     * webhook describes how to call the conversion webhook. Required when `strategy` is set to `Webhook`.
     *
     * @return static
     */
    public function setWebhook(WebhookConversion $webhook)
    {
        $this->webhook = $webhook;

        return $this;
    }
}
