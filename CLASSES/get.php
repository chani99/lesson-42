<?php
class get  {
    public $idDetails="";
    public $id;
    public $DB;


            function __construct ($id, $DB) {
                $this->id = $id;
                $this->DB = $DB;
            }
  
    function userDetals($DB){
                $this->DB = $DB;
                $DB_employee = $DB->prepare("SELECT * FROM proj_emplyee WHERE worker_id = 1");
                $DB_employee->execute();
                $row = $DB_employee;

                while ($row = $DB_employee->fetch()) {
                    if($this->id == $row["worker_id"]){
                $this->idDetails = "workers name is:" .  $row["worker_name"] . "</br>" .
                    "start work at: ". $row["work_start"];
                    }
                }    

                return $this->idDetails;

    }


}