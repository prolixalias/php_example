<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Membership Website Sample</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<?
    echo "<div style='clear: both; width: 100%; font-size: 14px; font-family: Helvetica; color: #30121d; background: #bcbf77; padding: 20px; text-align: center;'>";
    echo "<span style='color:#fff; font-weight: bold; text-transform: uppercase;'>";
    include './include/gitbranch.php';
    echo "</span></div>";
?>

<div id='fg_membersite_content'>
<h2>demo</h2>
<ul>
<li><a href='register.php'>Register</a></li>
<li><a href='confirmreg.php'>Confirm registration</a></li>
<li><a href='login.php'>Login</a></li>
<li><a href='access-controlled.php'>A sample member's only page</a></li>
</ul>
</div>
</body>
</html>
