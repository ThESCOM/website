<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="style2.css" media="screen" rel="stylesheet" type="text/css"/>
    <!--<link href="uniform.css" media="screen" rel="stylesheet" type="text/css"/>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
 
<div class="TTWForm-container">
      
      
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
           
           
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Titel
               </label>
               <input name="field1" id="field1" required="required" type="text">
          </div>
           
           
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Email
               </label>
               <input pattern='/^(([^<>()[].,;:s@"]+(.[^<>()[].,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/'
               name="field2" id="field2" required="required" type="text">
          </div>
           
           
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Text
               </label>
               <textarea rows="5" cols="20" name="field4" id="field4" required="required"></textarea>
          </div>
           
           
          <div id="form-submit" class="field f_100 clearfix submit">
               <input value="Absenden" type="submit">
          </div>
     </form>
</div>
 
</body>
</html>
