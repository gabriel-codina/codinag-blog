<h1>Create Blog Post</h1>
<form method="post" action="/codinag-blog/controller/create-post.php" enctype="multipart/form-data">
    <div>
        <div class="input_label user"> 
            <label for="title"> 
                Title: </label></div>
        <input type="text" class="inputs ptitle" placeholder="Title" name="title"/>
      
        
    </div>
    <div>
         <div class="col-xs-1 input_label user"> 
            <label for="post"> 
                Post: </label></div> 
        <div class="col-xs-11 idk">
         <textarea class="inputs" placeholder="Post" name="post"></textarea>
        </div>
    </div>
       <input type="file" name="image">
 
    
    <div>
        <button class="butto" type="submit">Submit</button>
    </div>
   
</form>


 
  
