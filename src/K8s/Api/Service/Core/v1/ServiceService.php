<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\Service;
use K8s\Api\Model\Api\Core\v1\ServiceList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class ServiceService
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
     * List or watch objects of kind Service
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function listNamespaced(array $query = [], $handler = null): ?ServiceList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ServiceList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'list',
            $options
        );
    }

    /**
     * Create a Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function createNamespaced(Service $service, array $query = []): Service
    {
        $options['query'] = $query;
        $options['body'] = $service;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'post',
            $options
        );
    }

    /**
     * Read the specified Service
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readNamespaced(string $name, array $query = []): Service
    {
        $options['query'] = $query;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'get',
            $options
        );
    }

    /**
     * Delete a Service
     *
     * Allowed query parameters:
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function deleteNamespaced(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'delete',
            $options
        );
    }

    /**
     * Partially update the specified Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): Service
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'patch',
            $options
        );
    }

    /**
     * Replace the specified Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespaced(string $name, Service $service, array $query = []): Service
    {
        $options['query'] = $query;
        $options['body'] = $service;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'put',
            $options
        );
    }

    /**
     * Connect GET requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectDeleteNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPatchNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPutNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectOptionsNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectHeadNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectDeleteNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPatchNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPutNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectOptionsNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Service
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectHeadNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Read status of the specified Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readNamespacedStatus(string $name, array $query = []): Service
    {
        $options['query'] = $query;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'get',
            $options
        );
    }

    /**
     * Partially update status of the specified Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): Service
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'patch',
            $options
        );
    }

    /**
     * Replace status of the specified Service
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespacedStatus(string $name, Service $service, array $query = []): Service
    {
        $options['query'] = $query;
        $options['body'] = $service;
        $options['model'] = Service::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/services/{name}/status',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'put',
            $options
        );
    }

    /**
     * List or watch objects of kind Service
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?ServiceList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ServiceList::class;
        $uri = $this->api->makeUri(
            '/api/v1/services',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'list',
            $options
        );
    }

    /**
     * Watch individual changes to a list of Service
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/services',
            [],
            $query,
            $this->namespace
        );

        $this->api->executeHttp(
            $uri,
            'watchlist',
            $options
        );
    }

    /**
     * Watch changes to an object of kind Service
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/services/{name}',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeHttp(
            $uri,
            'watch',
            $options
        );
    }

    /**
     * Watch individual changes to a list of Service
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/services',
            [],
            $query,
            $this->namespace
        );

        $this->api->executeHttp(
            $uri,
            'watchlist',
            $options
        );
    }
}
