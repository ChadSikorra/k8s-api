<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Represents an empty directory for a pod. Empty directory volumes support ownership management and
 * SELinux relabeling.
 */
class EmptyDirVolumeSource
{
    /**
     * @Kubernetes\Attribute("medium")
     * @var string|null
     */
    protected $medium = null;

    /**
     * @Kubernetes\Attribute("sizeLimit")
     * @var string|null
     */
    protected $sizeLimit = null;

    /**
     * @param string|null $medium
     * @param string|null $sizeLimit
     */
    public function __construct(?string $medium = null, $sizeLimit = null)
    {
        $this->medium = $medium;
        $this->sizeLimit = $sizeLimit;
    }

    /**
     * What type of storage medium should back this directory. The default is "" which means to use the
     * node's default medium. Must be an empty string (default) or Memory. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    /**
     * What type of storage medium should back this directory. The default is "" which means to use the
     * node's default medium. Must be an empty string (default) or Memory. More info:
     * https://kubernetes.io/docs/concepts/storage/volumes#emptydir
     *
     * @return static
     */
    public function setMedium(string $medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Total amount of local storage required for this EmptyDir volume. The size limit is also applicable
     * for memory medium. The maximum usage on memory medium EmptyDir would be the minimum value between
     * the SizeLimit specified here and the sum of memory limits of all containers in a pod. The default is
     * nil which means that the limit is undefined. More info:
     * http://kubernetes.io/docs/user-guide/volumes#emptydir
     *
     * @return string
     */
    public function getSizeLimit()
    {
        return $this->sizeLimit;
    }

    /**
     * Total amount of local storage required for this EmptyDir volume. The size limit is also applicable
     * for memory medium. The maximum usage on memory medium EmptyDir would be the minimum value between
     * the SizeLimit specified here and the sum of memory limits of all containers in a pod. The default is
     * nil which means that the limit is undefined. More info:
     * http://kubernetes.io/docs/user-guide/volumes#emptydir
     *
     * @param string $sizeLimit
     * @return static
     */
    public function setSizeLimit($sizeLimit)
    {
        $this->sizeLimit = $sizeLimit;

        return $this;
    }
}
