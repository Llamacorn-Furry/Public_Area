<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title>Primary School</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="ASSETS/Universal_css.css">
		<!--Background-->
			<div class="background">
		<!--Form-->
			<form class="Fonts" action="The Site.php" method="post">
				<span style="color: purple">PERSON INFO</span><br>
				Full name: <input type="text" placeholder="Full Name" name="name"><br><br>
				Email: <input type="text" placeholder="Email" name="Email"><br><br>
				Background: <input type="text" placeholder="Background" name="Background"><br><br>
				Address: <input type="text" placeholder="Address" name="Address"><br><br>
				Phone Number: <input inputmode="numeric" placeholder="Phonenumber" type="number" name="PhoneNumber"><br><br>
				Type:
				<select name="Type" title="Person Type" class="Fonts">
					<option value="Pupil" selected>Pupil</option>
					<option value="Parent" selected>Parent</option>
					<option value="Teacher" selected>Teacher</option>
				</select>
				<br><br>
				Age: <input inputmode="numeric" placeholder="Age" type="number" name="Age"><br>
				Upload Age Verification :
				<input type="file" name="file_upload" placeholder="FILE GOES HERE" accept="image/*" class="Medium_Fonts"><br><br>
				Prefered Language :
				<select name="Language" title="Language" class="Fonts">
					<option value="Language : SELECTED" selected>Select</option>
					<option value="Language : Afrikaans">Afrikaans</option> 
					<option value="Language : Albanian">Albanian</option> 
					<option value="Language : Amharic">Amharic</option> 
					<option value="Language : Arabic">Arabic</option> 
					<option value="Language : Armenian">Armenian</option> 
					<option value="Language : Assamese">Assamese</option> 
					<option value="Language : Aymara">Aymara</option> 
					<option value="Language : Azerbaijani">Azerbaijani</option> 
					<option value="Language : Bambara">Bambara</option> 
					<option value="Language : Basque">Basque</option> 
					<option value="Language : Belarusian">Belarusian</option> 
					<option value="Language : Bengali">Bengali</option> 
					<option value="Language : Bhojpuri">Bhojpuri</option> 
					<option value="Language : Bosnian">Bosnian</option> 
					<option value="Language : Bulgarian">Bulgarian</option> 
					<option value="Language : Catalan">Catalan</option> 
					<option value="Language : Cebuano">Cebuano</option> 
					<option value="Language : Chichewa">Chichewa</option> 
					<option value="Language : Chinese (Simplified)">Chinese (Simplified)</option> 
					<option value="Language : Chinese (Traditional)">Chinese (Traditional)</option> 
					<option value="Language : Corsican">Corsican</option> 
					<option value="Language : Croatian">Croatian</option> 
					<option value="Language : Czech">Czech</option> 
					<option value="Language : Danish">Danish</option> 
					<option value="Language : Dhivehi">Dhivehi</option> 
					<option value="Language : Dogri">Dogri</option> 
					<option value="Language : Dutch">Dutch</option> 
					<option value="Language : check">check</option> 
					<option value="Language : English">English</option> 
					<option value="Language : Esperanto">Esperanto</option> 
					<option value="Language : Estonian">Estonian</option> 
					<option value="Language : Ewe">Ewe</option> 
					<option value="Language : Filipino">Filipino</option> 
					<option value="Language : Finnish">Finnish</option> 
					<option value="Language : French">French</option> 
					<option value="Language : Frisian">Frisian</option> 
					<option value="Language : Galician">Galician</option> 
					<option value="Language : Georgian">Georgian</option> 
					<option value="Language : German">German</option> 
					<option value="Language : Greek">Greek</option> 
					<option value="Language : Guarani">Guarani</option> 
					<option value="Language : Gujarati">Gujarati</option> 
					<option value="Language : Haitian Creole">Haitian Creole</option> 
					<option value="Language : Hausa">Hausa</option> 
					<option value="Language : Hawaiian">Hawaiian</option> 
					<option value="Language : Hebrew">Hebrew</option> 
					<option value="Language : Hindi">Hindi</option> 
					<option value="Language : Hmong">Hmong</option> 
					<option value="Language : Hungarian">Hungarian</option> 
					<option value="Language : Icelandic">Icelandic</option> 
					<option value="Language : Igbo">Igbo</option> 
					<option value="Language : Ilocano">Ilocano</option> 
					<option value="Language : Indonesian">Indonesian</option> 
					<option value="Language : Irish">Irish</option> 
					<option value="Language : Italian">Italian</option> 
					<option value="Language : Japanese">Japanese</option> 
					<option value="Language : Javanese">Javanese</option> 
					<option value="Language : Kannada">Kannada</option> 
					<option value="Language : Kazakh">Kazakh</option> 
					<option value="Language : Khmer">Khmer</option> 
					<option value="Language : Kinyarwanda">Kinyarwanda</option> 
					<option value="Language : Konkani">Konkani</option> 
					<option value="Language : Korean">Korean</option> 
					<option value="Language : Krio">Krio</option> 
					<option value="Language : Kurdish (Kurmanji)">Kurdish (Kurmanji)</option> 
					<option value="Language : Kurdish (Sorani)">Kurdish (Sorani)</option> 
					<option value="Language : Kyrgyz">Kyrgyz</option> 
					<option value="Language : Lao">Lao</option> 
					<option value="Language : Latin">Latin</option> 
					<option value="Language : Latvian">Latvian</option> 
					<option value="Language : Lingala">Lingala</option> 
					<option value="Language : Lithuanian">Lithuanian</option> 
					<option value="Language : Luganda">Luganda</option> 
					<option value="Language : Luxembourgish">Luxembourgish</option> 
					<option value="Language : Macedonian">Macedonian</option> 
					<option value="Language : Maithili">Maithili</option> 
					<option value="Language : Malagasy">Malagasy</option> 
					<option value="Language : Malay">Malay</option> 
					<option value="Language : Malayalam">Malayalam</option> 
					<option value="Language : Maltese">Maltese</option> 
					<option value="Language : Maori">Maori</option> 
					<option value="Language : Marathi">Marathi</option> 
					<option value="Language : Meiteilon (Manipuri)">Meiteilon (Manipuri)</option> 
					<option value="Language : Mizo">Mizo</option> 
					<option value="Language : Mongolian">Mongolian</option> 
					<option value="Language : Myanmar (Burmese)">Myanmar (Burmese)</option> 
					<option value="Language : Nepali">Nepali</option> 
					<option value="Language : Norwegian">Norwegian</option> 
					<option value="Language : Odia (Oriya)">Odia (Oriya)</option> 
					<option value="Language : Oromo">Oromo</option> 
					<option value="Language : Pashto">Pashto</option> 
					<option value="Language : Persian">Persian</option> 
					<option value="Language : Polish">Polish</option> 
					<option value="Language : Portuguese">Portuguese</option> 
					<option value="Language : Punjabi">Punjabi</option> 
					<option value="Language : Quechua">Quechua</option> 
					<option value="Language : Romanian">Romanian</option> 
					<option value="Language : Russian">Russian</option> 
					<option value="Language : Samoan">Samoan</option> 
					<option value="Language : Sanskrit">Sanskrit</option> 
					<option value="Language : Scots Gaelic">Scots Gaelic</option> 
					<option value="Language : Sepedi">Sepedi</option> 
					<option value="Language : Serbian">Serbian</option> 
					<option value="Language : Sesotho">Sesotho</option> 
					<option value="Language : Shona">Shona</option> 
					<option value="Language : Sindhi">Sindhi</option> 
					<option value="Language : Sinhala">Sinhala</option> 
					<option value="Language : Slovak">Slovak</option> 
					<option value="Language : Slovenian">Slovenian</option> 
					<option value="Language : Somali">Somali</option> 
					<option value="Language : Spanish">Spanish</option> 
					<option value="Language : Sundanese">Sundanese</option> 
					<option value="Language : Swahili">Swahili</option> 
					<option value="Language : Swedish">Swedish</option> 
					<option value="Language : Tajik">Tajik</option> 
					<option value="Language : Tamil">Tamil</option> 
					<option value="Language : Tatar">Tatar</option> 
					<option value="Language : Telugu">Telugu</option> 
					<option value="Language : Thai">Thai</option> 
					<option value="Language : Tigrinya">Tigrinya</option> 
					<option value="Language : Tsonga">Tsonga</option> 
					<option value="Language : Turkish">Turkish</option> 
					<option value="Language : Turkmen">Turkmen</option> 
					<option value="Language : Twi">Twi</option> 
					<option value="Language : Ukrainian">Ukrainian</option> 
					<option value="Language : Urdu">Urdu</option> 
					<option value="Language : Uyghur">Uyghur</option> 
					<option value="Language : Uzbek">Uzbek</option> 
					<option value="Language : Vietnamese">Vietnamese</option> 
					<option value="Language : Welsh">Welsh</option> 
					<option value="Language : Xhosa">Xhosa</option> 
					<option value="Language : Yiddish">Yiddish</option> 
					<option value="Language : Yoruba">Yoruba</option> 
				</select>
				<br><br>
				Payment Methods
				<select name="Payment Methods" title="Payments" class="Fonts">
					<option value="Select" selected>Select If Needed</option>
					<option value="Debit Payment">Debit</option>
					<option value="Credit Payment">Credit</option>
					<option value="Upfrount Cash Payment">Cash</option>
					<option value="Paypal">Paypal</option>
				</select>
				<br>
				<br>
				Submit Data: <input type="submit" class="fonts" placeholder="Submit" value="Submit"><br>
				<br>
				</form>
			</div>
	</head>
