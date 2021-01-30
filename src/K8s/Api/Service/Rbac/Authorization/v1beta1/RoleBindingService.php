<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Rbac\Authorization\v1beta1;

use K8s\Api\Model\Api\Rbac\v1beta1\RoleBinding;
use K8s\Api\Model\Api\Rbac\v1beta1\RoleBindingList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class RoleBindingService
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
     * List or watch objects of kind RoleBinding
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#list-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function listRbacAuthorizationV1beta1Namespaced(array $query = [], ?callable $handler = null): ?RoleBindingList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = RoleBindingList::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings',
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
     * Delete collection of RoleBinding
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#delete-collection-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function deleteRbacAuthorizationV1beta1CollectionNamespaced(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings',
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
     * Create a RoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#create-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function createRbacAuthorizationV1beta1Namespaced(RoleBinding $roleBinding, array $query = []): RoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $roleBinding;
        $options['model'] = RoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings',
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
     * Read the specified RoleBinding
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#read-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function readRbacAuthorizationV1beta1Namespaced(string $name, array $query = []): RoleBinding
    {
        $options['query'] = $query;
        $options['model'] = RoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name}',
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
     * Delete a RoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#delete-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function deleteRbacAuthorizationV1beta1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name}',
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
     * Partially update the specified RoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#patch-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function patchRbacAuthorizationV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): RoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = RoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name}',
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
     * Replace the specified RoleBinding
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#put-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function replaceRbacAuthorizationV1beta1Namespaced(string $name, RoleBinding $roleBinding, array $query = []): RoleBinding
    {
        $options['query'] = $query;
        $options['body'] = $roleBinding;
        $options['model'] = RoleBinding::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{namespace}/rolebindings/{name}',
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
     * List or watch objects of kind RoleBinding
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#list-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function listRbacAuthorizationV1beta1ForAllNamespaces(array $query = [], ?callable $handler = null): ?RoleBindingList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = RoleBindingList::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/rolebindings',
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
     * Watch individual changes to a list of RoleBinding. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watchlist-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function watchRbacAuthorizationV1beta1NamespacedList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/rolebindings',
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
     * Watch changes to an object of kind RoleBinding. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watch-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function watchRbacAuthorizationV1beta1Namespaced(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{namespace}/rolebindings/{name}',
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
     * Watch individual changes to a list of RoleBinding. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#watchlist-rolebinding-v1beta1-rbac-authorization-k8s-io
     */
    public function watchRbacAuthorizationV1beta1ListForAllNamespaces(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/rbac.authorization.k8s.io/v1beta1/watch/rolebindings',
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
