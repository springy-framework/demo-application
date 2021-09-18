<?php

/**
 * Sample user security authentication.
 *
 * @copyright 2019 Fernando Val
 * @author    Fernando Val <fernando@fval.com.br>
 * @license   https://github.com/springy-framework/demo-application/blob/master/LICENSE MIT
 */

namespace App\Extensions;

use Springy\Security\IdentityInterface;

/**
 * User class.
 */
class User implements IdentityInterface
{
    public $uid;
    public $name;

    /**
     * Loads the user data by given credentials.
     *
     * @param array $data
     *
     * @return void
     */
    public function loadByCredentials(array $data)
    {
        $uid = $data[$this->getIdField()] ?? null;

        if ($uid == 'test') {
            $this->uid = $uid;
            $this->name = 'Homer';
        }
    }

    /**
     * Fills the user data from session.
     *
     * @param array $data
     *
     * @return void
     */
    public function fillFromSession(array $data)
    {
    }

    /**
     * Returns the user identification.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->uid;
    }

    /**
     * Returns the user unique identification field.
     *
     * @return string
     */
    public function getIdField(): string
    {
        return 'uuid';
    }

    /**
     * Returns the session key.
     *
     * @return string
     */
    public function getSessionKey(): string
    {
        return 'T35T';
    }

    /**
     * Returns an array with data to be saved in session.
     *
     * @return array
     */
    public function getSessionData(): array
    {
        return [
            'uuid' => $this->uid,
            'name' => $this->name,
        ];
    }

    /**
     * Returns an array with credentials data.
     *
     * @return array
     */
    public function getCredentials(): array
    {
        return [];
    }

    /**
     * Checks if current user has permission for given ACL object.
     *
     * @param string $aclObjectName
     *
     * @return bool
     */
    public function hasPermissionFor(string $aclObjectName): bool
    {
        return $aclObjectName === '';
    }
}
