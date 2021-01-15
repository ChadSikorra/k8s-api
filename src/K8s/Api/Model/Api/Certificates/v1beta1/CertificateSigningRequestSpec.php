<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.14.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Certificates\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * This information is immutable after the request is created. Only the Request and Usages fields can
 * be set on creation, other fields are derived by Kubernetes and cannot be modified by users.
 */
class CertificateSigningRequestSpec
{
    /**
     * @Kubernetes\Attribute("extra")
     * @var array|null
     */
    protected $extra;

    /**
     * @Kubernetes\Attribute("groups")
     * @var string[]|null
     */
    protected $groups;

    /**
     * @Kubernetes\Attribute("request",isRequired=true)
     * @var string
     */
    protected $request;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid;

    /**
     * @Kubernetes\Attribute("usages")
     * @var string[]|null
     */
    protected $usages;

    /**
     * @Kubernetes\Attribute("username")
     * @var string|null
     */
    protected $username;

    /**
     * @param string $request
     */
    public function __construct(string $request)
    {
        $this->request = $request;
    }

    /**
     * Extra information about the requesting user. See user.Info interface for details.
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * Extra information about the requesting user. See user.Info interface for details.
     *
     * @return static
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Group information about the requesting user. See user.Info interface for details.
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * Group information about the requesting user. See user.Info interface for details.
     *
     * @return static
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Base64-encoded PKCS#10 CSR data
     */
    public function getRequest(): string
    {
        return $this->request;
    }

    /**
     * Base64-encoded PKCS#10 CSR data
     *
     * @return static
     */
    public function setRequest(string $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * UID information about the requesting user. See user.Info interface for details.
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * UID information about the requesting user. See user.Info interface for details.
     *
     * @return static
     */
    public function setUid(string $uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * allowedUsages specifies a set of usage contexts the key will be valid for. See:
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.3
     *      https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     */
    public function getUsages(): ?array
    {
        return $this->usages;
    }

    /**
     * allowedUsages specifies a set of usage contexts the key will be valid for. See:
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.3
     *      https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     *
     * @return static
     */
    public function setUsages(array $usages)
    {
        $this->usages = $usages;

        return $this;
    }

    /**
     * Information about the requesting user. See user.Info interface for details.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Information about the requesting user. See user.Info interface for details.
     *
     * @return static
     */
    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }
}
