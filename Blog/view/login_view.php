<div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12" >

                    
                    <form action='<?php echo getUrl().'/verify-login'?>' method="POST" >
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" require>
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <div class="form-group form-check">
                          <label class="form-check-label" for="exampleCheck1">If Didn't Have Account ? <a href="<?=getUrl().'/sign-up'?>">Signup</a> </label>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                      </form>
                            
               </div>


            </div>
        </div>
