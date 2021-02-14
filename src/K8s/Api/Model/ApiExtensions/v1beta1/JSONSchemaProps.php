<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * JSONSchemaProps is a JSON-Schema following Specification Draft 4 (http://json-schema.org/).
 */
class JSONSchemaProps
{
    /**
     * @Kubernetes\Attribute("$ref")
     * @var string|null
     */
    protected $ref = null;

    /**
     * @Kubernetes\Attribute("$schema")
     * @var string|null
     */
    protected $schema = null;

    /**
     * @Kubernetes\Attribute("additionalItems")
     * @var string|null
     */
    protected $additionalItems = null;

    /**
     * @Kubernetes\Attribute("additionalProperties")
     * @var string|null
     */
    protected $additionalProperties = null;

    /**
     * @Kubernetes\Attribute("allOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $allOf = null;

    /**
     * @Kubernetes\Attribute("anyOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $anyOf = null;

    /**
     * @Kubernetes\Attribute("default")
     * @var mixed|null
     */
    protected $default = null;

    /**
     * @Kubernetes\Attribute("definitions")
     * @var object[]|null
     */
    protected $definitions = null;

    /**
     * @Kubernetes\Attribute("dependencies")
     * @var object[]|null
     */
    protected $dependencies = null;

    /**
     * @Kubernetes\Attribute("description")
     * @var string|null
     */
    protected $description = null;

    /**
     * @Kubernetes\Attribute("enum")
     * @var mixed[]|null
     */
    protected $enum = null;

    /**
     * @Kubernetes\Attribute("example")
     * @var mixed|null
     */
    protected $example = null;

    /**
     * @Kubernetes\Attribute("exclusiveMaximum")
     * @var bool|null
     */
    protected $exclusiveMaximum = null;

    /**
     * @Kubernetes\Attribute("exclusiveMinimum")
     * @var bool|null
     */
    protected $exclusiveMinimum = null;

    /**
     * @Kubernetes\Attribute("externalDocs",type="model",model=ExternalDocumentation::class)
     * @var ExternalDocumentation|null
     */
    protected $externalDocs = null;

    /**
     * @Kubernetes\Attribute("format")
     * @var string|null
     */
    protected $format = null;

    /**
     * @Kubernetes\Attribute("id")
     * @var string|null
     */
    protected $id = null;

    /**
     * @Kubernetes\Attribute("items")
     * @var array|null
     */
    protected $items = null;

    /**
     * @Kubernetes\Attribute("maxItems")
     * @var int|null
     */
    protected $maxItems = null;

    /**
     * @Kubernetes\Attribute("maxLength")
     * @var int|null
     */
    protected $maxLength = null;

    /**
     * @Kubernetes\Attribute("maxProperties")
     * @var int|null
     */
    protected $maxProperties = null;

    /**
     * @Kubernetes\Attribute("maximum")
     * @var mixed|null
     */
    protected $maximum = null;

    /**
     * @Kubernetes\Attribute("minItems")
     * @var int|null
     */
    protected $minItems = null;

    /**
     * @Kubernetes\Attribute("minLength")
     * @var int|null
     */
    protected $minLength = null;

    /**
     * @Kubernetes\Attribute("minProperties")
     * @var int|null
     */
    protected $minProperties = null;

    /**
     * @Kubernetes\Attribute("minimum")
     * @var mixed|null
     */
    protected $minimum = null;

    /**
     * @Kubernetes\Attribute("multipleOf")
     * @var mixed|null
     */
    protected $multipleOf = null;

    /**
     * @Kubernetes\Attribute("not",type="model",model=JSONSchemaProps::class)
     * @var JSONSchemaProps|null
     */
    protected $not = null;

    /**
     * @Kubernetes\Attribute("nullable")
     * @var bool|null
     */
    protected $nullable = null;

    /**
     * @Kubernetes\Attribute("oneOf",type="collection",model=JSONSchemaProps::class)
     * @var iterable|JSONSchemaProps[]|null
     */
    protected $oneOf = null;

    /**
     * @Kubernetes\Attribute("pattern")
     * @var string|null
     */
    protected $pattern = null;

    /**
     * @Kubernetes\Attribute("patternProperties")
     * @var object[]|null
     */
    protected $patternProperties = null;

    /**
     * @Kubernetes\Attribute("properties")
     * @var object[]|null
     */
    protected $properties = null;

    /**
     * @Kubernetes\Attribute("required")
     * @var string[]|null
     */
    protected $required = null;

    /**
     * @Kubernetes\Attribute("title")
     * @var string|null
     */
    protected $title = null;

    /**
     * @Kubernetes\Attribute("type")
     * @var string|null
     */
    protected $type = null;

    /**
     * @Kubernetes\Attribute("uniqueItems")
     * @var bool|null
     */
    protected $uniqueItems = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-embedded-resource")
     * @var bool|null
     */
    protected $xKubernetesEmbeddedResource = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-int-or-string")
     * @var bool|null
     */
    protected $xKubernetesIntOrString = null;

    /**
     * @Kubernetes\Attribute("x-kubernetes-preserve-unknown-fields")
     * @var bool|null
     */
    protected $xKubernetesPreserveUnknownFields = null;

    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * @return static
     */
    public function setRef(string $ref)
    {
        $this->ref = $ref;

        return $this;
    }

    public function getSchema(): ?string
    {
        return $this->schema;
    }

    /**
     * @return static
     */
    public function setSchema(string $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalItems()
    {
        return $this->additionalItems;
    }

    /**
     * @param string $additionalItems
     * @return static
     */
    public function setAdditionalItems($additionalItems)
    {
        $this->additionalItems = $additionalItems;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param string $additionalProperties
     * @return static
     */
    public function setAdditionalProperties($additionalProperties)
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getAllOf(): ?iterable
    {
        return $this->allOf;
    }

    /**
     * @return static
     */
    public function setAllOf(iterable $allOf)
    {
        $this->allOf = $allOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addAllOf(JSONSchemaProps $allOf)
    {
        if (!$this->allOf) {
            $this->allOf = new Collection();
        }
        $this->allOf[] = $allOf;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getAnyOf(): ?iterable
    {
        return $this->anyOf;
    }

    /**
     * @return static
     */
    public function setAnyOf(iterable $anyOf)
    {
        $this->anyOf = $anyOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addAnyOf(JSONSchemaProps $anyOf)
    {
        if (!$this->anyOf) {
            $this->anyOf = new Collection();
        }
        $this->anyOf[] = $anyOf;

        return $this;
    }

    /**
     * default is a default value for undefined object fields. Defaulting is an alpha feature under the
     * CustomResourceDefaulting feature gate. Defaulting requires spec.preserveUnknownFields to be false.
     *
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * default is a default value for undefined object fields. Defaulting is an alpha feature under the
     * CustomResourceDefaulting feature gate. Defaulting requires spec.preserveUnknownFields to be false.
     *
     * @param mixed $default
     * @return static
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    public function getDefinitions(): ?array
    {
        return $this->definitions;
    }

    /**
     * @return static
     */
    public function setDefinitions(array $definitions)
    {
        $this->definitions = $definitions;

        return $this;
    }

    public function getDependencies(): ?array
    {
        return $this->dependencies;
    }

    /**
     * @return static
     */
    public function setDependencies(array $dependencies)
    {
        $this->dependencies = $dependencies;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return static
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param mixed[] $enum
     * @return static
     */
    public function setEnum($enum)
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     * @return static
     */
    public function setExample($example)
    {
        $this->example = $example;

        return $this;
    }

    public function isExclusiveMaximum(): ?bool
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @return static
     */
    public function setIsExclusiveMaximum(bool $exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }

    public function isExclusiveMinimum(): ?bool
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @return static
     */
    public function setIsExclusiveMinimum(bool $exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }

    public function getExternalDocs(): ?ExternalDocumentation
    {
        return $this->externalDocs;
    }

    /**
     * @return static
     */
    public function setExternalDocs(ExternalDocumentation $externalDocs)
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @return static
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return static
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return static
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * @return static
     */
    public function setMaxItems(int $maxItems)
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @return static
     */
    public function setMaxLength(int $maxLength)
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getMaxProperties(): ?int
    {
        return $this->maxProperties;
    }

    /**
     * @return static
     */
    public function setMaxProperties(int $maxProperties)
    {
        $this->maxProperties = $maxProperties;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param mixed $maximum
     * @return static
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @return static
     */
    public function setMinItems(int $minItems)
    {
        $this->minItems = $minItems;

        return $this;
    }

    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @return static
     */
    public function setMinLength(int $minLength)
    {
        $this->minLength = $minLength;

        return $this;
    }

    public function getMinProperties(): ?int
    {
        return $this->minProperties;
    }

    /**
     * @return static
     */
    public function setMinProperties(int $minProperties)
    {
        $this->minProperties = $minProperties;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param mixed $minimum
     * @return static
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }

    /**
     * @param mixed $multipleOf
     * @return static
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }

    public function getNot(): ?JSONSchemaProps
    {
        return $this->not;
    }

    /**
     * @return static
     */
    public function setNot(JSONSchemaProps $not)
    {
        $this->not = $not;

        return $this;
    }

    public function isNullable(): ?bool
    {
        return $this->nullable;
    }

    /**
     * @return static
     */
    public function setIsNullable(bool $nullable)
    {
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * @return iterable|JSONSchemaProps[]
     */
    public function getOneOf(): ?iterable
    {
        return $this->oneOf;
    }

    /**
     * @return static
     */
    public function setOneOf(iterable $oneOf)
    {
        $this->oneOf = $oneOf;

        return $this;
    }

    /**
     * @return static
     */
    public function addOneOf(JSONSchemaProps $oneOf)
    {
        if (!$this->oneOf) {
            $this->oneOf = new Collection();
        }
        $this->oneOf[] = $oneOf;

        return $this;
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @return static
     */
    public function setPattern(string $pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function getPatternProperties(): ?array
    {
        return $this->patternProperties;
    }

    /**
     * @return static
     */
    public function setPatternProperties(array $patternProperties)
    {
        $this->patternProperties = $patternProperties;

        return $this;
    }

    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * @return static
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }

    public function getRequired(): ?array
    {
        return $this->required;
    }

    /**
     * @return static
     */
    public function setRequired(array $required)
    {
        $this->required = $required;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return static
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return static
     */
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }

    public function isUniqueItems(): ?bool
    {
        return $this->uniqueItems;
    }

    /**
     * @return static
     */
    public function setIsUniqueItems(bool $uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes runtime.Object, with
     * TypeMeta and ObjectMeta. The type must be object. It is allowed to further restrict the embedded
     * object. kind, apiVersion and metadata are validated automatically.
     * x-kubernetes-preserve-unknown-fields is allowed to be true, but does not have to be if the object is
     * fully specified (up to kind, apiVersion, metadata).
     */
    public function isXKubernetesEmbeddedResource(): ?bool
    {
        return $this->xKubernetesEmbeddedResource;
    }

    /**
     * x-kubernetes-embedded-resource defines that the value is an embedded Kubernetes runtime.Object, with
     * TypeMeta and ObjectMeta. The type must be object. It is allowed to further restrict the embedded
     * object. kind, apiVersion and metadata are validated automatically.
     * x-kubernetes-preserve-unknown-fields is allowed to be true, but does not have to be if the object is
     * fully specified (up to kind, apiVersion, metadata).
     *
     * @return static
     */
    public function setIsXKubernetesEmbeddedResource(bool $xKubernetesEmbeddedResource)
    {
        $this->xKubernetesEmbeddedResource = $xKubernetesEmbeddedResource;

        return $this;
    }

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a string. If this is
     * true, an empty type is allowed and type as child of anyOf is permitted if following one of the
     * following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     */
    public function isXKubernetesIntOrString(): ?bool
    {
        return $this->xKubernetesIntOrString;
    }

    /**
     * x-kubernetes-int-or-string specifies that this value is either an integer or a string. If this is
     * true, an empty type is allowed and type as child of anyOf is permitted if following one of the
     * following patterns:
     *
     * 1) anyOf:
     *    - type: integer
     *    - type: string
     * 2) allOf:
     *    - anyOf:
     *      - type: integer
     *      - type: string
     *    - ... zero or more
     *
     * @return static
     */
    public function setIsXKubernetesIntOrString(bool $xKubernetesIntOrString)
    {
        $this->xKubernetesIntOrString = $xKubernetesIntOrString;

        return $this;
    }

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from pruning fields which
     * are not specified in the validation schema. This affects fields recursively, but switches back to
     * normal pruning behaviour if nested properties or additionalProperties are specified in the schema.
     * This can either be true or undefined. False is forbidden.
     */
    public function isXKubernetesPreserveUnknownFields(): ?bool
    {
        return $this->xKubernetesPreserveUnknownFields;
    }

    /**
     * x-kubernetes-preserve-unknown-fields stops the API server decoding step from pruning fields which
     * are not specified in the validation schema. This affects fields recursively, but switches back to
     * normal pruning behaviour if nested properties or additionalProperties are specified in the schema.
     * This can either be true or undefined. False is forbidden.
     *
     * @return static
     */
    public function setIsXKubernetesPreserveUnknownFields(bool $xKubernetesPreserveUnknownFields)
    {
        $this->xKubernetesPreserveUnknownFields = $xKubernetesPreserveUnknownFields;

        return $this;
    }
}
