<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
        <style type="text/css">
    body {
      font-family: 'Century Gothic', Arial, Helvetica, sans-serif;
        color: #3c3c3c;
         font-size:12px;
    }
</style>
    <body>  

          <br/>
        <div style="text-align:left;">
          <img src="{{asset('admin/images/logo.png')}}" style="width:100px;">
        </div>
        <br/>
        <h3>Reset your password</h3>
          <div>Dear {{ $firstname }},<br/><br/>
            Please follow the link below to reset your password.
          <br/>
       <br/>


    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center" style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px;" bgcolor="#000000">
                    <a href="{{URL::to('register/reset/' . $confirm_code)}}" target="_blank" style="color: #fff; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; padding: 12px 18px; border: 1px solid #e9703e; display: inline-block;">Reset Password</a>
                </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>

            <br/>
            Ram Club 
        </div>

    </body>
</html>