<?php
    //Start using Session
    session_start();

    //Flash message helper
    //EXAMPLE - flash('register_success', 'You are now registerd', 'alert alert-danger')
    //DISPLAY IN VIEW - echo flash('register_success');
    function flash($name = '', $message = '', $class = 'alert alert-success') {

        if(!empty($name)) {
            if(!empty($message) && empty($_SESSION[$name])) {

                $_SESSION[$name] = $message;
                $_SESSION[$name . '_class'] = $class;

            }elseif(empty($message) && !empty($_SESSION[$name])) {

                $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
                echo '<div class="' . $class . '">' . $_SESSION[$name] . '</div>'; 
                unset($_SESSION[$name]);
                unset($_SESSION[$name . '_class']);
                
            }
        }

    }

    function isLoggedIn() {
        if(isset($_SESSION['user_id'])) {
            return true;
        }else {
            return false;
        }
    }