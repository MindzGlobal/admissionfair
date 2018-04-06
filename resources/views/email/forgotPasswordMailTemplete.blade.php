<head></head>

<body>
  <div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:'Helvetica Neue',Arial,sans-serif;text-align:left;">
    <center>
      <table style="width:550px;text-align:center">
        <tbody>
          <tr>
            <td style="padding:0 0 20px 0;border-bottom:1px solid #e9edee;">
              <a href="https://rj.jobmindz.com/" style="display:block; margin:0 auto;" target="_blank">
                <img src="{{ asset('student/images/virtual-logo.png')}}" width="180" height="100" alt=" " style="border: 0px;">
              </a>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="padding:30px 0;">
              <p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;">Hi {{ ucwords($student->first_name)}} {{ucwords($student->last_name)}} it's great to meet you.</p>
              <p style="margin:0 10px 10px 10px;padding:0;">Your request For Forgot password has done Successfully.</p>
            <p>
                <p>You can login with the blow given Password With Your registered email</p>
                <p><b>User Id:</b>{{$student->email}}</p>
                <p><b>Password:</b>{{$newpassword}}</p>
                <p><b>NOTE:</b>If you wish ,You can Change the password after login</p>
            </p>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="padding:30px 0 0 0;border-top:1px solid #e9edee; color:#9b9fa5">
              <a style="color:#666d74;text-decoration:none;" href="mailto:support@xero.com" target="_blank"></a>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
  </div>
</body>