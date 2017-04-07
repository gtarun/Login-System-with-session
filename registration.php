<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRAMIET | University Management System</title>
<link rel="icon" href="image/logo3.png" type="image/png">
<link rel="stylesheet" href="CSS/style.css" />
</head>
<body background="../../../Users/KARAN/Downloads/main-background1.jpg">
<?php
	require('db.php');
    // Escape user inputs for security

$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$password = mysqli_real_escape_string($link, $_REQUEST[.md5('password')]);
$current_rollno = mysqli_real_escape_string($link, $_REQUEST['current_rollno']);
$current_semester = mysqli_real_escape_string($link, $_REQUEST['current_semester']);
$role_id = mysqli_real_escape_string($link, $_REQUEST['role_id']);
$adhaar_no = mysqli_real_escape_string($link, $_REQUEST['adhaar_no']);
$img = mysqli_real_escape_string($link, $_REQUEST['img']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$university_rollno = mysqli_real_escape_string($link, $_REQUEST['university_rollno']);
// attempt insert query execution
$sql = "INSERT INTO reg (first_name, last_name, dob, email, [.md5('password')], mobile, gender, current_semester, current_rollno, role_id, adhaar_no, img, address, university_rollno) VALUES ('$first_name', '$last_name','$password', '$dob', '$email', '$mobile', '$gender', '$adhaar_no', '$role_id, '$university_rollno', '$current_rollno', '$current_semester', '$img', '$address')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
<div class="logo">
<img src="image/logo3.png" />
</div>
<div class="login_box" style="margin-left: 370px;">
<div class="red_box">
</div>
<div class="sign_in">Registration Form
</div>
<form action="" method="post" name="registration">
<div class="table">
<div id="UpdatePanel1">
  <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
  <tr>
  <td height="41"><h3>First Name</h3></td>
  <td>
  <input name="first_name" type="text" class="input_type" value="First Name" maxlength="50" required/></td>
  </tr>
    <tr>
  <td height="41"><h3>Lirst Name</h3></td>
  <td>
  <input name="last_name" type="text" class="input_type" value="Last Name" maxlength="50" required/></td>
  </tr>
    <tr>
  <td height="41"><h3>Date Of Birth</h3></td>
  <td><select size="1" name="dob" value="date" class="select_ums">
      <option>Date</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
      <option>11</option>
      <option>12</option>
      <option>13</option>
      <option>14</option>
      <option>15</option>
      <option>16</option>
      <option>17</option>
      <option>18</option>
      <option>19</option>
      <option>20</option>
      <option>21</option>
      <option>22</option>
      <option>23</option>
      <option>24</option>
      <option>25</option>
      <option>26</option>
      <option>27</option>
      <option>28</option>
      <option>29</option>
      <option>30</option>
      <option>31</option>
    </select>
    <select size="1" name="select" value="month" class="select_ums">
      <option>Month</option>
      <option>Jan</option>
      <option>Feb</option>
      <option>Mar</option>
      <option>Apr</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>Aug</option>
      <option>Sep</option>
      <option>Oct</option>
      <option>Nov</option>
      <option>Dec</option>
    </select>
    <select size="1" name="select2" value="Year" class="select_ums">
      <option>Year</option>
      <option>1980</option>
      <option>1981</option>
      <option>1982</option>
      <option>1982</option>
      <option>1983</option>
      <option>1984</option>
      <option>1985</option>
      <option>1986</option>
      <option>1987</option>
      <option>1988</option>
      <option>1989</option>
      <option>1990</option>
      <option>1991</option>
      <option>1992</option>
      <option>1993</option>
      <option>1994</option>
      <option>1995</option>
      <option>1996</option>
      <option>1997</option>
      <option>1998</option>
      <option>1999</option>
      <option>2000</option>
      <option>2001</option>
      <option>2002</option>
      <option>2003</option>
      <option>2004</option>
      <option>2005</option>
      <option>2006</option>
      <option>2007</option>
      <option>2008</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      <option>2016</option>
      <option>2017</option>
      <option>2018</option>
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
      <option>2026</option>
    </select></td></tr></td>
  </tr>
      <tr>
  <td><h3>Gender</h3>
 <th><input name="gender" type="radio" value="Male" />
      Male
   <input name="gender" type="radio" value="Female" />Female</th></td>
</tr>
    <tr>
	<td><h3>E-mail</h3></td>
	<td><input name="email" type="text" value="Email" class="input_type" /></td></tr>
	 <tr>
	<td><h3>Password</h3></td>
	<td><input name="password" type="password" value="Password" class="input_type_pass" /></td></tr>
	<tr><td> <h3>Mobile</h3></td>>
	<td><input name="mobile" type="text" value="Mobile No." class="input_type" /></td></tr>
	<tr><td><h3>Adhaar No.</h3></td>
	<td><input name="adhaar_no" type="text" class="input_type" id="adhaar_no" value="Adhaar No." /></td></tr>
	<tr><td><h3>Address</h3></td>
	<td><textarea name="address" cols="" rows="" class="input_type">Address</textarea></td></tr>
	<tr><td><h3>Current Roll No.</h3></td>
	<td><input name="current_rollno" type="text" value="Current RollNo." class="input_type" /></td></tr>
	<tr><td><h3>University Roll No.</h3></td>
	<td><input name="university_rollno" type="text" value="University Roll No." class="input_type" /></td></tr>
	<tr>
	<td><h3>Current Semester</h3></td>
	<td><select name="current_semester" class="select_ums" id="current_semester">
	  <option>Select Semester</option>
	  <option>I</option>
	  <option>II</option>
	  <option>III</option>
	  <option>IV</option>
	  <option>V</option>
	  <option>VI</option>
	  <option>VII</option>
	  <option>VIII</option>
	    </select>
</td>
	</tr>
	<tr>
	<td><h3>Admin Type</h3></td><td><select name="role_id" class="select_ums">
	  <option>Select Type</option>
	  <option>Admin</option>
	  <option>Student</option>
	  <option>Staff</option>
	</select></td></tr>
	<tr><td>
	</table>
 </div>
 </div>
 </form> </div>
</body>
</html>