<head>
<style>
section{
	width: 1050px;
	height:1200px;
	
	float: left;
	margin-left: 10%;
	padding: 20px;
	background-color: white;
	
	
}
body
{
background-color: #4D739A;
}

input[type=text] {
height:30px;
}
</style>
<head>



<body>
<img src="logoradiance.jpg" style="width:100%;height:150px;">
<?php
include 'menu.html';?>
<section>
<h2 style="margin-left:20px">Please submit the form duly filled-in, and our team will get back to you soon:</h2>
<form name="htmlform" method="post" action="html_form_send.php" style="margin-left:20%;margin-top:5%;">
<table width="450px" style="margin-left:100px" >
</tr>
<tr>
 <td valign="top">
  <label for="first_name" style="font-size:30;">First Name*</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
  <br><br><br><br><br>
 </td>
</tr>
 
<tr>
 
 <td valign="top"">
  <label for="last_name" style="font-size:30;margin-bottom:300px">Last Name</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
   <br><br><br><br><br>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email" style="font-size:30;margin-bottom:300px">Email Address*</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
   <br><br><br><br><br>
 </td>
 
</tr>
<tr>
 <td valign="top">
  <label for="telephone" style="font-size:30;margin-bottom:300px">Telephone/Mobile Number*</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
   <br><br><br><br><br><br><br>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="course" style="font-size:30;margin-bottom:300px">Courses Interested In*</label>
 </td>
 <td valign="top">
  <input  type="text" name="course" maxlength="30" size="30">
   <br><br><br><br><br> <br><br>
 </td>
</tr
<tr>
 <td valign="top">
  <label for="city" style="font-size:30;margin-bottom:300px">City*</label>
 </td>
 <td valign="top">
  <input  type="text" name="city" maxlength="30" size="30">
   <br><br><br><br><br><br><br>
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments" style="font-size:30;margin-bottom:300px">Query*</label>
  
 </td>
 <td valign="top">
  <textarea  name="comments"  style="width:400px;height:200px"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="10" style="text-align:center;">
 
  <input type="submit" value="Submit" style="width:300px;height:30px;background-color: #6C6CFF;margin-left:-80px;margin-top:50px;">   
 </td>
</tr>
</form>

</table>

</section>
</body>