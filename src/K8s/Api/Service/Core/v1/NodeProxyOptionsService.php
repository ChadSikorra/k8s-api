<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Core\Contract\ApiInterface;

class NodeProxyOptionsService
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
     * Connect GET requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectGetNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectDeleteNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPostNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPatchNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPutNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectOptionsNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectHeadNodeProxy(string $name, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectGetNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectDeleteNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPostNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPatchNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectPutNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectOptionsNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Node
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#connect-nodeproxyoptions-v1-core
     */
    public function connectHeadNodeProxyWithPath(string $name, string $path, callable $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/nodes/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }
}
