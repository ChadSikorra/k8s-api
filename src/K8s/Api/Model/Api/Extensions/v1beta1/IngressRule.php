<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IngressRule represents the rules mapping the paths under a specified host to the related backend
 * services. Incoming requests are first evaluated for a host match, then routed to the backend
 * associated with the matching IngressRuleValue.
 */
class IngressRule
{
    /**
     * @Kubernetes\Attribute("host")
     * @var string|null
     */
    protected $host;

    /**
     * @Kubernetes\Attribute("http",type="model",model=HTTPIngressRuleValue::class)
     * @var HTTPIngressRuleValue|null
     */
    protected $http;

    /**
     * @param string|null $host
     * @param HTTPIngressRuleValue|null $http
     */
    public function __construct(?string $host = null, ?HTTPIngressRuleValue $http = null)
    {
        $this->host = $host;
        $this->http = $http;
    }

    /**
     * Host is the fully qualified domain name of a network host, as defined by RFC 3986. Note the
     * following deviations from the "host" part of the URI as defined in the RFC: 1. IPs are not allowed.
     * Currently an IngressRuleValue can only apply to the
     *       IP in the Spec of the parent Ingress.
     * 2. The `:` delimiter is not respected because ports are not allowed.
     *       Currently the port of an Ingress is implicitly :80 for http and
     *       :443 for https.
     * Both these may change in the future. Incoming requests are matched against the host before the
     * IngressRuleValue. If the host is unspecified, the Ingress routes all traffic based on the specified
     * IngressRuleValue.
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * Host is the fully qualified domain name of a network host, as defined by RFC 3986. Note the
     * following deviations from the "host" part of the URI as defined in the RFC: 1. IPs are not allowed.
     * Currently an IngressRuleValue can only apply to the
     *       IP in the Spec of the parent Ingress.
     * 2. The `:` delimiter is not respected because ports are not allowed.
     *       Currently the port of an Ingress is implicitly :80 for http and
     *       :443 for https.
     * Both these may change in the future. Incoming requests are matched against the host before the
     * IngressRuleValue. If the host is unspecified, the Ingress routes all traffic based on the specified
     * IngressRuleValue.
     *
     * @return static
     */
    public function setHost(string $host)
    {
        $this->host = $host;

        return $this;
    }

    public function getHttp(): ?HTTPIngressRuleValue
    {
        return $this->http;
    }

    /**
     * @return static
     */
    public function setHttp(HTTPIngressRuleValue $http)
    {
        $this->http = $http;

        return $this;
    }
}
