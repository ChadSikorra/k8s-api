<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.14.10
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
 * ClientIPConfig represents the configurations of Client IP based session affinity.
 */
class ClientIPConfig
{
    /**
     * @Kubernetes\Attribute("timeoutSeconds")
     * @var int|null
     */
    protected $timeoutSeconds = null;

    /**
     * @param int|null $timeoutSeconds
     */
    public function __construct(?int $timeoutSeconds = null)
    {
        $this->timeoutSeconds = $timeoutSeconds;
    }

    /**
     * timeoutSeconds specifies the seconds of ClientIP type session sticky time. The value must be >0 &&
     * <=86400(for 1 day) if ServiceAffinity == "ClientIP". Default value is 10800(for 3 hours).
     */
    public function getTimeoutSeconds(): ?int
    {
        return $this->timeoutSeconds;
    }

    /**
     * timeoutSeconds specifies the seconds of ClientIP type session sticky time. The value must be >0 &&
     * <=86400(for 1 day) if ServiceAffinity == "ClientIP". Default value is 10800(for 3 hours).
     *
     * @return static
     */
    public function setTimeoutSeconds(int $timeoutSeconds)
    {
        $this->timeoutSeconds = $timeoutSeconds;

        return $this;
    }
}
