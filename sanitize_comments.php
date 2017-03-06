<!--1. Write a function that will sanitize input.
Consider an application in which a website user can post comments to an article. Write a function that will sanitize the comment submission. The function:
-        should allow 4 basic HTML tags are allowed: a, b, i, img
-        should analyze security issues and sanitize input accordingly
-        may consist of calls to empty functions that describe what you want to do (i.e. you do not have to write code for these called functions)
-->

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

<!------->
