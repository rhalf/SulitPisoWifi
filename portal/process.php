<?php
        if( isset( $_POST['ip'] ) && isset ( $_POST['mac'] ) ) {
                $ip = $_POST['ip'];
                $mac = $_POST['mac'];

                exec("sudo iptables -t nat -A POSTROUTING -s " . $ip . " -j MASQUERADE");

                // OK, redirection bypassed.
                // Show the logged in message or directly redirect to other website
                echo "User logged in.";
        } else {
                echo "Access Denied";
        }
?>
