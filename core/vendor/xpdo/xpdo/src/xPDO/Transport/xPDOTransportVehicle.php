<?php
/**
 * This file is part of the xPDO package.
 *
 * Copyright (c) Jason Coward <jason@opengeek.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace xPDO\Transport;

use xPDO\xPDO;

/**
 * Represents an xPDOTransport embedded within an {@link xPDOTransport} package.
 *
 * @package xpdo
 * @subpackage transport
 */
class xPDOTransportVehicle extends xPDOVehicle {
    public $class = 'xPDO\\Transport\\xPDOTransportVehicle';

    /**
     * Copies the transport into the vehicle and transforms the payload for storage.
     */
    protected function _compilePayload(& $transport) {
        parent :: _compilePayload($transport);
        $body = array ();
        $cacheManager = $transport->xpdo->getCacheManager();
        if ($cacheManager) {
            if (isset($this->payload['object'])) {
                $object = $this->payload['object'];
                $fileSource = $object['source'];
                $body['source'] = $transport->signature . '/' . str_replace('\\', '/', $this->payload['class']) . '/' . $this->payload['signature'] . '/';
                $fileTarget = $transport->path . $body['source'];
                $body['target'] = $object['target'];
                $fileName = isset ($object['name']) ? $object['name'] : basename($fileSource);
                $body['name'] = $fileName;
                if (!is_writable($fileTarget)) {
                    $cacheManager->writeTree($fileTarget);
                }
                if (file_exists($fileSource) && is_writable($fileTarget)) {
                    $copied = false;
                    if (is_file($fileSource)) {
                        $copied = $cacheManager->copyFile($fileSource, $fileTarget . $fileName);
                    }
                    if (!$copied) {
                        $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, "Could not copy file from {$fileSource} to {$fileTarget}{$fileName}");
                        $body = null;
                    }
                } else {
                    $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, "Source file {$fileSource} is missing or {$fileTarget} is not writable");
                    $body = null;
                }
            }
        }
        if (!empty($body)) {
            $this->payload['object'] = $body;
        }
    }

    /**
     * Install the xPDOTransport represented by this vehicle into the transport host.
     */
    public function install(& $transport, $options) {
        $installed = $this->_installTransport($transport, $options);
        return $installed;
    }

    /**
     * Install the xPDOTransport from the vehicle payload.
     *
     * @param xPDOTransport $transport The host xPDOTransport instance.
     * @param array $options Any optional attributes to apply to the installation.
     * @return bool
     */
    protected function _installTransport(& $transport, $options) {
        $installed = false;
        $vOptions = $this->get($transport, $options);
        if (isset($vOptions['object']) && isset($vOptions['object']['source']) && isset($vOptions['object']['target']) && isset($vOptions['object']['name'])) {
            if ($transport->xpdo->getDebug() === true)
                $transport->xpdo->log(xPDO::LOG_LEVEL_DEBUG, "Installing Vehicle: " . print_r($vOptions, true));
            $state = isset($vOptions['state']) ? $vOptions['state'] : xPDOTransport::STATE_PACKED;
            $pkgSource = $transport->path . $vOptions['object']['source'] . $vOptions['object']['name'];
            $pkgTarget = eval($vOptions['object']['target']);
            $object = xPDOTransport::retrieve($transport->xpdo, $pkgSource, $pkgTarget, $state);
            if ($this->validate($transport, $object, $vOptions)) {
                $installed = $object->install($vOptions);
                if (!$installed) {
                    $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Error installing vehicle: ' . print_r($vOptions, true));
                }
                elseif (!$this->resolve($transport, $object, $vOptions)) {
                    $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not resolve vehicle: ' . print_r($vOptions, true));
                }
            } else {
                $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not validate vehicle: ' . print_r($vOptions, true));
            }
        } else {
            $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not load vehicle: ' . print_r($vOptions, true));
        }
        return $installed;
    }

    /**
     * Uninstalls vehicle artifacts from the transport host.
     */
    public function uninstall(& $transport, $options) {
        $uninstalled = false;
        $vOptions = $this->get($transport, $options);
        if (isset($vOptions['object']) && isset($vOptions['object']['source']) && isset($vOptions['object']['target']) && isset($vOptions['object']['name'])) {
            if ($transport->xpdo->getDebug() === true)
                $transport->xpdo->log(xPDO::LOG_LEVEL_DEBUG, "Installing Vehicle: " . print_r($vOptions, true));
            $state = isset($vOptions['state']) ? $vOptions['state'] : xPDOTransport::STATE_UNPACKED;
            $pkgSource = $transport->path . $vOptions['object']['source'] . $vOptions['object']['name'];
            $pkgTarget = eval($vOptions['object']['target']);
            $object = xPDOTransport::retrieve($transport->xpdo, $pkgSource, $pkgTarget, $state);
            if ($this->validate($transport, $object, $vOptions)) {
                $uninstalled = $object->uninstall($vOptions);
                if (!$uninstalled) {
                    $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not uninstall vehicle: ' . print_r($vOptions, true));
                }
                elseif (!$this->resolve($transport, $object, $vOptions)) {
                    $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not resolve vehicle: ' . print_r($vOptions, true));
                }
            } else {
                $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not validate vehicle: ' . print_r($vOptions, true));
            }
        } else {
            $transport->xpdo->log(xPDO::LOG_LEVEL_ERROR, 'Could not load vehicle: ' . print_r($vOptions, true));
        }
        return $uninstalled;
    }

    /**
     * Put an xPDOTransport representation into a transport package.
     */
    public function put(& $transport, & $object, $attributes = array ()) {
        if (!isset ($this->payload['class'])) {
            $this->payload['class'] = $this->class;
        }
        if (is_array($object) && isset ($object['source']) && isset ($object['target'])) {
            if (!isset($object['name'])) $object['name'] = basename($object['source']);
            $this->payload['object'] = $object;
        }
        parent :: put($transport, $object, $attributes);
    }
}
