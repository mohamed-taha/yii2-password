<?php
/*
 * This file is part of Account.
 *
 * (c) 2014 Charles Pick
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpnode\yii\password\strategies;

class HttpDigestStrategy extends PasswordStrategy
{
    /**
     * The realm used for this strategy
     * @var string
     */
    public $realm;

    /**
     * @inheritdoc
     */
    public function encode($password)
    {
        return md5($this->getUsername() . ':' . $this->realm . ':' . $password);
    }
}
