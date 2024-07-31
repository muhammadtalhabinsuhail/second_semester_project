<?php
if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    session_start();
    $_SESSION[ 'name' ] = $_POST[ 'name' ];
    $_SESSION[ 'email' ] = $_POST[ 'email' ];
    $_SESSION[ 'subject' ] = $_POST[ 'subject' ];
    $_SESSION[ 'message' ] = $_POST[ 'message' ];

    // header( 'Location: page2.php' );
    // echo $_SESSION[ 'name' ] ;

    include 'send.php';

} else {
    echo'Something Went Wrong';
}
?>