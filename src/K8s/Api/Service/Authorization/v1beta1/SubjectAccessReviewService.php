<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.18.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Authorization\v1beta1;

use K8s\Api\Model\Api\Authorization\v1beta1\SubjectAccessReview;
use K8s\Core\Contract\ApiInterface;

class SubjectAccessReviewService
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
     * Create a SubjectAccessReview
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.18/#create-subjectaccessreview-v1beta1-authorization-k8s-io
     */
    public function createAuthorizationV1beta1(SubjectAccessReview $subjectAccessReview, array $query = []): SubjectAccessReview
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $subjectAccessReview;
        $options['model'] = SubjectAccessReview::class;
        $uri = $this->api->makeUri(
            '/apis/authorization.k8s.io/v1beta1/subjectaccessreviews',
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
