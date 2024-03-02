<?php
class connection extends mysqli
{
    function __construct()
    {
        parent::__construct("localhost", "root", "root", "safe");
        $this->set_charset("utf8");
        if ($this->connect_errno) {
            echo "Connection failed!";
        }
    }
    function InsertConsult($sql)
    {
        $result = $this->query($sql);
        if (!$result) {
            return false;
        } else {
            return $this->insert_id;
        }
    }
    function ReturnConsult($sql)
    {
        $data = $this->query($sql);
        return $data;
    }
    function CloseConnection()
    {
        $this->close();
    }
}
