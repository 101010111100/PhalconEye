<?php

/**
 * PhalconEye
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to phalconeye@gmail.com so we can send you a copy immediately.
 *
 */

namespace Core\Model;

/**
 * @Source("access")
 * @BelongsTo("role_id", "Role", "id")
 */
class Access extends \Engine\Model
{

    /**
     * @Primary
     * @Identity
     * @Column(type="string", nullable=false, column="object")
     */
    public $object;

    /**
     * @Primary
     * @Column(type="string", nullable=false, column="action")
     */
    public $action;

    /**
     * @Primary
     * @Column(type="integer", nullable=false, column="role_id")
     */
    public $role_id;

    /**
     * @Column(type="string", nullable=true, column="value")
     */
    public $value;

}
