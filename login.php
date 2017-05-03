<?php
require_once("includes/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}
include("includes/header.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
</head>
<body>

<div class="modal show" id="modal-login" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" id='fg_membersite'>
        <div>
        <form id='login' role="form" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
        <fieldset>
        <div class="row">
        <div class="col-lg-6">
            <legend>Login</legend>
			<div class='short_explanation'>* required fields</div>
				<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
				<div class="input-group">
			<input type='hidden' name='submitted' id='submitted' value='1'/><br/>
              </div>
              </div>
        
        </div>

          <div class="row">
            
              <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-user"></span>
                </span>
                <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' class="form-control" placeholder="Username*" /><br/>
              </div>
              </div>
              <div class="col-lg-6">

            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type='password' name='password' id='password' class="form-control" placeholder="Password*"/><br/>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="col-lg-10">
             <button type="submit" name='Submit' class="btn btn-success" data-dismiss="modal">Login</button>
        </div>
      </div>
      <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
      <div class="checkbox"><label input=""><input type="checkbox"><spam class="pull-left">Stay logged in</span></label></div>
      <div class='short_explanation'>
        <p class="help-block">Post your request for access at https://www.facebook.com/Writemycode/</p></div>				      
     </div> 
          </div>
</fieldset>
      </form>
    </div>   
    </div>
 </div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<div class="row">
            
              <div class="col-lg-12">
              
              <img class="center-block" src="images/WMC.jpg" alt="" />
              
              </div>
</div>

</body>
</html>
<?php require("includes/footer.php"); ?>