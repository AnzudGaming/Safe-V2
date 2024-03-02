<?php
date_default_timezone_set('America/Mazatlan');

class User
{
    function __construct()
    {
        require_once("connection.php");
        $this->conexion = new connection();
    }
    function search($user, $pass)
    {
        $sql = "SELECT * FROM users WHERE user='{$user}' AND pass='{$pass}' AND estatus=1";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function insert($user, $pass, $type_user, $fkemployee)
    {
        $CODE_USER='USR-00'.rand(00000,99999);        
        $sql = "INSERT INTO users(iduser, cod_user, user, pass, type_user, fkemployee, estatus) VALUES (NULL, '{$CODE_USER}', '{$user}', '{$pass}','{$type_user}', '{$fkemployee}', 1)";
        $result = $this->conexion->InsertConsult($sql);
        return $result;
    }
    function show()
    {
        $sql = "SELECT type_user FROM users";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function show1()
    {
        $sql = "SELECT * FROM users WHERE estatus=1";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function show2()
    {
        $sql = "SELECT * FROM users WHERE estatus=0";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function enable($iduser)
    {
        $sql = "UPDATE users SET estatus=1 WHERE iduser='{$iduser}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function disable($iduser)
    {
        $sql = "UPDATE users SET estatus=0 WHERE iduser='{$iduser}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function search_id($iduser)
    {
        $sql = "SELECT * FROM users WHERE iduser='{$iduser}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;        
    }
    function update($user, $pass, $type_user, $iduser)
    {
        $sql = "UPDATE users SET user='{$user}', pass='{$pass}', type_user='{$type_user}' WHERE iduser='{$iduser}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
}
class Cargament
{
    function __construct()
    {
        require_once("connection.php");
        $this->conexion = new connection();
    }
    function show()
    {
        $sql = "SELECT * FROM cargament WHERE estatus=1 ORDER BY foil ASC";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function showOutput()
    {
        $sql = "SELECT * FROM cargament WHERE types = 'Output' AND estatus=1 ORDER BY dates_output ASC";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function showInput()
    {
        $sql = "SELECT * FROM cargament WHERE types = 'Input' AND estatus=1 ORDER BY dates_input ASC";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function insert($cargament, $weights, $types, $dates_input, $times_input)
    {
        $ST='ST00'.rand(00000,99999);
        $sql = "INSERT INTO cargament(idcargament, foil, cargament, weights, types, dates_input, dates_output, times_input, times_output, estatus) VALUES (NULL, '{$ST}', '{$cargament}', '{$weights}', '{$types}', '{$dates_input}', NULL, '{$times_input}', NULL, 1)";
        $result = $this->conexion->InsertConsult($sql);
        return $result;
        
    }
    function update($types, $dates_output, $times_output, $idcargament)
    {
        $sql = "UPDATE cargament SET types='{$types}', dates_output='{$dates_output}', times_output='{$times_output}' WHERE idcargament='{$idcargament}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function search_id($idcargament)
    {
        $sql = "SELECT * FROM cargament WHERE idcargament='{$idcargament}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
}
class Employee
{
    function __construct()
    {
        require_once("connection.php");
        $this->conexion = new connection();
    }
    function show()
    {
        $sql = "SELECT * FROM employee WHERE estatus=1 ORDER BY last_name ASC";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function show1()
    {
        $sql = "SELECT * FROM employee WHERE estatus=0 ORDER BY last_name ASC";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function insert($names, $last_name, $age, $gender, $date_birth)
    {
        $EMP='EMP-00'.rand(00000,99999);
        $sql = "INSERT INTO employee(idemployee, cod_emp, names, last_name, age, gender, date_birth, estatus) VALUES (NULL, '{$EMP}', '{$names}', '{$last_name}', '{$age}', '{$gender}', '{$date_birth}', 1)";
        $result = $this->conexion->InsertConsult($sql);
        return $result;
    }
    function search_id($idemployee)
    {
        $sql = "SELECT * FROM employee WHERE idemployee='{$idemployee}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;        
    }
    function update($names, $last_name, $age, $date_birth,  $idemployee)
    {
        $sql = "UPDATE employee SET names='{$names}', last_name='{$last_name}', age='{$age}', date_birth='{$date_birth}' WHERE idemployee='{$idemployee}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function enable($idemployee)
    {
        $sql = "UPDATE employee SET estatus=1 WHERE idemployee='{$idemployee}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
    function disable($idemployee)
    {
        $sql = "UPDATE employee SET estatus=0 WHERE idemployee='{$idemployee}'";
        $result = $this->conexion->ReturnConsult($sql);
        return $result;
    }
}
?>