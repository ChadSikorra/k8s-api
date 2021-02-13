<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * HTTPIngressRuleValue is a list of http selectors pointing to backends. In the example:
 * http://<host>/<path>?<searchpart> -> backend where where parts of the url correspond to RFC 3986,
 * this resource will be used to match against everything after the last '/' and before the first '?'
 * or '#'.
 */
class HTTPIngressRuleValue
{
    /**
     * @Kubernetes\Attribute("paths",type="collection",model=HTTPIngressPath::class,isRequired=true)
     * @var iterable|HTTPIngressPath[]
     */
    protected $paths;

    /**
     * @param iterable|HTTPIngressPath[] $paths
     */
    public function __construct(iterable $paths)
    {
        $this->paths = new Collection($paths);
    }

    /**
     * A collection of paths that map requests to backends.
     *
     * @return iterable|HTTPIngressPath[]
     */
    public function getPaths(): iterable
    {
        return $this->paths;
    }

    /**
     * A collection of paths that map requests to backends.
     *
     * @return static
     */
    public function setPaths(iterable $paths)
    {
        $this->paths = $paths;

        return $this;
    }

    /**
     * @return static
     */
    public function addPaths(HTTPIngressPath $path)
    {
        if (!$this->paths) {
            $this->paths = new Collection();
        }
        $this->paths[] = $path;

        return $this;
    }
}
