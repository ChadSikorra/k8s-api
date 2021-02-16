<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.19.7
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * APIVersions lists the versions that are available, to allow clients to discover the API at /api,
 * which is the root path of the legacy v1 API.
 *
 * @Kubernetes\Kind("APIVersions",version="v1")
 */
class APIVersions
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = 'v1';

    /**
     * @Kubernetes\Attribute("kind")
     * @var string|null
     */
    protected $kind = 'APIVersions';

    /**
     * @Kubernetes\Attribute("serverAddressByClientCIDRs",type="collection",model=ServerAddressByClientCIDR::class,isRequired=true)
     * @var iterable|ServerAddressByClientCIDR[]
     */
    protected $serverAddressByClientCIDRs;

    /**
     * @Kubernetes\Attribute("versions",isRequired=true)
     * @var string[]
     */
    protected $versions;

    /**
     * @param iterable|ServerAddressByClientCIDR[] $serverAddressByClientCIDRs
     * @param string[] $versions
     */
    public function __construct(iterable $serverAddressByClientCIDRs, array $versions)
    {
        $this->serverAddressByClientCIDRs = new Collection($serverAddressByClientCIDRs);
        $this->versions = $versions;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the versioned schema of this representation of an object. Servers should convert
     * recognized schemas to the latest internal value, and may reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Kind is a string value representing the REST resource this object represents. Servers may infer this
     * from the endpoint the client submits requests to. Cannot be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * a map of client CIDR to server address that is serving this group. This is to help clients reach
     * servers in the most network-efficient way possible. Clients can use the appropriate server address
     * as per the CIDR that they match. In case of multiple matches, clients should use the longest
     * matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For
     * example: the master will return an internal IP CIDR only, if the client reaches the server using an
     * internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in
     * that order) to get the client IP.
     *
     * @return iterable|ServerAddressByClientCIDR[]
     */
    public function getServerAddressByClientCIDRs(): iterable
    {
        return $this->serverAddressByClientCIDRs;
    }

    /**
     * a map of client CIDR to server address that is serving this group. This is to help clients reach
     * servers in the most network-efficient way possible. Clients can use the appropriate server address
     * as per the CIDR that they match. In case of multiple matches, clients should use the longest
     * matching CIDR. The server returns only those CIDRs that it thinks that the client can match. For
     * example: the master will return an internal IP CIDR only, if the client reaches the server using an
     * internal IP. Server looks at X-Forwarded-For header or X-Real-Ip header or request.RemoteAddr (in
     * that order) to get the client IP.
     *
     * @return static
     */
    public function setServerAddressByClientCIDRs(iterable $serverAddressByClientCIDRs)
    {
        $this->serverAddressByClientCIDRs = $serverAddressByClientCIDRs;

        return $this;
    }

    /**
     * @return static
     */
    public function addServerAddressByClientCIDRs(ServerAddressByClientCIDR $serverAddressByClientCIDR)
    {
        if (!$this->serverAddressByClientCIDRs) {
            $this->serverAddressByClientCIDRs = new Collection();
        }
        $this->serverAddressByClientCIDRs[] = $serverAddressByClientCIDR;

        return $this;
    }

    /**
     * versions are the api versions that are available.
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * versions are the api versions that are available.
     *
     * @return static
     */
    public function setVersions(array $versions)
    {
        $this->versions = $versions;

        return $this;
    }
}
