<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.6
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Policy\v1beta1;

use K8s\Api\Model\Api\Policy\v1beta1\PodDisruptionBudget;
use K8s\Api\Model\Api\Policy\v1beta1\PodDisruptionBudgetList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class PodDisruptionBudgetService
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
     * List or watch objects of kind PodDisruptionBudget
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-poddisruptionbudget-v1beta1-policy
     */
    public function listNamespaced(array $query = [], $handler = null): ?PodDisruptionBudgetList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = PodDisruptionBudgetList::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets',
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
     * Delete collection of PodDisruptionBudget
     *
     * Allowed query parameters:
     *   continue
     *   dryRun
     *   fieldSelector
     *   gracePeriodSeconds
     *   labelSelector
     *   limit
     *   orphanDependents
     *   propagationPolicy
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-collection-poddisruptionbudget-v1beta1-policy
     */
    public function deleteCollectionNamespaced(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets',
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
     * Create a PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-poddisruptionbudget-v1beta1-policy
     */
    public function createNamespaced(PodDisruptionBudget $podDisruptionBudget, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $podDisruptionBudget;
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets',
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
     * Read the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-poddisruptionbudget-v1beta1-policy
     */
    public function readNamespaced(string $name, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}',
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
     * Delete a PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-poddisruptionbudget-v1beta1-policy
     */
    public function deleteNamespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}',
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
     * Partially update the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-poddisruptionbudget-v1beta1-policy
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}',
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
     * Replace the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-poddisruptionbudget-v1beta1-policy
     */
    public function replaceNamespaced(string $name, PodDisruptionBudget $podDisruptionBudget, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $podDisruptionBudget;
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}',
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
     * Read status of the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-poddisruptionbudget-v1beta1-policy
     */
    public function readNamespacedStatus(string $name, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status',
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
     * Partially update status of the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-poddisruptionbudget-v1beta1-policy
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status',
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
     * Replace status of the specified PodDisruptionBudget
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-poddisruptionbudget-v1beta1-policy
     */
    public function replaceNamespacedStatus(string $name, PodDisruptionBudget $podDisruptionBudget, array $query = []): PodDisruptionBudget
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $podDisruptionBudget;
        $options['model'] = PodDisruptionBudget::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/namespaces/{namespace}/poddisruptionbudgets/{name}/status',
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
     * List or watch objects of kind PodDisruptionBudget
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-poddisruptionbudget-v1beta1-policy
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?PodDisruptionBudgetList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = PodDisruptionBudgetList::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/poddisruptionbudgets',
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
     * Watch individual changes to a list of PodDisruptionBudget. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-poddisruptionbudget-v1beta1-policy
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/watch/namespaces/{namespace}/poddisruptionbudgets',
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
     * Watch changes to an object of kind PodDisruptionBudget. deprecated: use the 'watch' parameter with a
     * list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watch-poddisruptionbudget-v1beta1-policy
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/watch/namespaces/{namespace}/poddisruptionbudgets/{name}',
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
     * Watch individual changes to a list of PodDisruptionBudget. deprecated: use the 'watch' parameter
     * with a list operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-poddisruptionbudget-v1beta1-policy
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/policy/v1beta1/watch/poddisruptionbudgets',
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
