<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.19.9
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Service\Authentication\v1beta1;

use K8s\Api\Model\Api\Authentication\v1beta1\TokenReview;
use K8s\Core\Contract\ApiInterface;

class TokenReviewService
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
     * Create a TokenReview
     *
     * Allowed query parameters:
     *   dryRun
     *   fieldManager
     *   pretty
     *
     * @param array $query
     * @link https://kubernetes.io/docs/reference/generated/kubernetes-api/v1.19/#create-tokenreview-v1beta1-authentication-k8s-io
     */
    public function createAuthenticationV1beta1(TokenReview $tokenReview, array $query = []): TokenReview
    {
        $options['query'] = $query;
        $options['method'] = 'post';
        $options['body'] = $tokenReview;
        $options['model'] = TokenReview::class;
        $uri = $this->api->makeUri(
            '/apis/authentication.k8s.io/v1beta1/tokenreviews',
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
