<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Storage\v1;

use K8s\Api\Model\Api\Storage\v1\StorageClass;
use K8s\Api\Model\Api\Storage\v1\StorageClassList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class StorageClassService
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
     * List or watch objects of kind StorageClass
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
     * @param callable|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#list-storageclass-v1-storage-k8s-io
     */
    public function listStorageV1(array $query = [], ?callable $handler = null): ?StorageClassList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = StorageClassList::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses',
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
     * Delete collection of StorageClass
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#delete-collection-storageclass-v1-storage-k8s-io
     */
    public function deleteStorageV1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses',
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
     * Create a StorageClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#create-storageclass-v1-storage-k8s-io
     */
    public function createStorageV1(StorageClass $storageClass, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['body'] = $storageClass;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses',
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
     * Read the specified StorageClass
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#read-storageclass-v1-storage-k8s-io
     */
    public function readStorageV1(string $name, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses/{name}',
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
     * Delete a StorageClass
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#delete-storageclass-v1-storage-k8s-io
     */
    public function deleteStorageV1(string $name, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses/{name}',
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
     * Partially update the specified StorageClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#patch-storageclass-v1-storage-k8s-io
     */
    public function patchStorageV1(string $name, PatchInterface $patch, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses/{name}',
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
     * Replace the specified StorageClass
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#put-storageclass-v1-storage-k8s-io
     */
    public function replaceStorageV1(string $name, StorageClass $storageClass, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['body'] = $storageClass;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/storageclasses/{name}',
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
     * Watch individual changes to a list of StorageClass. deprecated: use the 'watch' parameter with a
     * list operation instead.
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
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#watchlist-storageclass-v1-storage-k8s-io
     */
    public function watchStorageV1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/watch/storageclasses',
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
     * Watch changes to an object of kind StorageClass. deprecated: use the 'watch' parameter with a list
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
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#watch-storageclass-v1-storage-k8s-io
     */
    public function watchStorageV1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1/watch/storageclasses/{name}',
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
