<?php
/*
 * @copyright 2021 Daniel Engelschalk <hello@mrkampf.com>
 */

namespace Proxmox\Api\Nodes\Node\Lxc\VmId;

use Proxmox\Helper\PVEPathClassBase;
use Proxmox\PVE;

/**
 * Class Migration
 * @package Proxmox\Api\Nodes\Node\Lxc\VmId
 */
class Migration extends PVEPathClassBase
{
    /**
     * Init constructor.
     * @param PVE $pve
     * @param string $parentAdditional
     */
    public function __construct(PVE $pve, string $parentAdditional)
    {
        parent::__construct($pve, $parentAdditional . 'migrate/');
    }

    /**
     * Migrate the container to another node. Creates a new migration task.
     * @link https://pve.proxmox.com/pve-docs/api-viewer/index.html#/nodes/%7Bnode%7D/lxc/%7Bvmid%7D/migrate
     * @param $params array
     * @return array|null
     */
    public function post(array $params = []): ?array
    {
        return $this->getPve()->getApi()->post($this->getPathAdditional(), $params);
    }
}
