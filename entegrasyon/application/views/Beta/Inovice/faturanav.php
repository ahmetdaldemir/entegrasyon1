<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=Generator content="FastReport http://www.fast-report.com">
<title></title><style type="text/css"><!--
body,input,select { font-family:"Lucida Grande",Calibri,Arial,sans-serif; font-size: 8px; font-weight: bold; font-style: normal; text-align: center; vertical-align: middle; }
input {text-align: center}
.nav { font-size : 9pt; color : #283e66; font-weight : bold; text-decoration : none;}
--></style><script language="javascript" type="text/javascript"><!--
  var frPgCnt = 1; var frRepName = "Fatura"; var frMultipage = 0; var frPrefix="Fatura";
  function DoPage(PgN) {
    if ((PgN > 0) && (PgN <= frPgCnt) && (PgN != parent.frCurPage)) {
      if (frMultipage > 0)  parent.mainFrame.location = frPrefix + PgN + ".html";
      else parent.mainFrame.location = frPrefix + ".main.html#PageN" + PgN;
      UpdateNav(PgN); } else document.PgForm.PgEdit.value = parent.frCurPage; }
  function UpdateNav(PgN) {
    parent.frCurPage = PgN; document.PgForm.PgEdit.value = PgN;
    if (PgN == 1) { document.PgForm.bFirst.disabled = 1; document.PgForm.bPrev.disabled = 1; }
    else { document.PgForm.bFirst.disabled = 0; document.PgForm.bPrev.disabled = 0; }
    if (PgN == frPgCnt) { document.PgForm.bNext.disabled = 1; document.PgForm.bLast.disabled = 1; }
    else { document.PgForm.bNext.disabled = 0; document.PgForm.bLast.disabled = 0; } }
--></script></head>
<body bgcolor="#DDDDDD" text="#000000" leftmargin="0" topmargin="4" onload="UpdateNav(parent.frCurPage)">
<form name="PgForm" onsubmit="DoPage(document.forms[0].PgEdit.value); return false;" action="">
<table cellspacing="0" align="left" cellpadding="0" border="0" width="100%">
<tr valign="middle">
<td width="60" align="center"><button name="bFirst" class="nav" type="button" onclick="DoPage(1); return false;"><b><<</b></button></td>
<td width="60" align="center"><button name="bPrev" class="nav" type="button" onclick="DoPage(Math.max(parent.frCurPage - 1, 1)); return false;"><b><</b></button></td>
<td width="100" align="center"><input type="text" class="nav" name="PgEdit" value="parent.frCurPage" size="4"></td>
<td width="60" align="center"><button name="bNext" class="nav" type="button" onclick="DoPage(parent.frCurPage + 1); return false;"><b>></b></button></td>
<td width="60" align="center"><button name="bLast" class="nav" type="button" onclick="DoPage(frPgCnt); return false;"><b>>></b></button></td>
<td width="20">&nbsp;</td>

<td align="right">Total: <script language="javascript" type="text/javascript"> document.write(frPgCnt);</script></td>
<td width="10">&nbsp;</td>
</tr></table></form></body></html>
