<head></head>

<body>
  <div style="background-color:#fff;margin:0 auto 0 auto;padding:30px 0 30px 0;color:#4f565d;font-size:13px;line-height:20px;font-family:'Helvetica Neue',Arial,sans-serif;text-align:left;">
    <center>
      <table style="width:550px;text-align:center">
        <tbody>
          <tr>
            <td style="padding:0 0 20px 0;border-bottom:1px solid #e9edee;">
              <a href="https://rj.jobmindz.com/" style="display:block; margin:0 auto;" target="_blank">
                <img src="https://rj.jobmindz.com/26/images/logo.png" width="180" height="100" alt=" " style="border: 0px;">
              </a>
            </td>
          </tr>
          <tr>
            <td colspan="2" style="padding:30px 0;">
              <p style="color:#1d2227;line-height:28px;font-size:22px;margin:12px 10px 20px 10px;font-weight:400;">Hi {{ ucwords($user->first_name)}} {{ucwords($user->last_name)}} it's great to meet you.</p>
              <p style="margin:0 10px 10px 10px;padding:0;">We'd like to make sure we got your email address right. Please click the following button to activate your account</p>
              <p>
                @if($type=="STUDENT")
                   <a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="{{route('authenticateStudentEmail',['studentId' =>$studentId,'email_token'=>$token])}}" target="_blank">Click Here – Activate Now</a>
                @else
                   <a style="display:inline-block;text-decoration:none;padding:15px 20px;background-color:#2baaed;border:1px solid #2baaed;border-radius:3px;color:#FFF;font-weight:bold;" href="{{route('authenticateCollegeEmail',['unique_id' =>$unique_id,'email_token'=>$token])}}" target="_blank">Click Here – Activate Now</a>
                @endif
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