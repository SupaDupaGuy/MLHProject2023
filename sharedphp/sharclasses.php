<?php
    class Account {
    public $username = "Default";
    public $profilePic = "Not Available";

    }

    class Receipt {
        public $items = array();
        
    }

    class Item {
        public $name = "Default";
        public $price = 0.00;
        public $expirationDate = "0/0/0";

    }

    class Date {
        public $mate;
        public $month;
        public $day;
    }


    $myAccount = new Account();
?>