<?php

require_once "Roles.php";

class Basic
{
    protected $generate_roles;

    public function __construct(GenerateRoles $generate_roles)
    {
        $this->generate_roles = $generate_roles;
    }
}
