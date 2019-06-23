<?php
require_once 'App/Mage.php';
Mage::app();

?>
 
 
 <html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 </head>
 <body>

  <input type="button" value="click" onclick="tst()"/> 
 </body>
 </html>

 <script type="text/javascript">
 
   function tst(){
      
      $.ajax({
          url :"http://127.0.0.1:8081/magento24/panaonedemo/index/test1",
          contentType: "application/json; charset=utf-8",
          type:"GET",
          dataType:"json",
          data:{op:"add"},
          success:function(data){
              alert(data.stat);
          },error:function(a,b,c){
              alert(a);
              alert(b);
              alert(c);
          }

     }); 
    
   }

 </script>