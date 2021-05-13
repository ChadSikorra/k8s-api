<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.21.1
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
    protected $extra = null;

    /**
     * @Kubernetes\Attribute("groups")
     * @var string[]|null
     */
    protected $groups = null;

    /**
     * @Kubernetes\Attribute("request",isRequired=true)
     * @var string
     */
    protected $request;

    /**
     * @Kubernetes\Attribute("signerName")
     * @var string|null
     */
    protected $signerName = null;

    /**
     * @Kubernetes\Attribute("uid")
     * @var string|null
     */
    protected $uid = null;

    /**
     * @Kubernetes\Attribute("usages")
     * @var string[]|null
     */
    protected $usages = null;

    /**
     * @Kubernetes\Attribute("username")
     * @var string|null
     */
    protected $username = null;

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
     * Requested signer for the request. It is a qualified name in the form: `scope-hostname.io/name`. If
     * empty, it will be defaulted:
     *  1. If it's a kubelet client certificate, it is assigned
     *     "kubernetes.io/kube-apiserver-client-kubelet".
     *  2. If it's a kubelet serving certificate, it is assigned
     *     "kubernetes.io/kubelet-serving".
     *  3. Otherwise, it is assigned "kubernetes.io/legacy-unknown".
     * Distribution of trust for signers happens out of band. You can select on this field using
     * `spec.signerName`.
     */
    public function getSignerName(): ?string
    {
        return $this->signerName;
    }

    /**
     * Requested signer for the request. It is a qualified name in the form: `scope-hostname.io/name`. If
     * empty, it will be defaulted:
     *  1. If it's a kubelet client certificate, it is assigned
     *     "kubernetes.io/kube-apiserver-client-kubelet".
     *  2. If it's a kubelet serving certificate, it is assigned
     *     "kubernetes.io/kubelet-serving".
     *  3. Otherwise, it is assigned "kubernetes.io/legacy-unknown".
     * Distribution of trust for signers happens out of band. You can select on this field using
     * `spec.signerName`.
     *
     * @return static
     */
    public function setSignerName(string $signerName)
    {
        $this->signerName = $signerName;

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
     * Valid values are:
     *  "signing",
     *  "digital signature",
     *  "content commitment",
     *  "key encipherment",
     *  "key agreement",
     *  "data encipherment",
     *  "cert sign",
     *  "crl sign",
     *  "encipher only",
     *  "decipher only",
     *  "any",
     *  "server auth",
     *  "client auth",
     *  "code signing",
     *  "email protection",
     *  "s/mime",
     *  "ipsec end system",
     *  "ipsec tunnel",
     *  "ipsec user",
     *  "timestamping",
     *  "ocsp signing",
     *  "microsoft sgc",
     *  "netscape sgc"
     */
    public function getUsages(): ?array
    {
        return $this->usages;
    }

    /**
     * allowedUsages specifies a set of usage contexts the key will be valid for. See:
     * https://tools.ietf.org/html/rfc5280#section-4.2.1.3
     *      https://tools.ietf.org/html/rfc5280#section-4.2.1.12
     * Valid values are:
     *  "signing",
     *  "digital signature",
     *  "content commitment",
     *  "key encipherment",
     *  "key agreement",
     *  "data encipherment",
     *  "cert sign",
     *  "crl sign",
     *  "encipher only",
     *  "decipher only",
     *  "any",
     *  "server auth",
     *  "client auth",
     *  "code signing",
     *  "email protection",
     *  "s/mime",
     *  "ipsec end system",
     *  "ipsec tunnel",
     *  "ipsec user",
     *  "timestamping",
     *  "ocsp signing",
     *  "microsoft sgc",
     *  "netscape sgc"
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
