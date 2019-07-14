<?php

    function User_undefined(){
        global $USER;
        
        setcookie("Arinst_login", "", 0);
        setcookie("Arinsy_pswd", "", 0);

        unset($_COOKIE["Arinsy_login"]);
        unset($_COOKIE["Arinsy_pswd"]);

        $USER['id']         = 'undefined';
        $USER['login']      = 'undefined';
        $USER['session']    = 'undefined';
    }


    if(isset($_POST['submit']))
    {
        $login = $_POST['Arinsy_Login'];
        $query_text = " SELECT
                            *
                        FROM
                            users
                        WHERE
                            users.Login='$login'
                        LIMIT 1";
        $query = mysqli_query($GLOBALS["db"], $query_text);
        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_assoc($query);
            
            if($data['Password'] === Arinsy_cript($_POST['Arinsy_Pswd'])){
                setcookie("Arinsy_login", $data['Login'], time()+60*60*24*30);
                setcookie("Arinsy_pswd", $data['Password'], time()+60*60*24*30);
                setcookie("Arinsy_id", $data['Id'], time()+60*60*24*30);
                
                header("Location: ".$CONTENT_DIRS['SITE_NAME'].'Desktop'); exit();
            }
        }
    }

    
    if (!(isset($isntAuth) && ($isntAuth))){
        
        if(isset($_COOKIE['Arinsy_login']) && isset($_COOKIE['Arinsy_pswd'])){
            
            if(strlen($_COOKIE['Arinsy_login']) > 0 && strlen($_COOKIE['Arinsy_pswd']) > 0){
                
                $login  = $_COOKIE['Arinsy_login'];
                $pswd   = $_COOKIE['Arinsy_pswd'];

                $query_text = " SELECT
                                    *
                                FROM
                                    users
                                WHERE
                                    users.Login='$login'
                                LIMIT
                                    1";
                $query = mysqli_query($GLOBALS["db"], $query_text);

                if(mysqli_num_rows($query) > 0){
                    
                    $UserFields = mysqli_fetch_array($query);
                    if ($UserFields["Password"] === $pswd){
                        
                        $USER['login']      = $UserFields["Login"];
                        $USER['session']    = $UserFields["Password"];
                        $USER['group']      = $UserFields["Group"];
                        $USER['id']         = $UserFields["Id"];
                        $USER['Name']       = substr($UserFields["First Name"], 0, 1).". ".$UserFields["Last Name"];
                    }else{
                        User_undefined();
                    }
                }else{
                    User_undefined();
                }
            }else{
                User_undefined();
            }
        }else{
            User_undefined();
        }
    }
?>