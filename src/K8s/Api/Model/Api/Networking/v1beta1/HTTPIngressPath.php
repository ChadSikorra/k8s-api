<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Networking\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * HTTPIngressPath associates a path regex with a backend. Incoming urls matching the path are
 * forwarded to the backend.
 */
class HTTPIngressPath
{
    /**
     * @Kubernetes\Attribute("backend",type="model",model=IngressBackend::class,isRequired=true)
     * @var IngressBackend
     */
    protected $backend;

    /**
     * @Kubernetes\Attribute("path")
     * @var string|null
     */
    protected $path = null;

    /**
     * @param IngressBackend $backend
     */
    public function __construct(IngressBackend $backend)
    {
        $this->backend = $backend;
    }

    /**
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     */
    public function getBackend(): IngressBackend
    {
        return $this->backend;
    }

    /**
     * Backend defines the referenced service endpoint to which the traffic will be forwarded to.
     *
     * @return static
     */
    public function setBackend(IngressBackend $backend)
    {
        $this->backend = $backend;

        return $this;
    }

    /**
     * Path is an extended POSIX regex as defined by IEEE Std 1003.1, (i.e this follows the egrep/unix
     * syntax, not the perl syntax) matched against the path of an incoming request. Currently it can
     * contain characters disallowed from the conventional "path" part of a URL as defined by RFC 3986.
     * Paths must begin with a '/'. If unspecified, the path defaults to a catch all sending traffic to the
     * backend.
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * Path is an extended POSIX regex as defined by IEEE Std 1003.1, (i.e this follows the egrep/unix
     * syntax, not the perl syntax) matched against the path of an incoming request. Currently it can
     * contain characters disallowed from the conventional "path" part of a URL as defined by RFC 3986.
     * Paths must begin with a '/'. If unspecified, the path defaults to a catch all sending traffic to the
     * backend.
     *
     * @return static
     */
    public function setPath(string $path)
    {
        $this->path = $path;

        return $this;
    }
}
