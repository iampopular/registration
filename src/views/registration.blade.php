@extends('vendor.template.master.master')
@section('content')
<div>
<h3>Registration</h3>
<form method="post" action="registration-submit">
<lable>Email: </lable><input type="text" name="name" id="name"/>
<br>
<lable>Email: </lable><input type="text" name="email" id="email"/>
<br>
<lable>Password: </lable><input type="password" name="password" id="password"/>
<br>
<lable>Confirm Password: </lable><input type="password" name="confirmPassword" id="paconfirmPasswordssword"/>
<br>
<input type="submit"/>
</form>
</div>
@stop