<? 
$db = new mysqli (
    'us-cdbr-azure-southcentral-f.cloudapp.net',
    'bf9afe7c1df5c8',
    '5d557954',
    'acsm_0dd8805538e55e7');
// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}

<form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="50%">Name</td>
      <td><input name="name" type="text" id="name"></td>
    </tr>
    <tr> 
      <td>Email</td>
      <td><input name="email" type="text" id="email"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Headline</td>
      <td><input name="headline" type="text" id="headline"></td>
    </tr>
    <tr> 
      <td>News Story</td>
      <td><textarea name="story" id="story"></textarea></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="add_n">
          <input name="add" type="submit" id="add" value="Submit">
        </div></td>
    </tr>
  </table>
  </form>
