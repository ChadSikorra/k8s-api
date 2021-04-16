<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.20.6
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
 * Represents an ISCSI disk. ISCSI volumes can only be mounted as read/write once. ISCSI volumes
 * support ownership management and SELinux relabeling.
 */
class ISCSIVolumeSource
{
    /**
     * @Kubernetes\Attribute("chapAuthDiscovery")
     * @var bool|null
     */
    protected $chapAuthDiscovery = null;

    /**
     * @Kubernetes\Attribute("chapAuthSession")
     * @var bool|null
     */
    protected $chapAuthSession = null;

    /**
     * @Kubernetes\Attribute("fsType")
     * @var string|null
     */
    protected $fsType = null;

    /**
     * @Kubernetes\Attribute("initiatorName")
     * @var string|null
     */
    protected $initiatorName = null;

    /**
     * @Kubernetes\Attribute("iqn",isRequired=true)
     * @var string
     */
    protected $iqn;

    /**
     * @Kubernetes\Attribute("iscsiInterface")
     * @var string|null
     */
    protected $iscsiInterface = null;

    /**
     * @Kubernetes\Attribute("lun",isRequired=true)
     * @var int
     */
    protected $lun;

    /**
     * @Kubernetes\Attribute("portals")
     * @var string[]|null
     */
    protected $portals = null;

    /**
     * @Kubernetes\Attribute("readOnly")
     * @var bool|null
     */
    protected $readOnly = null;

    /**
     * @Kubernetes\Attribute("secretRef",type="model",model=LocalObjectReference::class)
     * @var LocalObjectReference|null
     */
    protected $secretRef = null;

    /**
     * @Kubernetes\Attribute("targetPortal",isRequired=true)
     * @var string
     */
    protected $targetPortal;

    /**
     * @param string $iqn
     * @param int $lun
     * @param string $targetPortal
     */
    public function __construct(string $iqn, int $lun, string $targetPortal)
    {
        $this->iqn = $iqn;
        $this->lun = $lun;
        $this->targetPortal = $targetPortal;
    }

    /**
     * whether support iSCSI Discovery CHAP authentication
     */
    public function isChapAuthDiscovery(): ?bool
    {
        return $this->chapAuthDiscovery;
    }

    /**
     * whether support iSCSI Discovery CHAP authentication
     *
     * @return static
     */
    public function setIsChapAuthDiscovery(bool $chapAuthDiscovery)
    {
        $this->chapAuthDiscovery = $chapAuthDiscovery;

        return $this;
    }

    /**
     * whether support iSCSI Session CHAP authentication
     */
    public function isChapAuthSession(): ?bool
    {
        return $this->chapAuthSession;
    }

    /**
     * whether support iSCSI Session CHAP authentication
     *
     * @return static
     */
    public function setIsChapAuthSession(bool $chapAuthSession)
    {
        $this->chapAuthSession = $chapAuthSession;

        return $this;
    }

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is
     * supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info: https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     */
    public function getFsType(): ?string
    {
        return $this->fsType;
    }

    /**
     * Filesystem type of the volume that you want to mount. Tip: Ensure that the filesystem type is
     * supported by the host operating system. Examples: "ext4", "xfs", "ntfs". Implicitly inferred to be
     * "ext4" if unspecified. More info: https://kubernetes.io/docs/concepts/storage/volumes#iscsi
     *
     * @return static
     */
    public function setFsType(string $fsType)
    {
        $this->fsType = $fsType;

        return $this;
    }

    /**
     * Custom iSCSI Initiator Name. If initiatorName is specified with iscsiInterface simultaneously, new
     * iSCSI interface <target portal>:<volume name> will be created for the connection.
     */
    public function getInitiatorName(): ?string
    {
        return $this->initiatorName;
    }

    /**
     * Custom iSCSI Initiator Name. If initiatorName is specified with iscsiInterface simultaneously, new
     * iSCSI interface <target portal>:<volume name> will be created for the connection.
     *
     * @return static
     */
    public function setInitiatorName(string $initiatorName)
    {
        $this->initiatorName = $initiatorName;

        return $this;
    }

    /**
     * Target iSCSI Qualified Name.
     */
    public function getIqn(): string
    {
        return $this->iqn;
    }

    /**
     * Target iSCSI Qualified Name.
     *
     * @return static
     */
    public function setIqn(string $iqn)
    {
        $this->iqn = $iqn;

        return $this;
    }

    /**
     * iSCSI Interface Name that uses an iSCSI transport. Defaults to 'default' (tcp).
     */
    public function getIscsiInterface(): ?string
    {
        return $this->iscsiInterface;
    }

    /**
     * iSCSI Interface Name that uses an iSCSI transport. Defaults to 'default' (tcp).
     *
     * @return static
     */
    public function setIscsiInterface(string $iscsiInterface)
    {
        $this->iscsiInterface = $iscsiInterface;

        return $this;
    }

    /**
     * iSCSI Target Lun number.
     */
    public function getLun(): int
    {
        return $this->lun;
    }

    /**
     * iSCSI Target Lun number.
     *
     * @return static
     */
    public function setLun(int $lun)
    {
        $this->lun = $lun;

        return $this;
    }

    /**
     * iSCSI Target Portal List. The portal is either an IP or ip_addr:port if the port is other than
     * default (typically TCP ports 860 and 3260).
     */
    public function getPortals(): ?array
    {
        return $this->portals;
    }

    /**
     * iSCSI Target Portal List. The portal is either an IP or ip_addr:port if the port is other than
     * default (typically TCP ports 860 and 3260).
     *
     * @return static
     */
    public function setPortals(array $portals)
    {
        $this->portals = $portals;

        return $this;
    }

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     */
    public function isReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * ReadOnly here will force the ReadOnly setting in VolumeMounts. Defaults to false.
     *
     * @return static
     */
    public function setIsReadOnly(bool $readOnly)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * CHAP Secret for iSCSI target and initiator authentication
     */
    public function getSecretRef(): ?LocalObjectReference
    {
        return $this->secretRef;
    }

    /**
     * CHAP Secret for iSCSI target and initiator authentication
     *
     * @return static
     */
    public function setSecretRef(LocalObjectReference $secretRef)
    {
        $this->secretRef = $secretRef;

        return $this;
    }

    /**
     * iSCSI Target Portal. The Portal is either an IP or ip_addr:port if the port is other than default
     * (typically TCP ports 860 and 3260).
     */
    public function getTargetPortal(): string
    {
        return $this->targetPortal;
    }

    /**
     * iSCSI Target Portal. The Portal is either an IP or ip_addr:port if the port is other than default
     * (typically TCP ports 860 and 3260).
     *
     * @return static
     */
    public function setTargetPortal(string $targetPortal)
    {
        $this->targetPortal = $targetPortal;

        return $this;
    }
}
