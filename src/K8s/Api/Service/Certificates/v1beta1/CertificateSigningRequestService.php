<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.5
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Certificates\v1beta1;

use K8s\Api\Model\Api\Certificates\v1beta1\CertificateSigningRequest;
use K8s\Api\Model\Api\Certificates\v1beta1\CertificateSigningRequestList;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\Status;
use K8s\Api\Model\ApiMachinery\Apis\Meta\v1\WatchEvent;
use K8s\Core\Contract\ApiInterface;
use K8s\Core\PatchInterface;

class CertificateSigningRequestService
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
     * List or watch objects of kind CertificateSigningRequest
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#list-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function listCertificatesV1beta1(array $query = [], $handler = null): ?CertificateSigningRequestList
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = CertificateSigningRequestList::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests',
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
     * Delete collection of CertificateSigningRequest
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-collection-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function deleteCertificatesV1beta1Collection(array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests',
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
     * Create a CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#create-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function createCertificatesV1beta1(CertificateSigningRequest $certificateSigningRequest, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $certificateSigningRequest;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests',
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
     * Read the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   exact
     *   export
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function readCertificatesV1beta1(string $name, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}',
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
     * Delete a CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   gracePeriodSeconds
     *   orphanDependents
     *   propagationPolicy
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#delete-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function deleteCertificatesV1beta1(string $name, array $query = []): Status
    {
        $options['query'] = $query;
        $options['method'] = 'delete';
        $options['model'] = Status::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}',
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
     * Partially update the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function patchCertificatesV1beta1(string $name, PatchInterface $patch, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}',
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
     * Replace the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function replaceCertificatesV1beta1(string $name, CertificateSigningRequest $certificateSigningRequest, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $certificateSigningRequest;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}',
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
     * Read approval of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function readCertificatesV1beta1Approval(string $name, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/approval',
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
     * Partially update approval of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function patchCertificatesV1beta1Approval(string $name, PatchInterface $patch, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/approval',
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
     * Replace approval of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function replaceCertificatesV1beta1Approval(string $name, CertificateSigningRequest $certificateSigningRequest, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $certificateSigningRequest;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/approval',
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
     * Read status of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#read-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function readCertificatesV1beta1Status(string $name, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/status',
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
     * Partially update status of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   force
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#patch-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function patchCertificatesV1beta1Status(string $name, PatchInterface $patch, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'patch';
        $options['body'] = $patch;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/status',
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
     * Replace status of the specified CertificateSigningRequest
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#put-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function replaceCertificatesV1beta1Status(string $name, CertificateSigningRequest $certificateSigningRequest, array $query = []): CertificateSigningRequest
    {
        $options['query'] = $query;
        $options['method'] = 'put';
        $options['body'] = $certificateSigningRequest;
        $options['model'] = CertificateSigningRequest::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/certificatesigningrequests/{name}/status',
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
     * Watch individual changes to a list of CertificateSigningRequest. deprecated: use the 'watch'
     * parameter with a list operation instead.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watchlist-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function watchCertificatesV1beta1List(array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests',
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
     * Watch changes to an object of kind CertificateSigningRequest. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the 'fieldSelector' parameter.
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
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.20/#watch-certificatesigningrequest-v1beta1-certificates-k8s-io
     */
    public function watchCertificatesV1beta1(string $name, array $query = [], $handler = null): void
    {
        $options['query'] = $query;
        $options['method'] = 'get';
        $options['handler'] = $handler;
        $options['model'] = WatchEvent::class;
        $uri = $this->api->makeUri(
            '/apis/certificates.k8s.io/v1beta1/watch/certificatesigningrequests/{name}',
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
