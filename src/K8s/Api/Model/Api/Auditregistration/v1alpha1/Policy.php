<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.19
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Auditregistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * Policy defines the configuration of how audit events are logged
 */
class Policy
{
    /**
     * @Kubernetes\Attribute("level",isRequired=true)
     * @var string
     */
    protected $level;

    /**
     * @Kubernetes\Attribute("stages")
     * @var string[]|null
     */
    protected $stages = null;

    /**
     * @param string $level
     */
    public function __construct(string $level)
    {
        $this->level = $level;
    }

    /**
     * The Level that all requests are recorded at. available options: None, Metadata, Request,
     * RequestResponse required
     */
    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * The Level that all requests are recorded at. available options: None, Metadata, Request,
     * RequestResponse required
     *
     * @return static
     */
    public function setLevel(string $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Stages is a list of stages for which events are created.
     */
    public function getStages(): ?array
    {
        return $this->stages;
    }

    /**
     * Stages is a list of stages for which events are created.
     *
     * @return static
     */
    public function setStages(array $stages)
    {
        $this->stages = $stages;

        return $this;
    }
}
