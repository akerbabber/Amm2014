<?php
include '../model/user-model.php';
$controller= new Controller();
$controller->handle_input($_REQUEST);

class Controller {

    private function login($user, $password) {

        session_start();
        if ($_POST["user"]==admin && $_POST["password"] == admin) {
            $_SESSION["loggedIn"] =true;  // Nella variabile SESSION associo TRUE al valore logge
            $_SESSION["user"]="admin";
            header('location:../?page=index') ;

        }
        else {
        $current_user= new user();
        $current_user->setUser($_POST["user"],$password);
        $GLOBALS['current_user']=$_POST["user"];
        $query = mysql_query("SELECT * FROM users WHERE username='".$_POST["user"]."' AND password ='".$_POST["password"]."'")
        or DIE('query non riuscita'.mysql_error());
        if(mysql_num_rows($query)) {        //se c'è una persona con quel nome nel db allora loggati
            $row = mysql_fetch_assoc($query); // metto i risultati dentro una variabile di nome $row
            $_SESSION["loggedIn"] =true;  // Nella variabile SESSION associo TRUE al valore logge
            echo $user;
            if (isset($user)) {
                $_SESSION["user"] =$user;
            }
            echo $_SESSION["user"];
           header('location:../index.php?page=index') ;
            return true;
        }

        return  false; }
    }

    private function logout() {

        $session = array();

        if (session_id() !=  "" || isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '',  time() -  2592000,  '/');
        }

        session_destroy();
        header('Location:../index.php');
    }
    public function handle_input ($request) {


        include("database-controller.php"); // Include il file di connessione al database

        $_SESSION["user"]=$_POST["user"]; // con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION username
        $_SESSION["password--"]=$_POST["password"]; // con questo associo il parametro username che mi è stato passato dal form alla variabile SESSION password
        if (isset($request["login"]) && isset($request["user"]) && isset($request["password"])) {

            if ($this->login($request["user"], $request["password"])) {

                $_SESSION["loggedIn"] = true;
            }
        } else
            if (isset($request["logout"])) {
                $this->logout();
            }
    }



}
