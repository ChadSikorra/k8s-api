<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Apps\v1beta2;

use K8s\Api\Model\Api\Apps\v1beta2\DaemonSet;
use K8s\Api\Model\Api\Apps\v1beta2\DaemonSetList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class DaemonSetService
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
     * List or watch objects of kind DaemonSet
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   pretty
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#list-daemonset-v1beta2-apps
     */
    public function listForAllNamespaces(array $query = [], ?callable $handler = null): ?DaemonSetList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = DaemonSetList::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/daemonsets',
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
     * List or watch objects of kind DaemonSet
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#list-daemonset-v1beta2-apps
     */
    public function listNamespaced(array $query = [], ?callable $handler = null): ?DaemonSetList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = DaemonSetList::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets',
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
     * Delete collection of DaemonSet
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   dryRun
     *   fieldSelector
     *   gracePeriodSeconds
     *   labelSelector
     *   limit
     *   orphanDependents
     *   propagationPolicy
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#delete-collection-daemonset-v1beta2-apps
     */
    public function deleteCollectionNamespaced(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets',
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
     * Create a DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#create-daemonset-v1beta2-apps
     */
    public function createNamespaced(DaemonSet $daemonSet, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['body'] = $daemonSet;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets',
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
     * Read the specified DaemonSet
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#read-daemonset-v1beta2-apps
     */
    public function readNamespaced(string $name, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}',
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
     * Delete a DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#delete-daemonset-v1beta2-apps
     */
    public function deleteNamespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}',
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
     * Partially update the specified DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#patch-daemonset-v1beta2-apps
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}',
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
     * Replace the specified DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#put-daemonset-v1beta2-apps
     */
    public function replaceNamespaced(string $name, DaemonSet $daemonSet, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['body'] = $daemonSet;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}',
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
     * Read status of the specified DaemonSet
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#read-daemonset-v1beta2-apps
     */
    public function readNamespacedStatus(string $name, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}/status',
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
     * Partially update status of the specified DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#patch-daemonset-v1beta2-apps
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}/status',
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
     * Replace status of the specified DaemonSet
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#put-daemonset-v1beta2-apps
     */
    public function replaceNamespacedStatus(string $name, DaemonSet $daemonSet, array $query = []): DaemonSet
    {
        $options['query'] = $query;
        $options['body'] = $daemonSet;
        $options['model'] = DaemonSet::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/namespaces/{namespace}/daemonsets/{name}/status',
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
     * Watch individual changes to a list of DaemonSet. deprecated: use the 'watch' parameter with a list
     * operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watchlist-daemonset-v1beta2-apps
     */
    public function watchListForAllNamespaces(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/watch/daemonsets',
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
     * Watch individual changes to a list of DaemonSet. deprecated: use the 'watch' parameter with a list
     * operation instead.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watchlist-daemonset-v1beta2-apps
     */
    public function watchNamespacedList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/watch/namespaces/{namespace}/daemonsets',
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
     * Watch changes to an object of kind DaemonSet. deprecated: use the 'watch' parameter with a list
     * operation instead, filtered to a single item with the 'fieldSelector' parameter.
     *
     * Allowed query parameters:
     *   allowWatchBookmarks
     *   continue
     *   fieldSelector
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watch-daemonset-v1beta2-apps
     */
    public function watchNamespaced(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/apps/v1beta2/watch/namespaces/{namespace}/daemonsets/{name}',
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
}
