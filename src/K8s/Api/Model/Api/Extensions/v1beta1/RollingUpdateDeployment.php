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

/**
 * Spec to control the desired behavior of rolling update.
 */
class RollingUpdateDeployment
{
    /**
     * @Kubernetes\Attribute("maxSurge")
     * @var int|string|null
     */
    protected $maxSurge = null;

    /**
     * @Kubernetes\Attribute("maxUnavailable")
     * @var int|string|null
     */
    protected $maxUnavailable = null;

    /**
     * @param int|string|null $maxSurge
     * @param int|string|null $maxUnavailable
     */
    public function __construct($maxSurge = null, $maxUnavailable = null)
    {
        $this->maxSurge = $maxSurge;
        $this->maxUnavailable = $maxUnavailable;
    }

    /**
     * The maximum number of pods that can be scheduled above the desired number of pods. Value can be an
     * absolute number (ex: 5) or a percentage of desired pods (ex: 10%). This can not be 0 if
     * MaxUnavailable is 0. Absolute number is calculated from percentage by rounding up. By default, a
     * value of 1 is used. Example: when this is set to 30%, the new RC can be scaled up immediately when
     * the rolling update starts, such that the total number of old and new pods do not exceed 130% of
     * desired pods. Once old pods have been killed, new RC can be scaled up further, ensuring that total
     * number of pods running at any time during the update is at most 130% of desired pods.
     *
     * @return int|string
     */
    public function getMaxSurge()
    {
        return $this->maxSurge;
    }

    /**
     * The maximum number of pods that can be scheduled above the desired number of pods. Value can be an
     * absolute number (ex: 5) or a percentage of desired pods (ex: 10%). This can not be 0 if
     * MaxUnavailable is 0. Absolute number is calculated from percentage by rounding up. By default, a
     * value of 1 is used. Example: when this is set to 30%, the new RC can be scaled up immediately when
     * the rolling update starts, such that the total number of old and new pods do not exceed 130% of
     * desired pods. Once old pods have been killed, new RC can be scaled up further, ensuring that total
     * number of pods running at any time during the update is at most 130% of desired pods.
     *
     * @param int|string $maxSurge
     * @return static
     */
    public function setMaxSurge($maxSurge)
    {
        $this->maxSurge = $maxSurge;

        return $this;
    }

    /**
     * The maximum number of pods that can be unavailable during the update. Value can be an absolute
     * number (ex: 5) or a percentage of desired pods (ex: 10%). Absolute number is calculated from
     * percentage by rounding down. This can not be 0 if MaxSurge is 0. By default, a fixed value of 1 is
     * used. Example: when this is set to 30%, the old RC can be scaled down to 70% of desired pods
     * immediately when the rolling update starts. Once new pods are ready, old RC can be scaled down
     * further, followed by scaling up the new RC, ensuring that the total number of pods available at all
     * times during the update is at least 70% of desired pods.
     *
     * @return int|string
     */
    public function getMaxUnavailable()
    {
        return $this->maxUnavailable;
    }

    /**
     * The maximum number of pods that can be unavailable during the update. Value can be an absolute
     * number (ex: 5) or a percentage of desired pods (ex: 10%). Absolute number is calculated from
     * percentage by rounding down. This can not be 0 if MaxSurge is 0. By default, a fixed value of 1 is
     * used. Example: when this is set to 30%, the old RC can be scaled down to 70% of desired pods
     * immediately when the rolling update starts. Once new pods are ready, old RC can be scaled down
     * further, followed by scaling up the new RC, ensuring that the total number of pods available at all
     * times during the update is at least 70% of desired pods.
     *
     * @param int|string $maxUnavailable
     * @return static
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->maxUnavailable = $maxUnavailable;

        return $this;
    }
}
