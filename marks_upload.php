
<?php
   include 'connect.php';
   $connect = connect_to_database();
    
   if(isset($_FILES["file"]))
   {
      $filename = $_FILES["file"]["name"];
      $file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
      $file_ext = substr($filename, strripos($filename, '.')); // get file extention
      $allowed_file_types = array('.doc','.docx','.pdf');   //add in this array if you want to change file type
      $rollno = $_POST['rollno'];
   
      
   
   if(in_array($file_ext,$allowed_file_types))   //check if file type matches allowed file types 
      {  
         $linkname = $_POST['linkname'];
         $filename = str_replace(' ', '_', $linkname);
         $newfilename = $rollno."filename" . $file_ext;
         
         $newfilepath = "storage/$newfilename";  //new path to store in database 
   
        if (file_exists("storage/" . $newfilename))
         {  
            echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('File already exists!')
                      window.location.href='upload_marks_form.php'</SCRIPT>");
            return;
       
         }
         else
         {   //upload the file 
            move_uploaded_file($_FILES["file"]["tmp_name"], "storage/" . $newfilename);
      
         }
      //----------insert path into database--------//

              $sql="INSERT INTO marks_upload (rollno,uploadlink) VALUES ('$rollno','$newfilepath')";
              if(mysqli_query($connect,$sql)==true)
              {
                  
               echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Files uploaded successfully')
                      window.location.href='index.php'</SCRIPT>");
               }
              else
              {
                   
               echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Database error!')
                      window.location.href='upload_marks_form.php'</SCRIPT>");
              }
 }
  
else{
      //error if file not allowed 
      
               echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Files type not allowed!')
                      window.location.href='ssr_qms_form.php'</SCRIPT>");
      return;

   }
   }
   ?>




