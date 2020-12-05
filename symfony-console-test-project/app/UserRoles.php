<?php

require_once "Basic.php";
require_once "Roles.php";
require_once "GenerateRoles.php";

class UserRoles extends Basic
{
    /**
     * @param string $user
     * @return array
     */
    public function getUserRoles(string $user) : array
    {
        $user_roles = $this->generate_roles->getRoles($user);

        return $user_roles;
    }
}
