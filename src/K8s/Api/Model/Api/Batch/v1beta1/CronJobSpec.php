<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Batch\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CronJobSpec describes how the job execution will look like and when it will actually run.
 */
class CronJobSpec
{
    /**
     * @Kubernetes\Attribute("concurrencyPolicy")
     * @var string|null
     */
    protected $concurrencyPolicy = null;

    /**
     * @Kubernetes\Attribute("failedJobsHistoryLimit")
     * @var int|null
     */
    protected $failedJobsHistoryLimit = null;

    /**
     * @Kubernetes\Attribute("jobTemplate",type="model",model=JobTemplateSpec::class,isRequired=true)
     * @var JobTemplateSpec
     */
    protected $jobTemplate;

    /**
     * @Kubernetes\Attribute("schedule",isRequired=true)
     * @var string
     */
    protected $schedule;

    /**
     * @Kubernetes\Attribute("startingDeadlineSeconds")
     * @var int|null
     */
    protected $startingDeadlineSeconds = null;

    /**
     * @Kubernetes\Attribute("successfulJobsHistoryLimit")
     * @var int|null
     */
    protected $successfulJobsHistoryLimit = null;

    /**
     * @Kubernetes\Attribute("suspend")
     * @var bool|null
     */
    protected $suspend = null;

    /**
     * @param JobTemplateSpec $jobTemplate
     * @param string $schedule
     */
    public function __construct(JobTemplateSpec $jobTemplate, string $schedule)
    {
        $this->jobTemplate = $jobTemplate;
        $this->schedule = $schedule;
    }

    /**
     * Specifies how to treat concurrent executions of a Job. Valid values are: - "Allow" (default): allows
     * CronJobs to run concurrently; - "Forbid": forbids concurrent runs, skipping next run if previous run
     * hasn't finished yet; - "Replace": cancels currently running job and replaces it with a new one
     */
    public function getConcurrencyPolicy(): ?string
    {
        return $this->concurrencyPolicy;
    }

    /**
     * Specifies how to treat concurrent executions of a Job. Valid values are: - "Allow" (default): allows
     * CronJobs to run concurrently; - "Forbid": forbids concurrent runs, skipping next run if previous run
     * hasn't finished yet; - "Replace": cancels currently running job and replaces it with a new one
     *
     * @return static
     */
    public function setConcurrencyPolicy(string $concurrencyPolicy)
    {
        $this->concurrencyPolicy = $concurrencyPolicy;

        return $this;
    }

    /**
     * The number of failed finished jobs to retain. This is a pointer to distinguish between explicit zero
     * and not specified. Defaults to 1.
     */
    public function getFailedJobsHistoryLimit(): ?int
    {
        return $this->failedJobsHistoryLimit;
    }

    /**
     * The number of failed finished jobs to retain. This is a pointer to distinguish between explicit zero
     * and not specified. Defaults to 1.
     *
     * @return static
     */
    public function setFailedJobsHistoryLimit(int $failedJobsHistoryLimit)
    {
        $this->failedJobsHistoryLimit = $failedJobsHistoryLimit;

        return $this;
    }

    /**
     * Specifies the job that will be created when executing a CronJob.
     */
    public function getJobTemplate(): JobTemplateSpec
    {
        return $this->jobTemplate;
    }

    /**
     * Specifies the job that will be created when executing a CronJob.
     *
     * @return static
     */
    public function setJobTemplate(JobTemplateSpec $jobTemplate)
    {
        $this->jobTemplate = $jobTemplate;

        return $this;
    }

    /**
     * The schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     */
    public function getSchedule(): string
    {
        return $this->schedule;
    }

    /**
     * The schedule in Cron format, see https://en.wikipedia.org/wiki/Cron.
     *
     * @return static
     */
    public function setSchedule(string $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Optional deadline in seconds for starting the job if it misses scheduled time for any reason.
     * Missed jobs executions will be counted as failed ones.
     */
    public function getStartingDeadlineSeconds(): ?int
    {
        return $this->startingDeadlineSeconds;
    }

    /**
     * Optional deadline in seconds for starting the job if it misses scheduled time for any reason.
     * Missed jobs executions will be counted as failed ones.
     *
     * @return static
     */
    public function setStartingDeadlineSeconds(int $startingDeadlineSeconds)
    {
        $this->startingDeadlineSeconds = $startingDeadlineSeconds;

        return $this;
    }

    /**
     * The number of successful finished jobs to retain. This is a pointer to distinguish between explicit
     * zero and not specified. Defaults to 3.
     */
    public function getSuccessfulJobsHistoryLimit(): ?int
    {
        return $this->successfulJobsHistoryLimit;
    }

    /**
     * The number of successful finished jobs to retain. This is a pointer to distinguish between explicit
     * zero and not specified. Defaults to 3.
     *
     * @return static
     */
    public function setSuccessfulJobsHistoryLimit(int $successfulJobsHistoryLimit)
    {
        $this->successfulJobsHistoryLimit = $successfulJobsHistoryLimit;

        return $this;
    }

    /**
     * This flag tells the controller to suspend subsequent executions, it does not apply to already
     * started executions.  Defaults to false.
     */
    public function isSuspend(): ?bool
    {
        return $this->suspend;
    }

    /**
     * This flag tells the controller to suspend subsequent executions, it does not apply to already
     * started executions.  Defaults to false.
     *
     * @return static
     */
    public function setIsSuspend(bool $suspend)
    {
        $this->suspend = $suspend;

        return $this;
    }
}
