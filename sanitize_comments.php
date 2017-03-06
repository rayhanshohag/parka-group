<?php
function clean_data( $input )
{
    $input = trim( htmlentities( strip_tags( $input,"<a><b><i><img>" ) ) );

    if( get_magic_quotes_gpc() )
        $input = stripslashes( $input );

    $input = mysql_real_escape_string( $input );
    return $input;
}


$filtered_comment = clean_data( $_POST['comment'] );

?>

<!----->
