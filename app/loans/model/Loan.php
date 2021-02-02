<?php 
class Loan{
		private $db;

		public function __construct(){
			$this->db = new DataBase;
		}

        
        public function addLoan($param){
            $this->db->query("INSERT INTO loan (loan_delivery_date, loan_return_date, user_dni, book_id,loan_status) 
                            VALUES (:loan_delivery_date,:loan_return_date,:user_dni,:book_id,:loan_status)");

			$this->db->bind(':book_id', $param['book-id']);
            $this->db->bind(':user_dni', $param['user-dni']);
            $this->db->bind(':loan_delivery_date', $param['loan-datetime']);
            $this->db->bind(':loan_return_date', $param['loan-finish-datetime']);
            $this->db->bind(':loan_status',$param['loan-status']);
			$this->db->execute();
				return 'exito';

        }
    }
    ?>