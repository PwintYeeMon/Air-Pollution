<?php 
include 'Dbconnect.php';

$usertbl = "CREATE table usertbl
			(
				UserID int not null auto_increment primary key,
				UserName varchar(50),
				FullName varchar(50),
				Password varchar(50),
				Email varchar(50),
				DOB date,
				Postcode int,
				Status varchar(50)
			);";
$userrun = mysqli_query($connect,$usertbl);
if ($userrun)
{
	echo "User Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert1 = "INSERT into usertbl 
			(UserID,UserName,FullName,Password,Email,DOB,Postcode,Status)
			values ('1','Mike','MikeWheeler','mike003','mike@gmail.com','2003-09-08','10023','Received')";
$insertquery1 = mysqli_query($connect,$insert1);

$admintbl = "CREATE table admintbl
			(
				AdminID int not null auto_increment primary key,
				AdminName varchar(50),
				FullName varchar(50),
				Password varchar(50),
				Email varchar(50),
				DOB date,
				Postcode int
			);";
$adminrun = mysqli_query($connect,$admintbl);
if ($adminrun)
{
	echo "Admin Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert2 = "INSERT into admintbl 
			(AdminID,AdminName,FullName,Password,Email,DOB,Postcode)
			values ('1','Will','WillByers','will003','will@gmail.com','2003-02-27','13923')";
$insertquery2 = mysqli_query($connect,$insert2);

$questiontbl = "CREATE table questiontbl
				(
					QuestionID int not null auto_increment primary key,
					QuestionName varchar(100),
					UserID int,
					Status varchar(50)
				);";
$questionrun = mysqli_query($connect,$questiontbl);
if ($questionrun)
{
	echo "Question Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert3 = "INSERT into questiontbl 
			(QuestionID,QuestionName,UserID,Status)
			values ('1','How to measure air pollution','1','Done')";
$insertquery3 = mysqli_query($connect,$insert3);

$answertbl = "CREATE table answertbl
				(
					AnswerID int not null auto_increment primary key,
					AdminID int,
					QuestionID int,
					AnswerName varchar(100)
				);";
$answerrun = mysqli_query($connect,$answertbl);
if ($answerrun)
{
	echo "Answer Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert4 = "INSERT into answertbl 
			(AnswerID,AdminID,QuestionID,AnswerName)
			values ('1','1','1','Air pollution is measured with AQI')";
$insertquery4 = mysqli_query($connect,$insert4);

$citytbl = "CREATE table citytbl
				(
					CityID int not null auto_increment primary key,
					CityName varchar(50),
					PollutionLevel varchar(50),
					Year varchar(30),
					Description varchar(255),
					Image1 varchar(255),
					Image2 varchar(255)
				);";
$cityrun = mysqli_query($connect,$citytbl);
if ($cityrun)
{
	echo "City Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert5 = "INSERT into citytbl 
			(CityID,CityName,PollutionLevel,Year,Description,Image1,Image2)
			values ('1','Liverpool','5','2000','Liverpools air pollution may not be clear to the naked eye but it could be affecting our health without us even realising it. There were 25 places in the city had NO2 levels above the legal level, according to the latest air quality annual status report.','City Images/_Liverpool.jpg','City Images/_Liverpool0.jpg')";
$insertquery5 = mysqli_query($connect,$insert5);

$searchtbl = "CREATE table searchtbl
				(
					SearchID int not null auto_increment primary key,
					Search varchar(50),
					SearchDate date,
					UserID int
				);";
$searchrun = mysqli_query($connect,$searchtbl);
if ($searchrun)
{
	echo "Search Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert6 = "INSERT into searchtbl 
			(SearchID,Search,SearchDate,UserID)
			values ('1','London','2020-05-30','1')";
$insertquery6 = mysqli_query($connect,$insert6);

$producttbl = "CREATE table producttbl
				(
					ProductID int not null auto_increment primary key,
					ProductName varchar(50),
					Image varchar(255)
				);";
$productrun = mysqli_query($connect,$producttbl);
if ($productrun)
{
	echo "Product Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert7 = "INSERT into producttbl 
			(ProductID,ProductName,Image)
			values ('1','Kit A','Kit Images/_Particulate Matter Sensor.jpg')";
$insertquery7 = mysqli_query($connect,$insert7);

$signuptbl = "CREATE table signuptbl
				(
					SignUpID int not null auto_increment primary key,
					UserID int,
					ProductID int,
					Reason varchar(255),
					Date date
				);";
$signuprun = mysqli_query($connect,$signuptbl);
if ($signuprun)
{
	echo "SignUp Table Created<br>";
}
else
{
	echo mysqli_error($connect);
}
$insert6 = "INSERT into signuptbl 
			(SignUpID,UserID,ProductID,Reason,Date)
			values ('1','1','1','I want to know up-to-date information about air pollution','2020-05-30')";
$insertquery6 = mysqli_query($connect,$insert6);
?>