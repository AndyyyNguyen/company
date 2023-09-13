<?php
class Dep
{
    public $department_id;
    public $department_name;

    function __construct($department_id, $department_name)
    {
        $this->department_id = $department_id;
        $this->department_name = $department_name;
    }
}
