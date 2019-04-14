 


<!--    to upload xml file-->
<form action="upload.php" 
      method="POST" 
      enctype="multipart/form-data">
          
    <label >Please select data file</label>
            
    <input  type="hidden" 
            name="MAX_FILE_SIZE" 
            value="10000000" />
    
    <input type="file" name="data" required="yes">        
    <input type="submit" value="Upload">
</form>

