<?php
    session_start()
    /**
     *
     */
    class Tournooi
    {

        function __construct(argument)
        {
            session_start();
        }

        public function setupTournooi() {
            $_SESSION['gameID'] = 0;
            $_SESSION["aantalSpelers"] = $_POST['aantalSpelers'];
        }
    }


 ?>
