<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>DMX Controller</title>
    <style>
        td {
            text-align:center;
        }
    </style>
    <script type="text/javascript" src="light.js"></script>
</head>

<body>
<div align="center">


    <p>
        <label for="cmd"></label>
        <input type="text" name="cmd" id="cmd" />
    </p>
    <table width="200" border="1">
        <tr>
            <td><input name="1" type="button" value="1" /></td>
            <td><input name="2" type="button" value="2" /></td>
            <td><input name="3" type="button" value="3" /></td>
        </tr>
        <tr>
            <td><input name="4" type="button" value="4" /></td>
            <td><input name="5" type="button" value="5" /></td>
            <td><input name="6" type="button" value="6" /></td>
        </tr>
        <tr>
            <td><input name="7" type="button" value="7" /></td>
            <td><input name="8" type="button" value="8" /></td>
            <td><input name="9" type="button" value="9" /></td>
        </tr>
    </table>
    <table width="200" border="1">
        <tr>
            <td><form id="form1" name="form1" method="post" action="">
                <input type="button" name="At" id="@" value="@" />
            </form></td>
            <td><input type="button" name="0" id="0" value="0" /></td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
    <p>&nbsp;</p>

</div>

</body>
</html>
