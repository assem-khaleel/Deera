

<!-- <h1>Welcom  {{$accountInfo_first_name}}  {{$accountInfo_last_name}} <br />
    Please use the below link to reset your password </h1>

<p><a href="https://cofedistrict.com/resetForgetPassword/{{$reminder_user_id }}/{{$reminder_code}}">Change your password</a></p>
 -->



<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div style="width: 100%"><img src="https://cofedistrict.com/assets/website/images/logo1.png"> </div>

<br><br>


Dear {{$accountInfo_first_name}}  {{$accountInfo_last_name}}

<br><br>
<br><br>
We have received forgot password request from your account.
Please click on the below link to reset your password.
<br>
<br>

<a href="https://cofedistrict.com/resetForgetPassword/{{$reminder_user_id }}/{{$reminder_code}}" style="background-color: #B59778;color: white;text-decoration: none;
   
    font-size: 15px;
    margin-top: 20px; ">  Reset your password</a>
    <br> <br>

If you did not make this request, please ignore and your password will be same.
<br><br>

Best Regards 
<br><br>

Cofe District Team

</body>
</html>