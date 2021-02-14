<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Core\v1;

use K8s\Api\Model\Api\Core\v1\Pod;
use K8s\Api\Model\Api\Core\v1\PodList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class PodService
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
     * List or watch objects of kind Pod
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function listNamespaced(array $query = [], $handler = null): ?PodList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodList::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
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
     * Delete collection of Pod
     *
     * Allowed query parameters:
     *   continue
     *   fieldSelector
     *   includeUninitialized
     *   labelSelector
     *   limit
     *   resourceVersion
     *   timeoutSeconds
     *   watch
     *   pretty
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function deleteCollectionNamespaced(array $query = [], $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
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
     * Create a Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function createNamespaced(Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods',
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
     * Read the specified Pod
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     */
    public function readNamespaced(string $name, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Delete a Pod
     *
     * Allowed query parameters:
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
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Partially update the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespaced(string $name, PatchInterface $patch, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Replace the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespaced(string $name, Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}',
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
     * Connect GET requests to attach of Pod
     *
     * Allowed query parameters:
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedAttach(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/attach',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to attach of Pod
     *
     * Allowed query parameters:
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedAttach(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/attach',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect GET requests to exec of Pod
     *
     * Allowed query parameters:
     *   command
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedExec(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/exec',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Connect POST requests to exec of Pod
     *
     * Allowed query parameters:
     *   command
     *   container
     *   stderr
     *   stdin
     *   stdout
     *   tty
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedExec(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/exec',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'generic',
            $handler
        );
    }

    /**
     * Read log of the specified Pod
     *
     * Allowed query parameters:
     *   container
     *   follow
     *   limitBytes
     *   pretty
     *   previous
     *   sinceSeconds
     *   tailLines
     *   timestamps
     *
     * @param array $query
     * @param callable|object|null $handler
     */
    public function readNamespacedLog(string $name, array $query = [], $handler = null): ?string
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/log',
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
     * Connect GET requests to portforward of Pod
     *
     * Allowed query parameters:
     *   ports
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedPortforward(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/portforward',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'portforward',
            $handler
        );
    }

    /**
     * Connect POST requests to portforward of Pod
     *
     * Allowed query parameters:
     *   ports
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedPortforward(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/portforward',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'portforward',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectDeleteNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPatchNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPutNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectOptionsNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectHeadNamespacedProxy(string $name, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy',
            ['{name}' => $name,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect GET requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectGetNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect DELETE requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectDeleteNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect POST requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPostNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PATCH requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPatchNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect PUT requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectPutNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect OPTIONS requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectOptionsNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Connect HEAD requests to proxy of Pod
     *
     * Allowed query parameters:
     *   path
     *
     * @param array $query
     * @param callable|object $handler
     */
    public function connectHeadNamespacedProxyWithPath(string $name, string $path, $handler, array $query = []): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/proxy/{path}',
            ['{name}' => $name,'{path}' => $path,],
            $query,
            $this->namespace
        );

        $this->api->executeWebsocket(
            $uri,
            'proxy',
            $handler
        );
    }

    /**
     * Read status of the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function readNamespacedStatus(string $name, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * Partially update status of the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function patchNamespacedStatus(string $name, PatchInterface $patch, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * Replace status of the specified Pod
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     */
    public function replaceNamespacedStatus(string $name, Pod $pod, array $query = []): Pod
    {
        $options['query'] = $query;
        $options['body'] = $pod;
        $options['model'] = Pod::class;
        $uri = $this->api->makeUri(
            '/api/v1/namespaces/{namespace}/pods/{name}/status',
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
     * List or watch objects of kind Pod
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
     */
    public function listForAllNamespaces(array $query = [], $handler = null): ?PodList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodList::class;
        $uri = $this->api->makeUri(
            '/api/v1/pods',
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
     * Watch individual changes to a list of Pod
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
     */
    public function watchNamespacedList(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/pods',
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
     * Watch changes to an object of kind Pod
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
     */
    public function watchNamespaced(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/namespaces/{namespace}/pods/{name}',
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
     * Watch individual changes to a list of Pod
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
     */
    public function watchListForAllNamespaces(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/api/v1/watch/pods',
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
