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

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class PodProxyOptionsService
{
    /** @var ApiInterface */
    private $api;

    /** @var string|null */
    private $namespace;

    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function useNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Connect GET requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectGetNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect DELETE requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectDeleteNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect POST requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPostNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PATCH requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPatchNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PUT requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPutNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectOptionsNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect HEAD requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectHeadNamespacedPodProxy(string $name, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect GET requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectGetNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect DELETE requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectDeleteNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect POST requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPostNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PATCH requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPatchNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect PUT requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectPutNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectOptionsNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'options';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }

    /**
     * Connect HEAD requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#connect-podproxyoptions-v1-core
     */
    public function connectHeadNamespacedPodProxyWithPath(string $name, string $path, array $query = []): string
    {
        $options['query'] = $query;
        $options['method'] = 'head';
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'connect',
            $options
        );
    }
}
