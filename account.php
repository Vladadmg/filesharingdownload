<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-strict.dtd">
<html><head>
<title>FileSharingDownloads - Account Management</title>
<link rel="stylesheet" href=./style/base/torrent.css type="text/css" /></head>
<body>
<table width="100%" height="100%"  border="0">
<tr>
<td height="100" colspan="2">
    <table width=100%>
    <tr><td align=left>
    <a href=./index.php><img border=0 src="./style/base/logo.gif"></a>
    </td>
    <td align=right>
    <a href="http://filesharingplace.com/forums/index.php?act=announce&id=3">
    <img src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" alt="Make payments with PayPal - it's fast, free and secure!">
    </a>
    </td></tr>
    </table>
</td>
</tr>
<tr><td height="100" colspan="2">

    <table class=lista width=100%>
    <tr>
<td class=header align=center>Welcome Guest 
<a href=login.php>(Login)</a></td>
<td class=header align=center><a href=./>Index</a></td>
<td class=header align=center><a href=extra-stats.php>Extra Stats</a></td>
<td class=header align=center><a href=http://filesharingplace.com/forums/index.php?act=idx target=_blank>Forum</a></td>
   </tr>
   </table>
<table class="lista" cellpadding="2" cellspacing="0" width="100%">
<tr>
<td class=lista align=center>Tracker Info:</td>
<td class=lista align=center>Users:</td><td align=right>84</td>
<td class=lista align=center>torrent(s):</td><td align=right>3</td>
<td class=lista align=center>seed(s):</td><td align=right>0</td>
<td class=lista align=center>leecher(s):</td><td align=right>0</td>
<td class=lista align=center>peer(s):</td><td align=right>0</td>
<td class=lista align=center>seed(s)/leecher(s):</td><td align=right>0%</td>
<td class=lista align=center>Traffic:</td><td align=right>4.18 MB</td>
</tr></table>
    <form action="login.php" name="login" method="post">
    <table class="lista" border="0" width="100%" cellpadding="2" cellspacing="0">
    <tr>
    <td class="lista" align="left">
      <table border="0" cellpadding="2" cellspacing="0">
      <tr>
      <td align="right" class="lista">User:</td>
      <td class="lista"><input type="text" size="15" name="uid" value="" maxlength="40" style="font-size:10px" /></td>
      <td align="right" class="lista">Password:</td>
      <td class="lista"><input type="password" size="15" name="pwd" maxlength="40" style="font-size:10px" /></td>
      <td class="lista" align="center"><input type="submit" value="Login" style="font-size:10px" /></td>
      </tr>
      </table>
    </td>
    <td class="lista" align="center"><a href="account.php">Create account</a></td>
    <td class="lista" align="center"><a href="recover.php">Recover password</a></td>
    </tr>
    </table>
    </form>
    </td></tr>
<table width="100%" height="100%"  border="0">
<tr>
<td width="20%" valign=top>
<br /><table class=lista cellpadding=0 cellspacing=0 width=95% align=center>
	<tr>
		<TD class=block align=center height=20px colspan=1><b>Main Menu</b></TD>
	</tr>
	<tr>
		<TD width=100% align=justify valign=top><tr><td class=blocklist align=center><a href=./>Index</a></td></tr>
<td class=blocklist align=center><a href=http://filesharingplace.com/forums/index.php?act=idx target=_blank>Forum</a></td>
<tr><td class=blocklist align=center><a href=login.php>Login</a></td></tr>
		</td>
	</tr>
	<tr>
		<TD class=block colspan=1 align=center height=20px></TD>
	</tr>
</table><br /><table class=lista cellpadding=0 cellspacing=0 width=95% align=center>
	<tr>
		<TD class=block align=center height=20px colspan=1><b>Latest Member</b></TD>
	</tr>
	<tr>
		<TD width=100% align=justify valign=top> <div align=center> Welcome to our Tracker <br><b>raool_arts</b>!</div>
		</td>
	</tr>
	<tr>
		<TD class=block colspan= align=center height=20px></TD>
	</tr>
</table><br /><table class=lista cellpadding=0 cellspacing=0 width=95% align=center>
	<tr>
		<TD class=block align=center height=20px colspan=1><b>Online Users</b></TD>
	</tr>
	<tr>
		<TD width=100% align=justify valign=top>
<tr><td class=lista align=center>2 visitors (2 guests
)
</td></tr>		</td>
	</tr>
	<tr>
		<TD class=block colspan=1 align=center height=20px></TD>
	</tr>
</table></td>
<td valign=top>


<SCRIPT Language="Javascript">
<!--

function FormControl($nopwd)
  {
  alert("flag="+document.utente.flag.options[document.utente.flag.selectedIndex].value);
// Controllo nome + pwd
    if (document.utente.user.value == "" )
      {
        alert(INSERT_USERNAME);
        return false;
      }

     if ($nopwd=="mod") {
        return true;
     }

    if ((document.utente.pwd.value == ""))
      {
      alert(INSERT_PASSWORD);
      return false;

      }

    if ((document.utente.pwd.value !=  document.utente.pwd1.value))
      {
      alert(DIF_PASSWORDS);
      return false;
      }
   return true;
  }
// -->
</SCRIPT>

<center><br /><table class=lista cellpadding=0 cellspacing=0 width=95% align=center>
	<tr>
		<TD class=block align=center height=20px colspan=1><b>Create account</b></TD>
	</tr>
	<tr>
		<TD width=100% align=justify valign=top></center><center>
<p>

