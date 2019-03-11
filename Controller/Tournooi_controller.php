<?php
    /**
     *
     */
    class Tournooi_controller
    {
        function __construct() {

        }

        public function index() {
            $main = 'index_tournooi.php';
            include 'View/default_template.php';
        }

        public function setup() {
            if (isset($_POST["spelers"]) ) {
                $aantalSpelers = $_POST["spelers"];
                $main = 'setup_tournooi.php';
                include 'View/default_template.php';
            } else {
                $this->index();
            }
        }

        public function start() {
            $main = 'live_tournooi.php';
            include 'View/live_template.php';


        }
    }


 ?>
