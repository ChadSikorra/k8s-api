<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.13.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Storage\v1beta1;

use K8s\Api\Model\Api\Storage\v1beta1\StorageClass;
use K8s\Api\Model\Api\Storage\v1beta1\StorageClassList;
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
     * @param callable|object|null $handler
     */
    public function listStorageV1beta1(array $query = [], $handler = null): ?StorageClassList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = StorageClassList::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses',
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
     * @param callable|object|null $handler
     */
    public function deleteStorageV1beta1Collection(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses',
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
     *   includeUninitialized
     *   pretty
     *
     * @param array $query
     */
    public function createStorageV1beta1(StorageClass $storageClass, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $storageClass;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses',
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
     */
    public function readStorageV1beta1(string $name, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses/{name}',
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
     */
    public function deleteStorageV1beta1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses/{name}',
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
     *   pretty
     *
     * @param array $query
     */
    public function patchStorageV1beta1(string $name, PatchInterface $patch, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses/{name}',
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
     *   pretty
     *
     * @param array $query
     */
    public function replaceStorageV1beta1(string $name, StorageClass $storageClass, array $query = []): StorageClass
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $storageClass;
        $options['model'] = StorageClass::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/storageclasses/{name}',
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
     * @deprecated Use the 'watch' parameter with a list operation instead.
     */
    public function watchStorageV1beta1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/watch/storageclasses',
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
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     */
    public function watchStorageV1beta1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/storage.k8s.io/v1beta1/watch/storageclasses/{name}',
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
