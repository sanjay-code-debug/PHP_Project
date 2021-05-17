    
<div class="container">
    <div class="row">

          <div class="col-4 offset-md-4 form-div">
          
              <form action='<?php echo getUrl().'/add-post'?>' method="POST" enctype="multipart/form-data">

                  <h3 class="text-center"> <strong>Add New Blog</strong> </h3>

                      <div class="form-group text-center" >
                          <img src="<?=getUrl()."/public/images/download.png"?>" onclick="triggerClick()" alt="No Image" id="profileDisplay" />
                            <label for="profileImage">Blog Image</label>
                            <input type="file" name="uploadfile" id="profileImage" value="Image" onchange="displayImage(this)" style="display: none;">
                      </div>


                      <div class="form-group">
                             <label for="name">Blog Title </label>  
                              <input type="text" id="name" name="name" class="form-control" required>
                      </div>
                      

                      <div class="form-group">
                         <label for="description">Blog Description</label> 
                         <textarea name="textarea" id="description"  class="form-control" placeholder="Write about Service" required></textarea> 
                       </div>
                       

                       <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block" name="post">AddBlog</button>
                       </div>

               </form>
          </div>

    </div>
</div>



