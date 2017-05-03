<?PHP
require_once("includes/membersite_config.php");
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.php");
   }
}


require_once("includes/database.php");
//require_once("includes/functions.php");
//find_selected_page();
include("includes/header.php")?>
<div id="header">
 <h1>Welcome to WMC</h1>
</div>
<div id="main">
 <table id="structure" border="1px" bordercolor="#CCCCCC">
  <tr>
   <td width="21%" id="navigation">
 <div id="sidebar">
						<h2>Register</h2>
						<a href="login.php">Back to login page</a>
                        </div>
					</td>
					<td id="page-left">
						<div id='fg_membersite'>
                            <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                            <fieldset >
                            <legend>Register</legend>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class='short_explanation'>* required fields</div>
                            <input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
                            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                            <div class='container'>
                                <label for='name' >Your Full Name*: </label><br/>
                                <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
                                <span id='register_name_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='email' >Email Address*:</label><br/>
                                <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                                <span id='register_email_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='phone' >Phone Number:</label><br/>
                                <input type="text" name='tel' id='tel' value="" maxlength="50" /><br/>
                                <span id='register_email_errorloc' class='error'></span>
                            </div>
                            <div class='container'>
                                <label for='username' >UserName*:</label><br/>
                                <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                                <span id='register_username_errorloc' class='error'></span>
                            </div>
                            <div class='container' style='height:80px;'>
                                <label for='password' >Password*:</label><br/>
                                <div class='pwdwidgetdiv' id='thepwddiv' ></div>   
                                <noscript>
                                <input type='password' name='password' id='password'  />
                                </noscript> 
                                <div id='register_password_errorloc' class='error' style='clear:both'></div>
                            </div>
                            <div class='container'>
                                <label for='staff' >Member of the staff?</label><br/>
                                <input type="radio" name="staff" id="staff" value="0"<?php 
                                if ($sel_page['visible'] == 0) { echo " checked"; } 
                                ?> /> No
                                &nbsp;
                                <input type="radio" name="staff" id="staff" value="1"<?php 
                                if ($sel_page['visible'] == 1) { echo " checked"; } 
                                ?> /> Yes
                                <span id='register_username_errorloc' class='error'></span>
                            </div>
                        </div>
                        <div class='container'>
                            <input type='submit' name='Submit' value='Submit' />
                        </div>
                        </fieldset>
                        </form>
                        <!-- client-side Form Validations:
                        Uses the excellent form validation script from JavaScript-coder.com-->
                        <script type='text/javascript'>
                      //  <![CDATA[
                            var pwdwidget = new PasswordWidget('thepwddiv','password');
                            pwdwidget.MakePWDWidget();
                            var frmvalidator  = new Validator("register");
                            frmvalidator.EnableOnPageErrorDisplay();
                            frmvalidator.EnableMsgsTogether();
                            frmvalidator.addValidation("name","req","Please provide your name");
                            frmvalidator.addValidation("email","req","Please provide your email address");
                            frmvalidator.addValidation("email","email","Please provide a valid email address");
                            frmvalidator.addValidation("username","req","Please provide a username");
                            frmvalidator.addValidation("username","alphanumeric","Must contain alphanumeric characters only");
                            frmvalidator.addValidation("password","req","Please provide a password");
                        // ]]>
                        </script>
                        
                        <!--
                        Form Code End (see html-form-guide.com for more info.)
			-->
					</td>
                    <td id="page-right">
                    <div id="rsidepic" style="background-image:url(images/<?php echo rand_pict(); ?>)">
                    <div id="sidepiccontactinf">
                        <h2>Head Office - San José, Costa Rica:</h2> 
                        <p>Barrio Lujan, Old Warehouses of Dos Pinos Co, 50 mts south. dead end street(27A) brown building.</p>
                        <h3>Schedules:</h3>
                        <p>Monday thru Fryday from 8:00am to 5:00pm - Saturdays 8:00 to 12pm</br>Phone: (506) 2226-7634 / (506) 2226-4594</br>Fax: (506) 2223-6174</br></br><strong>Email:</strong> reservaciones@jacotropical.com</p>
                    </div></div>
					</td>
				</tr>
			</table>
<?php require("includes/footer.php"); ?>