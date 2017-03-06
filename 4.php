<!--Design a php class or classes.
Write a class (or classes) that demonstrates your knowledge of OOP:
-        The php class is used to send website notifications over different media (mail, SMS, IRC).
-        Create a function to send a message (actual function may be empty)
-->

Here is an example which defines a class of Books type:

<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

$maths = new Books;

$maths->setTitle( "Algebra" );

$maths->setPrice( 7 );

$maths->getTitle();

$maths->getPrice();

?>


<?php

function send_message()
{
   $to = 'maryjane@email.com';
   $subject = 'Marriage Proposal';
   $from = 'peterparker@email.com';

   // To send HTML mail, the Content-type header must be set
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   // Create email headers
   $headers .= 'From: '.$from."\r\n".
       'Reply-To: '.$from."\r\n" .
       'X-Mailer: PHP/' . phpversion();

   // Compose a simple HTML email message
   $message = '<html><body>';
   $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
   $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
   $message .= '</body></html>';

   // Sending email
   if(mail($to, $subject, $message, $headers)){
       echo 'Your mail has been sent successfully.';
   } else{
       echo 'Unable to send email. Please try again.';
   }
}
send_message();
?>
<--  -->
