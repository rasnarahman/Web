<?php
require_once('abstractDAO.php');
require_once('mailing.php');

class mailinglistDAO extends abstractDAO {
        
    function __construct() {
        try{
            parent::__construct();
        } catch(mysqli_sql_exception $e){
            throw $e;
        }
    }
    
    
    public function getMailingLists(){
        //The query method returns a mysqli_result object
        $result = $this->mysqli->query('SELECT customerName, phoneNumber, emailAddress, referrer from mailinglist');
        $mailinglists = Array();
		
		//echo $result->num_rows;
        
        if($result->num_rows >= 1){
            while($row = $result->fetch_assoc()){
                $mailinglist = new MailingList($row['customerName'],$row['phoneNumber'],$row['emailAddress'], $row['referrer'],  null);
                $mailinglists[] = $mailinglist;  
            }
            $result->free();
            return $mailinglists;
        }
        $result->free();
        return false;
	
    }
}

?>
