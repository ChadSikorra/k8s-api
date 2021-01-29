<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Storage\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * CSIDriverSpec is the specification of a CSIDriver.
 */
class CSIDriverSpec
{
    /**
     * @Kubernetes\Attribute("attachRequired")
     * @var bool|null
     */
    protected $attachRequired = null;

    /**
     * @Kubernetes\Attribute("podInfoOnMount")
     * @var bool|null
     */
    protected $podInfoOnMount = null;

    /**
     * @param bool|null $attachRequired
     * @param bool|null $podInfoOnMount
     */
    public function __construct(?bool $attachRequired = null, ?bool $podInfoOnMount = null)
    {
        $this->attachRequired = $attachRequired;
        $this->podInfoOnMount = $podInfoOnMount;
    }

    /**
     * attachRequired indicates this CSI volume driver requires an attach operation (because it implements
     * the CSI ControllerPublishVolume() method), and that the Kubernetes attach detach controller should
     * call the attach volume interface which checks the volumeattachment status and waits until the volume
     * is attached before proceeding to mounting. The CSI external-attacher coordinates with CSI volume
     * driver and updates the volumeattachment status when the attach operation is complete. If the
     * CSIDriverRegistry feature gate is enabled and the value is specified to false, the attach operation
     * will be skipped. Otherwise the attach operation will be called.
     */
    public function isAttachRequired(): ?bool
    {
        return $this->attachRequired;
    }

    /**
     * attachRequired indicates this CSI volume driver requires an attach operation (because it implements
     * the CSI ControllerPublishVolume() method), and that the Kubernetes attach detach controller should
     * call the attach volume interface which checks the volumeattachment status and waits until the volume
     * is attached before proceeding to mounting. The CSI external-attacher coordinates with CSI volume
     * driver and updates the volumeattachment status when the attach operation is complete. If the
     * CSIDriverRegistry feature gate is enabled and the value is specified to false, the attach operation
     * will be skipped. Otherwise the attach operation will be called.
     *
     * @return static
     */
    public function setIsAttachRequired(bool $attachRequired)
    {
        $this->attachRequired = $attachRequired;

        return $this;
    }

    /**
     * If set to true, podInfoOnMount indicates this CSI volume driver requires additional pod information
     * (like podName, podUID, etc.) during mount operations. If set to false, pod information will not be
     * passed on mount. Default is false. The CSI driver specifies podInfoOnMount as part of driver
     * deployment. If true, Kubelet will pass pod information as VolumeContext in the CSI
     * NodePublishVolume() calls. The CSI driver is responsible for parsing and validating the information
     * passed in as VolumeContext. The following VolumeConext will be passed if podInfoOnMount is set to
     * true. This list might grow, but the prefix will be used. "csi.storage.k8s.io/pod.name": pod.Name
     * "csi.storage.k8s.io/pod.namespace": pod.Namespace "csi.storage.k8s.io/pod.uid": string(pod.UID)
     */
    public function isPodInfoOnMount(): ?bool
    {
        return $this->podInfoOnMount;
    }

    /**
     * If set to true, podInfoOnMount indicates this CSI volume driver requires additional pod information
     * (like podName, podUID, etc.) during mount operations. If set to false, pod information will not be
     * passed on mount. Default is false. The CSI driver specifies podInfoOnMount as part of driver
     * deployment. If true, Kubelet will pass pod information as VolumeContext in the CSI
     * NodePublishVolume() calls. The CSI driver is responsible for parsing and validating the information
     * passed in as VolumeContext. The following VolumeConext will be passed if podInfoOnMount is set to
     * true. This list might grow, but the prefix will be used. "csi.storage.k8s.io/pod.name": pod.Name
     * "csi.storage.k8s.io/pod.namespace": pod.Namespace "csi.storage.k8s.io/pod.uid": string(pod.UID)
     *
     * @return static
     */
    public function setIsPodInfoOnMount(bool $podInfoOnMount)
    {
        $this->podInfoOnMount = $podInfoOnMount;

        return $this;
    }
}
