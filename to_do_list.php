<?php

include "db.php";

class ToDoList
{

    private static $conn;

    public function __construct()
    {
        self::$conn = new DB ;
    }

    public static function insert($input)
    {
        $insert = "INSERT INTO tasks (task) VALUES ('".$input."')";
        return self::$conn->connect()->query($insert);
    }

    public static function update($task_id)
    {
//         "UPDATE  tasks SET  task = '".$task_id."' ";
//        return self::$conn->connect()->query($del);
    }

    public static function delete($task_id)
    {
        $del = " DELETE FROM tasks WHERE id = '".$task_id."' ";
        return self::$conn->connect()->query($del);
    }

}