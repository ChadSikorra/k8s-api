<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.13.12
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
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;

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
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     */
    public function listNamespaced(array $query = [], ?callable $handler = null): ?ServiceList
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
     *   dryRun
     *   includeUninitialized
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
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function deleteNamespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
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
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespaced(string $name, array $patch, array $query = []): Service
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
     *   dryRun
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
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedStatus(string $name, array $patch, array $query = []): Service
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
     *   dryRun
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
     * @param callable|null $handler
     */
    public function listForAllNamespaces(array $query = [], ?callable $handler = null): ?ServiceList
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
     * Watch individual changes to a list of Service. deprecated: use the 'watch' parameter with a list
     * operation instead.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchNamespacedList(array $query = [], ?callable $handler = null): void
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
     * Watch changes to an object of kind Service. deprecated: use the 'watch' parameter with a list
     * operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     */
    public function watchNamespaced(string $name, array $query = [], ?callable $handler = null): void
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
     * Watch individual changes to a list of Service. deprecated: use the 'watch' parameter with a list
     * operation instead.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchListForAllNamespaces(array $query = [], ?callable $handler = null): void
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
