<?php
class button {
    public $mesegge;
    public $UserDetails;
$statement;
$DB;


    function __construct ($UserDetails, $DB) {
        $this->UserDetails = UserDetails;
        $this->DB = DB;
        $this->statement = $my_Data_Base->prepare("INSERT INTO proj_emplyee(worker_id, worker_name, work_start)
                VALUES(:worker_id, :worker_name, :work_start)");
            $statement->execute(array(
                "worker_id"=> $UserDetails[''],
                "worker_name"=> $WorkerNeme,
                "work_start"=>  $WorkerDate,));
                echo "worker updated to database";
                    }
  
  
               }
    }

    
    function return($idDetails;) {
        $this->idDetails = $idDetails;

    }

}



