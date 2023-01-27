<?php

require_once "to_do_list.php";
include_once "db.php";

$option = "delete";
new ToDoList();
if(ToDoList::$option(1))
{
    var_dump("done!");
}