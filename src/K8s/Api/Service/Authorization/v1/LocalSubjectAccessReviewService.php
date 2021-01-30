<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Authorization\v1;

use K8s\Api\Model\Api\Authorization\v1\LocalSubjectAccessReview;
use K8s\Core\Contract\ApiInterface;

class LocalSubjectAccessReviewService
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
     * Create a LocalSubjectAccessReview
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.17/#create-localsubjectaccessreview-v1-authorization-k8s-io
     */
    public function createAuthorizationV1Namespaced(LocalSubjectAccessReview $localSubjectAccessReview, array $query = []): LocalSubjectAccessReview
    {
        $options['query'] = $query;
        $options['body'] = $localSubjectAccessReview;
        $options['model'] = LocalSubjectAccessReview::class;
        $uri = $this->api->makeUri(
            '/apis/authorization.k8s.io/v1/namespaces/{namespace}/localsubjectaccessreviews',
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
}
