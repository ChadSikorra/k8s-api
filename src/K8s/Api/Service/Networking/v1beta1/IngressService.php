<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Networking\v1beta1;

use K8s\Api\Model\Api\Networking\v1beta1\Ingress;
use K8s\Api\Model\Api\Networking\v1beta1\IngressList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class IngressService
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
     * List or watch objects of kind Ingress
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#list-ingress-v1beta1-networking-k8s-io
     */
    public function listNetworkingV1beta1ForAllNamespaces(array $query = [], ?callable $handler = null): ?IngressList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = IngressList::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/ingresses',
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
     * List or watch objects of kind Ingress
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#list-ingress-v1beta1-networking-k8s-io
     */
    public function listNetworkingV1beta1Namespaced(array $query = [], ?callable $handler = null): ?IngressList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = IngressList::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses',
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
     * Delete collection of Ingress
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#delete-collection-ingress-v1beta1-networking-k8s-io
     */
    public function deleteNetworkingV1beta1CollectionNamespaced(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses',
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
     * Create an Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#create-ingress-v1beta1-networking-k8s-io
     */
    public function createNetworkingV1beta1Namespaced(Ingress $ingress, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['body'] = $ingress;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses',
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
     * Read the specified Ingress
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#read-ingress-v1beta1-networking-k8s-io
     */
    public function readNetworkingV1beta1Namespaced(string $name, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}',
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
     * Delete an Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#delete-ingress-v1beta1-networking-k8s-io
     */
    public function deleteNetworkingV1beta1Namespaced(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}',
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
     * Partially update the specified Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#patch-ingress-v1beta1-networking-k8s-io
     */
    public function patchNetworkingV1beta1Namespaced(string $name, PatchInterface $patch, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}',
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
     * Replace the specified Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#put-ingress-v1beta1-networking-k8s-io
     */
    public function replaceNetworkingV1beta1Namespaced(string $name, Ingress $ingress, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['body'] = $ingress;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}',
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
     * Read status of the specified Ingress
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#read-ingress-v1beta1-networking-k8s-io
     */
    public function readNetworkingV1beta1NamespacedStatus(string $name, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}/status',
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
     * Partially update status of the specified Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#patch-ingress-v1beta1-networking-k8s-io
     */
    public function patchNetworkingV1beta1NamespacedStatus(string $name, PatchInterface $patch, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}/status',
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
     * Replace status of the specified Ingress
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#put-ingress-v1beta1-networking-k8s-io
     */
    public function replaceNetworkingV1beta1NamespacedStatus(string $name, Ingress $ingress, array $query = []): Ingress
    {
        $options['query'] = $query;
        $options['body'] = $ingress;
        $options['model'] = Ingress::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/namespaces/{namespace}/ingresses/{name}/status',
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
     * Watch individual changes to a list of Ingress. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watchlist-ingress-v1beta1-networking-k8s-io
     */
    public function watchNetworkingV1beta1ListForAllNamespaces(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/watch/ingresses',
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
     * Watch individual changes to a list of Ingress. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watchlist-ingress-v1beta1-networking-k8s-io
     */
    public function watchNetworkingV1beta1NamespacedList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/watch/namespaces/{namespace}/ingresses',
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
     * Watch changes to an object of kind Ingress. deprecated: use the 'watch' parameter with a list
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#watch-ingress-v1beta1-networking-k8s-io
     */
    public function watchNetworkingV1beta1Namespaced(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/networking.k8s.io/v1beta1/watch/namespaces/{namespace}/ingresses/{name}',
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
