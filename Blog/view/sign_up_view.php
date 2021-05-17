<script>

    function myFunction() {
            alert("Account Created Wait For Admin Approval!!");
    }
</script>

         <!-- Signup Page  -->

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" >

                    <form action='<?php echo getUrl().'/user-register'?>' method="POST" enctype="multipart/form-data" onsubmit="myFunction()">

                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter Name" name="name" required>
                          </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Your Photo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="uploadfile">
                          </div>

                          <div class="form-group form-check">
                            <label class="form-check-label" for="exampleCheck1">If You have Account ? <a href=<?=getUrl().'/login'?>>Login</a></label>
                          </div>

                        <button type="submit" class="btn btn-primary" name="signup" >Signup</button>
                      </form>         
               </div>

                  <div class="col-md-4 col-sm-9">
                 </div>

            </div>
        </div>
