<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.12.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\ReplicationController;
use K8s\Api\Model\Api\Core\v1\ReplicationControllerList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;

class ReplicationControllerService
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
     * List or watch objects of kind ReplicationController
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
    public function listNamespaced(array $query = [], ?callable $handler = null): ?ReplicationControllerList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ReplicationControllerList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers',
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
     * Delete collection of ReplicationController
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
    public function deleteCollectionNamespaced(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers',
            [],
            $query,
            $this->namespace
        );

        return $this->api->executeHttp(
            $uri,
            'deletecollection',
            $options
        );
    }

    /**
     * Create a ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createNamespaced(ReplicationController $replicationController, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['body'] = $replicationController;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers',
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
     * Read the specified ReplicationController
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readNamespaced(string $name, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}',
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
     * Delete a ReplicationController
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
    public function deleteNamespaced(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}',
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
     * Partially update the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespaced(string $name, array $patch, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}',
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
     * Replace the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespaced(string $name, ReplicationController $replicationController, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['body'] = $replicationController;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}',
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
     * Read status of the specified ReplicationController
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readNamespacedStatus(string $name, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/status',
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
     * Partially update status of the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedStatus(string $name, array $patch, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/status',
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
     * Replace status of the specified ReplicationController
     *
     * Allowed query parameters:
     *   dryRun
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespacedStatus(string $name, ReplicationController $replicationController, array $query = []): ReplicationController
    {
        $options['query'] = $query;
        $options['body'] = $replicationController;
        $options['model'] = ReplicationController::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/replicationcontrollers/{name}/status',
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
     * List or watch objects of kind ReplicationController
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
    public function listForAllNamespaces(array $query = [], ?callable $handler = null): ?ReplicationControllerList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = ReplicationControllerList::class;
        $uri = $this->api->makeUri(
            '/api/v1/replicationcontrollers',
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
     * Watch individual changes to a list of ReplicationController. deprecated: use the 'watch' parameter
     * with a list operation instead.
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
            '/api/v1/watch/namespaces/{namespace}/replicationcontrollers',
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
     * Watch changes to an object of kind ReplicationController. deprecated: use the 'watch' parameter with
     * a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
            '/api/v1/watch/namespaces/{namespace}/replicationcontrollers/{name}',
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
     * Watch individual changes to a list of ReplicationController. deprecated: use the 'watch' parameter
     * with a list operation instead.
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
            '/api/v1/watch/replicationcontrollers',
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
