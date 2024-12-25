<?php
class model
{
    public $connection = "";
    public function __construct()
    {  $config="";
        
         session_start();
        // database connectivity
        $conn = $this->connection = new mysqli("localhost", "root", "", "roosh");
        if ($conn) {
            // echo "<h5>Connection stablished successfully</h5>";
        } else {
            die(mysqli_error($conn));
        }
    }

    // create member function for select all data
    public function selectalldata($table)
    {
        $select = "select * from $table";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;

    }


    public function one($table)
    {
        $select = "select * FROM $table";
        $exe = mysqli_query($this->connection, $select);
        $arr=mysqli_fetch_array($exe);
           
        
        return $arr;

    }

    //create member function for fetch one product
    public function onepro($data, $table,$Colunm)
    {
        $select = "select * FROM $table WHERE  $table .`$Colunm` = $data";
        $exe = mysqli_query($this->connection, $select);
        $arr=mysqli_fetch_array($exe);
           
        
        return $arr;

    }

    public function subtotal($table, $column, $column1, $id)
    {
        $select = "select sum($column) as total from $table where $column1='$id'";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;

    }

    // create member function for select all data of perticlure user
    public function selectall($table,$column,$data)
    {
        $select = "select * from $table where $column='$data'";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;

    }

    // create member function for select all data of perticlure user

    public function select($table,$column,$id)
    {
        
        $select = "select * from $table WHERE `$table`. $column = '$id'";
        $exe = mysqli_query($this->connection, $select);
       $arr=null;
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;
    

    }



    // create member function for join data tables
    public function joindata($table, $table1, $column, $customerid, $where)
    {
        $select = "select * from $table join $table1 on $where where $column='$customerid'";

        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;

    }


    // create member function for join data tables
    public function joindata1($table, $table1, $table2, $where, $where1, $column, $customerid)
    {
        $select = "select * from $table join $table1 on $where join $table2 on $where1  where $table1.$column='$customerid'";
        $exe = mysqli_query($this->connection, $select);
        while ($fetch = mysqli_fetch_array($exe)) {
            $arr[] = $fetch;
        }
        return $arr;

    }
    // create a member function for insall data
    public function insalldata($table, $data)
    {
        //key convert array into value or string
        $column = array_keys($data);
        $column1 = implode(",", $column);
        //values convert array into value or string
        $value = array_values($data);
        $value1 = implode("','", $value);

        $insert = "insert into $table($column1)values('$value1')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }

   
    //delete all data
    public function delete($id, $table, $where)
    {
        $delete = "DELETE FROM $table WHERE `$table`.`$where` = $id";
        $exe = mysqli_query($this->connection, $delete);

    }
  
    

    


}
?>