<?php

require_once "Basic.php";
require_once "Roles.php";
require_once "GenerateRoles.php";

class CheckUserRoles extends Basic
{
    public $result = 'false';

    /**
     * @param string $user
     * @param string $skill
     * @return string
     */
    public function checkUserRole(string $user, string $skill) : string
    {
        $user_roles = $this->generate_roles->getRoles($user);
        if(!empty($user_roles)) {
            foreach ($user_roles as $user_role) {
                if ($user_role === $skill) {
                    return $this->result = 'true';
                }
            }
        }

        return $this->result;
    }
}