<form name="utente" method="post" OnSubmit="return FormControl('signup')" action="?act=signup&returnto=" ?>
    <input type="hidden" name="act" value="signup" />
    <input type="hidden" name="uid" value="1" ?>
    <input type="hidden" name="returnto" value=" " ?>
    <input type="hidden" name="language" value=" " ?>
    <input type="hidden" name="style" value=" " ?>
    <input type="hidden" name="flag" value=" " ?>
    <table width="60%" border="0" class="lista">
<tr>
   <td align=left class="header">User: </td>
   <td align="left" class="lista">
   
<input type="text" size="40" name="user" />   </td>
</tr>
<tr>
   <td align=left class="header">Password:</td>
   <td align="left" class="lista"><input type="password" size="40" name="pwd" /></td>
</tr>
<tr>
   <td align=left class="header">Repeat password:</td>
   <td align="left" class="lista"><input type="password" size="40" name="pwd1" /></td>
</tr>
<tr>
   <td align=left class="header">valid email:</td>
   <td align="left" class="lista">
	<input type="text" size="30" name="email" value="" ?>
        </td>
</tr>
   <tr>
	<td align=left class="header">Language:</td>
	<td align="left" class="lista"><select name=language><option value=11>Bulgarian</option><option value=15>Czech</option><option value=4>Deutsch</option><option value=5>Dutch</option><option selected=selected value=1>English</option><option value=12>Finnish</option><option value=3>Français</option><option value=2>Italian</option><option value=6>Polish</option><option value=9>Portuguese</option><option value=13>Russian</option><option value=10>Serbian</option><option value=7>Spanish</option><option value=14>Thai</option><option value=8>Turkish</option></select></td>
</tr><tr>
	<td align=left class="header">Style:</td>
	<td align="left" class="lista"><select name=style><option selected=selected value=1>Blue</option><option value=2>Green</option><option value=4>Dark</option></select></td>
</tr><tr>
	<td align=left class="header">Country:</td>
	<td align=left class="lista"><select name=flag>
<option value='0'>---</option><option value='54'>Afghanistan</option><option value='65'>Albania</option><option value='35'>Algeria</option><option value='68'>Andorra</option><option value='36'>Angola</option><option value='89'>Antigua Barbuda</option><option value='19'>Argentina</option><option value='20'>Australia</option><option value='37'>Austria</option><option value='82'>Bahamas</option><option value='86'>Bangladesh</option><option value='85'>Barbados</option><option value='16'>Belgium</option><option value='34'>Belize</option><option value='67'>Bosnia Herzegovina</option><option value='18'>Brazil</option><option value='60'>Burkina Faso</option><option value='84'>Cambodia</option><option value='5'>Canada</option><option value='51'>Chile</option><option value='8'>China</option><option value='99'>Colombia</option><option value='53'>Congo</option><option value='97'>Croatia</option><option value='52'>Cuba</option><option value='46'>Czech Republic</option><option value='10'>Denmark</option><option value='41'>Dominican Republic</option><option value='81'>Ecuador</option><option value='98'>Estonia</option><option value='4'>Finland</option><option value='6'>France</option><option value='7'>Germany</option><option value='42'>Greece</option><option value='43'>Guatemala</option><option value='79'>Honduras</option><option value='33'>Hong Kong</option><option value='74'>Hungary</option><option value='62'>Iceland</option><option value='70'>India</option><option value='13'>Ireland</option><option value='44'>Israel</option><option value='9'>Italy</option><option value='31'>Jamaica</option><option value='17'>Japan</option><option value='58'>Kiribati</option><option value='80'>Kyrgyzstan</option><option value='87'>Laos</option><option value='69'>Lithuania</option><option value='32'>Luxembourg</option><option value='40'>Malaysia</option><option value='25'>Mexico</option><option value='63'>Nauru</option><option value='15'>Netherlands</option><option value='71'>Netherlands Antilles</option><option value='21'>New Zealand</option><option value='61'>Nigeria</option><option value='96'>North Korea</option><option value='11'>Norway</option><option value='45'>Pakistan</option><option value='90'>Paraguay</option><option value='83'>Peru</option><option value='59'>Philippines</option><option value='14'>Poland</option><option value='24'>Portugal</option><option value='50'>Puerto Rico</option><option value='75'>Romania</option><option value='3'>Russia</option><option value='94'>Senegal</option><option value='47'>Serbia</option><option value='48'>Seychelles</option><option value='26'>Singapore</option><option value='64'>Slovenia</option><option value='29'>South Africa</option><option value='30'>South Korea</option><option value='23'>Spain</option><option value='1'>Sweden</option><option value='57'>Switzerland</option><option value='49'>Taiwan</option><option value='93'>Thailand</option><option value='95'>Togo</option><option value='78'>Trinidad & Tobago</option><option value='55'>Turkey</option><option value='66'>Turkmenistan</option><option value='72'>Ukraine</option><option value='92'>Union of Soviet Socialist Republics</option><option value='12'>United Kingdom</option><option value='2'>United States of America</option><option value='100'>unknown</option><option value='88'>Uruguay</option><option value='56'>Uzbekistan</option><option value='76'>Vanuatu</option><option value='73'>Venezuela</option><option value='77'>Vietnam</option><option value='39'>Western Samoa</option><option value='38'>Yugoslavia</option></select></td>
</tr><tr>
   <td align=center class="header"></td>

<td align=left class=lista><input type="submit" name="conferma" value="Confirm" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="annulla" value="Cancel" /></td></tr>
</table>
</form>
</center>
</p>
<center><a href="javascript: history.go(-1);">Back</a></center>		</td>
	</tr>
	<tr>
		<TD class=block colspan=1 align=center height=20px></TD>
	</tr>
</table></body>
</html>