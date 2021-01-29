<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Extensions\v1beta1;

use K8s\Api\Model\Api\Extensions\v1beta1\PodSecurityPolicy;
use K8s\Api\Model\Api\Extensions\v1beta1\PodSecurityPolicyList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\DeleteOptions;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;

/**
 * PodSecurityPolicy governs the ability to make requests that affect the Security Context that will be
 * applied to a pod and container. Deprecated: use PodSecurityPolicy from policy API Group instead.
 */
class PodSecurityPolicyService
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
     * List or watch objects of kind PodSecurityPolicy
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
     * @param callable|null $handler
     * @deprecated Use PodSecurityPolicyList from policy API Group instead.
     */
    public function list(array $query = [], ?callable $handler = null): ?PodSecurityPolicyList
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = PodSecurityPolicyList::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies',
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
     * Delete collection of PodSecurityPolicy
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
     * @param callable|null $handler
     */
    public function deleteCollection(array $query = [], ?callable $handler = null): ?Status
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies',
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
     * Create a PodSecurityPolicy
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @deprecated Use PodSecurityPolicy from policy API Group instead.
     */
    public function create(PodSecurityPolicy $podSecurityPolicy, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['body'] = $podSecurityPolicy;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies',
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
     * Read the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @deprecated Use PodSecurityPolicy from policy API Group instead.
     */
    public function read(string $name, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies/{name}',
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
     * Delete a PodSecurityPolicy
     *
     * Allowed query parameters:
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     */
    public function delete(string $name, DeleteOptions $deleteOptions, array $query = []): Status
    {
        $options['query'] = $query;
        $options['body'] = $deleteOptions;
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies/{name}',
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
     * Partially update the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @deprecated Use PodSecurityPolicy from policy API Group instead.
     */
    public function patch(string $name, array $patch, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['body'] = $patch;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies/{name}',
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
     * Replace the specified PodSecurityPolicy
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @deprecated Use PodSecurityPolicy from policy API Group instead.
     */
    public function replace(string $name, PodSecurityPolicy $podSecurityPolicy, array $query = []): PodSecurityPolicy
    {
        $options['query'] = $query;
        $options['body'] = $podSecurityPolicy;
        $options['model'] = PodSecurityPolicy::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/podsecuritypolicies/{name}',
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
     * Watch individual changes to a list of PodSecurityPolicy
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
    public function watchList(array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/watch/podsecuritypolicies',
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
     * Watch changes to an object of kind PodSecurityPolicy
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
    public function watch(string $name, array $query = [], ?callable $handler = null): void
    {
        $options['query'] = $query;
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/extensions/v1beta1/watch/podsecuritypolicies/{name}',
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
