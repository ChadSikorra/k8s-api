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

namespace K8s\Api\Service\Auditregistration\v1alpha1;

use K8s\Api\Model\Api\Auditregistration\v1alpha1\AuditSink;
use K8s\Api\Model\Api\Auditregistration\v1alpha1\AuditSinkList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class AuditSinkService
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
     * List or watch objects of kind AuditSink
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
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#list-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function listAuditregistrationV1alpha1(array $query = [], $handler = null): ?AuditSinkList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = AuditSinkList::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks',
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
     * Delete collection of AuditSink
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
     * @param callable|object|null $handler
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#delete-collection-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function deleteAuditregistrationV1alpha1Collection(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks',
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
     * Create an AuditSink
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#create-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function createAuditregistrationV1alpha1(AuditSink $auditSink, array $query = []): AuditSink
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $auditSink;
        $options['model'] = AuditSink::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks',
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
     * Read the specified AuditSink
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#read-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function readAuditregistrationV1alpha1(string $name, array $query = []): AuditSink
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = AuditSink::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{name}',
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
     * Delete an AuditSink
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#delete-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function deleteAuditregistrationV1alpha1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{name}',
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
     * Partially update the specified AuditSink
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#patch-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function patchAuditregistrationV1alpha1(string $name, PatchInterface $patch, array $query = []): AuditSink
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = AuditSink::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{name}',
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
     * Replace the specified AuditSink
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#put-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function replaceAuditregistrationV1alpha1(string $name, AuditSink $auditSink, array $query = []): AuditSink
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $auditSink;
        $options['model'] = AuditSink::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/auditsinks/{name}',
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
     * Watch individual changes to a list of AuditSink. deprecated: use the 'watch' parameter with a list
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#watchlist-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function watchAuditregistrationV1alpha1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/watch/auditsinks',
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
     * Watch changes to an object of kind AuditSink. deprecated: use the 'watch' parameter with a list
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
     * @param callable|object|null $handler
     * @deprecated Use the 'watch' parameter with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.16/#watch-auditsink-v1alpha1-auditregistration-k8s-io
     */
    public function watchAuditregistrationV1alpha1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/auditregistration.k8s.io/v1alpha1/watch/auditsinks/{name}',
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