</html>



<?php
error_reporting(1);
error_reporting(E_ALL);
function Aquire_Data(){
	$Get = array("name","Email","Background","Address","Age","Language","Payment Methods","PhoneNumber");
	$Data = array();
	for($Length=0 ; $Length <= (count($Get)-1) ; $Length++){
		array_push($Data,$_POST[$Get[$Length]]);
	}
	return $Data;
}
function Table(){
	$Type = $_POST["Type"];
	if($Type == "Pupil"){
		return array("Pupil Data",array(0,"Pupil Name"),array(4,"AGE"));
	}
	elseif($Type == "Parent"){
		return array("Parent Data",array(0,"Parent Name"),array(1,"Email"),array(3,"Address"),array(4,"AGE"),array(7,"Phone Number"));
	}
	elseif($Type == "Teacher"){
		return array("Teacher Data",array(0,"Teacher Name"),array(1,"Email"),array(2,"Background"),array(3,"Address"),array(4,"AGE"),array(7,"Phone Number"));
	}
	else{
		return "None";
	}
}
function Connect(){
	$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student23-35303133e517", "ua92-studentAc", "student23-35303133e517");
    if($link == false){
		Disconnect($link);
		$link = "Failed";
	}
	return $link;
}
function Disconnect($Link){
	if($Link != false){
		mysqli_close($Link);
	}
}
function Add_Data($Data,$Appending_Table){
    // echo "1";
	$Link = Connect();
    // echo "2";
	if($Link != "Failed"){
    //   echo "3";
		echo $Appending_Table;
		if($Appending_Table != "None"){
            // echo "4";
			$Insert_Into = "INSERT INTO `" . $Appending_Table[0] . "`(";
			$Values = "VALUES (";
			$Insert_Into .= "`" . $Appending_Table[1][1] ."`";
			for($Length = 2; $Length <= (count($Appending_Table)-1) ; $Length++){
				$Insert_Into .= ", `" . $Appending_Table[$Length][1] . "`";
			}
            // echo "5";
			$Insert_Into = $Insert_Into . ")";
			$Values .= "\"" . $Data[$Appending_Table[1][0]] ."\"";
			for($Length = 2; $Length <= (count($Appending_Table)-1) ; $Length++){
				$Values .= ", \"" . $Data[$Appending_Table[$Length][0]] . "\"";
			}
            // echo "6";
			$Values = $Values . ");";
			$String = $Insert_Into . $Values;
			echo $String;
			if (mysqli_query($Link, $String)) {
				Disconnect($Link);
				// echo "New record created successfully";
				} 
			else {
				Disconnect($Link);
				echo "Error adding record ";
			}
			echo "Complete";
		}
	}
	else{
		return "Failed";
	}
}
function View_Data(){
	$Link = Connect();
	if($Link != "Failed"){
		$Tables = array("Class Data","Parent Data","Pupil Data","Teacher Data");
		for($Length = 0; $Length <= (count($Tables)-1); $Length++){
			$query = "SELECT * From `" . $Tables[$Length] . "`";
			$result = mysqli_query($Link,$query);
			while($Row = $result -> fetch_row()){
				if ($Row == Null){
					echo "No Data Found";
					break;
				}
				echo $Tables[$Length];
				for($Column = 0; $Column < count($Row); $Column++){
					$String = $Tables[$Length] . " = " . $Row[$Column] . "<br>";
					echo $String;
				}
				echo "<br><br>";
			}
		}
	}
	else{	
		echo "failed";
	}
}
function Main(){
	$Data = Aquire_Data();
	$Appending_Table = Table();
	ADD_DATA($Data,$Appending_Table);
	View_Data();
}

Main();
?>