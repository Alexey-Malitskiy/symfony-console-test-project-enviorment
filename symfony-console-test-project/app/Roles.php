<?php

require_once "GenerateRoles.php";

class Roles implements GenerateRoles
{
    private $skil_write_code = "write code";
    private $skil_test_code = "test the code";
    private $skil_communicate_manager = "communicate with the manager";
    private $skil_draw = "draw";
    private $skil_set_tasks = "set tasks";

    /**
     * @param string $user
     * @return array
     */
    public function getRoles(string $user) : array
    {
        $user_roles = [];
        switch ($user) {
            case ("developer") :
                $user_roles = [$this->skil_write_code, $this->skil_test_code, $this->skil_communicate_manager];
                break;
            case ("tester") :
                $user_roles = [$this->skil_test_code, $this->skil_communicate_manager, $this->skil_set_tasks];
                break;
            case ("designer") :
                $user_roles = [$this->skil_draw, $this->skil_communicate_manager];
                break;
            case ("manager") :
                $user_roles = [$this->skil_set_tasks];
                break;
        }
        return $user_roles;
    }
}
