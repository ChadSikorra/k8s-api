<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiMachinery\Apis\Meta\v1;

use DateTimeInterface;
use K8s\Core\Annotation as Kubernetes;

/**
 * ManagedFieldsEntry is a workflow-id, a FieldSet and the group version of the resource that the
 * fieldset applies to.
 */
class ManagedFieldsEntry
{
    /**
     * @Kubernetes\Attribute("apiVersion")
     * @var string|null
     */
    protected $apiVersion = '';

    /**
     * @Kubernetes\Attribute("fields")
     * @var object|null
     */
    protected $fields = null;

    /**
     * @Kubernetes\Attribute("manager")
     * @var string|null
     */
    protected $manager = null;

    /**
     * @Kubernetes\Attribute("operation")
     * @var string|null
     */
    protected $operation = null;

    /**
     * @Kubernetes\Attribute("time",type="datetime")
     * @var DateTimeInterface|null
     */
    protected $time = null;

    /**
     * @param string|null $apiVersion
     * @param object|null $fields
     * @param string|null $manager
     * @param string|null $operation
     * @param DateTimeInterface|null $time
     */
    public function __construct(
        ?string $apiVersion = null,
        $fields = null,
        ?string $manager = null,
        ?string $operation = null,
        ?DateTimeInterface $time = null
    ) {
        $this->apiVersion = $apiVersion;
        $this->fields = $fields;
        $this->manager = $manager;
        $this->operation = $operation;
        $this->time = $time;
    }

    /**
     * APIVersion defines the version of this resource that this field set applies to. The format is
     * "group/version" just like the top-level APIVersion field. It is necessary to track the version of a
     * field set because it cannot be automatically converted.
     */
    public function getApiVersion(): ?string
    {
        return $this->apiVersion;
    }

    /**
     * APIVersion defines the version of this resource that this field set applies to. The format is
     * "group/version" just like the top-level APIVersion field. It is necessary to track the version of a
     * field set because it cannot be automatically converted.
     *
     * @return static
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    /**
     * Fields identifies a set of fields.
     *
     * @return object
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Fields identifies a set of fields.
     *
     * @param object $fields
     * @return static
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Manager is an identifier of the workflow managing these fields.
     */
    public function getManager(): ?string
    {
        return $this->manager;
    }

    /**
     * Manager is an identifier of the workflow managing these fields.
     *
     * @return static
     */
    public function setManager(string $manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Operation is the type of operation which lead to this ManagedFieldsEntry being created. The only
     * valid values for this field are 'Apply' and 'Update'.
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * Operation is the type of operation which lead to this ManagedFieldsEntry being created. The only
     * valid values for this field are 'Apply' and 'Update'.
     *
     * @return static
     */
    public function setOperation(string $operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Time is timestamp of when these fields were set. It should always be empty if Operation is 'Apply'
     */
    public function getTime(): ?DateTimeInterface
    {
        return $this->time;
    }

    /**
     * Time is timestamp of when these fields were set. It should always be empty if Operation is 'Apply'
     *
     * @return static
     */
    public function setTime(DateTimeInterface $time)
    {
        $this->time = $time;

        return $this;
    }
}
