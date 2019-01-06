<?php

include "admin/category/db.php";

class DataOperation extends Database
{
//    public function insert_record($table,$fields){
//
//        $sql = "";
//        $sql .= "INSERT INTO ".$table;
//        $sql .= " (".implode(",", array_keys($fields)).") VALUES ";
//        $sql .= "('".implode("','", array_values($fields))."')";
//        $query = mysqli_query($this->con,$sql);
//        if($query){
//            return true;
//        }
//    }

    public function fetch_record($table){
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $query = mysqli_query($this->con,$sql);
        while($row = mysqli_fetch_assoc($query)){
            $array[] = $row;
        }
        return $array;
    }
    public function select_record($table,$where){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT * FROM ".$table." WHERE ".$condition;
        $query = mysqli_query($this->con,$sql);
        $row = mysqli_fetch_array($query);
        return $row;

    }

    public function update_record($table,$where,$fields){
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        foreach ($fields as $key => $value) {
            $sql .= $key . "='".$value."', ";
        }
        $sql = substr($sql, 0,-2);
        $sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
        if(mysqli_query($this->con,$sql)){
            return true;
        }
    }

//    public function delete_record($table,$where){
//        $sql = "";
//        $condition = "";
//        foreach ($where as $key => $value) {
//            $condition .= $key . "='" . $value . "' AND ";
//        }
//        $condition = substr($condition, 0, -5);
//        $sql = "DELETE FROM ".$table." WHERE ".$condition;
//        if(mysqli_query($this->con,$sql)){
//            return true;
//        }
//    }
}

$obj = new DataOperation;

if (isset($_POST["submit"])) {
    $myArray = array(
        "fname" => $_POST["fname"],
        "lname" => $_POST["lname"],
        "uname" => $_POST["uname"],
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "address" => $_POST["address"],
        "phone" => $_POST["phone"],
        "ans" => $_POST["ans"]
    );
    if ($obj->insert_record("user", $myArray)) {
        header("location:user.php? msg=Record Inserted");
    }
}

if (isset($_POST["edit"])) {
    $userID = $_POST["userID"];
    $where = array("userID"=>$userID);
    $myArray = array(
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "uname" => $_POST['uname'],
        "email" => $_POST['email'],
        "password" => md5($_POST['password']),
        "address" => $_POST['address'],
        "phone" =>$_POST['phone'],
        "ans" => $_POST['ans']

    );
    if ($obj->update_record("user", $where, $myArray)) {
        header("location:user.php?msg=Record Updated Successfully");
    }
}
//if (isset($_GET["delete"])) {
//    $userID = $_GET["userID"] ?? null;
//    $where = array("userID" => $userID);
//    if ($obj->delete_record("user", $where)) {
//        header("location:view.php?msg=Record Deleted Successfully");
//    }
//}

