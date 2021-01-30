<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\FlowControl\ApiServer\v1alpha1;

use K8s\Api\Model\Api\FlowControl\v1alpha1\FlowSchema;
use K8s\Api\Model\Api\FlowControl\v1alpha1\FlowSchemaList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class FlowSchemaService
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
     * List or watch objects of kind FlowSchema
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#list-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function listFlowControlApiServerV1alpha1(array $query = [], ?callable $handler = null): ?FlowSchemaList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = FlowSchemaList::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas',
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
     * Delete collection of FlowSchema
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#delete-collection-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function deleteFlowControlApiServerV1alpha1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas',
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
     * Create a FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#create-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function createFlowControlApiServerV1alpha1(FlowSchema $flowSchema, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['body'] = $flowSchema;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas',
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
     * Read the specified FlowSchema
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#read-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function readFlowControlApiServerV1alpha1(string $name, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}',
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
     * Delete a FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#delete-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function deleteFlowControlApiServerV1alpha1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}',
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
     * Partially update the specified FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#patch-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function patchFlowControlApiServerV1alpha1(string $name, PatchInterface $patch, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}',
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
     * Replace the specified FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#put-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function replaceFlowControlApiServerV1alpha1(string $name, FlowSchema $flowSchema, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['body'] = $flowSchema;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}',
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
     * Read status of the specified FlowSchema
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#read-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function readFlowControlApiServerV1alpha1Status(string $name, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}/status',
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
     * Partially update status of the specified FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#patch-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function patchFlowControlApiServerV1alpha1Status(string $name, PatchInterface $patch, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}/status',
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
     * Replace status of the specified FlowSchema
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#put-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function replaceFlowControlApiServerV1alpha1Status(string $name, FlowSchema $flowSchema, array $query = []): FlowSchema
    {
        $options['query'] = $query;
        $options['body'] = $flowSchema;
        $options['model'] = FlowSchema::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/flowschemas/{name}/status',
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
     * Watch individual changes to a list of FlowSchema. deprecated: use the 'watch' parameter with a list
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
     *   resourceVersionMatch
     *   timeoutSeconds
     *   watch
     *
     * @param array $query
     * @param callable|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#watchlist-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function watchFlowControlApiServerV1alpha1List(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/flowschemas',
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
     * Watch changes to an object of kind FlowSchema. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#watch-flowschema-v1alpha1-flowcontrol-apiserver-k8s-io
     */
    public function watchFlowControlApiServerV1alpha1(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/flowcontrol.apiserver.k8s.io/v1alpha1/watch/flowschemas/{name}',
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
