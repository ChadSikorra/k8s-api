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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * DownwardAPIVolumeSource represents a volume containing downward API info. Downward API volumes
 * support ownership management and SELinux relabeling.
 */
class DownwardAPIVolumeSource
{
    /**
     * @Kubernetes\Attribute("defaultMode")
     * @var int|null
     */
    protected $defaultMode = null;

    /**
     * @Kubernetes\Attribute("items",type="collection",model=DownwardAPIVolumeFile::class)
     * @var iterable|DownwardAPIVolumeFile[]|null
     */
    protected $items = null;

    /**
     * @param int|null $defaultMode
     * @param iterable|DownwardAPIVolumeFile[] $items
     */
    public function __construct(?int $defaultMode = null, iterable $items = [])
    {
        $this->defaultMode = $defaultMode;
        $this->items = new Collection($items);
    }

    /**
     * Optional: mode bits to use on created files by default. Must be a value between 0 and 0777. Defaults
     * to 0644. Directories within the path are not affected by this setting. This might be in conflict
     * with other options that affect the file mode, like fsGroup, and the result can be other mode bits
     * set.
     */
    public function getDefaultMode(): ?int
    {
        return $this->defaultMode;
    }

    /**
     * Optional: mode bits to use on created files by default. Must be a value between 0 and 0777. Defaults
     * to 0644. Directories within the path are not affected by this setting. This might be in conflict
     * with other options that affect the file mode, like fsGroup, and the result can be other mode bits
     * set.
     *
     * @return static
     */
    public function setDefaultMode(int $defaultMode)
    {
        $this->defaultMode = $defaultMode;

        return $this;
    }

    /**
     * Items is a list of downward API volume file
     *
     * @return iterable|DownwardAPIVolumeFile[]
     */
    public function getItems(): ?iterable
    {
        return $this->items;
    }

    /**
     * Items is a list of downward API volume file
     *
     * @return static
     */
    public function setItems(iterable $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return static
     */
    public function addItems(DownwardAPIVolumeFile $item)
    {
        if (!$this->items) {
            $this->items = new Collection();
        }
        $this->items[] = $item;

        return $this;
    }
}
