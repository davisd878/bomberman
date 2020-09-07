
<HTML>
<HEAD>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="text/javascript">
<!-- Begin

// Created and Copyrighted by Benjamin Leow
// Please go to http://www.surf7.net for latest version and more freeware

function copy() {
textRange = document.extractor.output.createTextRange();
textRange.execCommand("RemoveFormat");
textRange.execCommand("Copy");
}

function paste() {
textRange = document.extractor.input.createTextRange();
textRange.execCommand("RemoveFormat");
textRange.execCommand("Paste");
}

function help(){

var imgwid = 450;
var imghgt = 360;

content = ('<html><head><title>Email Extractor Lite : Help</title>');
content += ('<STYLE TYPE="text/css">');
content += ('BODY,td,th,ul,p       { font: normal normal normal 8pt/1em Verdana; color: #000; }');
content += ('</STYLE>');
content += ('</head><body onload="window.focus();">');
content += ('<B>Quick and dirty</B>');
content += ('<OL>');
content += ('<LI>Copy all text from any webpages, documents, files, etc...');
content += ('<LI>Paste it into <B>Input Window</B>.');
content += ('<LI>Click "<I>Extract</I>" button.');
content += ('<LI>Copy the result from <B>Output Window</B> to somewhere and save it.');
content += ('<LI>Click "<I>Reset</I>" button to start all over again.');
content += ('</OL>');
content += ('<P><B>More Controls</B>');
content += ('<OL>');
content += ('<LI>Click "<I>Paste Input</I>" link to paste any text you copied elsewhere into <B>Input Window</B>.');
content += ('<LI>Click "<I>Copy Output</I>" link to copy whatever text inside <B>Output Window</B>.');
content += ('<LI>Choose different separator from the dropdown menu or specify your own. Default is comma.');
content += ('<LI>You can group a number of emails together. Each group is separated by a new line. Please enter number only.');
content += ('<LI>Check "<I>Sort Alphabetically</I>" checkbox to arrange extracted emails well... alphabetically.');
content += ('<LI>You can extract or exclude emails containing certain string (text). Useful if you only want to get email from a particular domain.');
content += ('<LI>You can choose to extract web addresses instead of email addresses.');
content += ('</OL>');
content += ('<DIV ALIGN="CENTER"><INPUT TYPE="button" VALUE="Close" onClick="javascript:window.close();"></DIV>');
content += ('</body></html>');

var winl = (screen.width - imgwid) / 2;
var wint = (screen.height - imghgt) / 2;
helpwindow = window.open('','help','width=' + imgwid + ',height=' + imghgt + ',resizable=0,scrollbars=0,top=' + wint + ',left=' + winl + ',toolbar=0,location=0,directories=0,status=0,menubar=0,copyhistory=0');
helpwindow.document.write(content);
helpwindow.document.close();
}

function checksep(value){
if (value) document.extractor.sep.value = "other";
}

function numonly(value){
if (isNaN(value)) {
	window.alert("Please enter a number or else \nleave blank for no grouping.");
	document.extractor.groupby.focus();
}
}

function findEmail() {
var email = "none";
var a = 0;
var ingroup = 0;
var separator = document.extractor.sep.value;
var string = document.extractor.string.value;
var groupby = Math.round(document.extractor.groupby.value);
var address_type = document.extractor.address_type.value;

if (separator == "new") separator = "\n";
if (separator == "other") separator = document.extractor.othersep.value;
if (address_type == "web") var rawemail = document.extractor.input.value.match(/(http:\/\/+[a-zA-Z0-9]+[a-zA-Z0-9-]+\.[a-zA-Z0-9._/-]+)/gi);
else var rawemail = document.extractor.input.value.toLowerCase().match(/([a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z0-9._-]+)/gi);
var norepeat = new Array();
var filtermail = new Array();
if (rawemail) {
	if (string){
		x = 0;
		for (var y=0; y<rawemail.length; y++) {
			if (document.extractor.filter_type.value == 1) {
				if (rawemail[y].search(string) >= 0) {
					filtermail[x] = rawemail[y];
					x++;
				}
			} else {
				if (rawemail[y].search(string) < 0) {
					filtermail[x] = rawemail[y];
					x++;
				}
			}
		}
		rawemail = filtermail;
	}

	for (var i=0; i<rawemail.length; i++) {
		var repeat = 0;
		
		// Check for repeated emails routine
		for (var j=i+1; j<rawemail.length; j++) {
			if (rawemail[i] == rawemail[j]) {
				repeat++;
			}
		}
		
		// Create new array for non-repeated emails
		if (repeat == 0) {
			norepeat[a] = rawemail[i];
			a++;
		}
	}
	if (document.extractor.sort.checked) norepeat = norepeat.sort(); // Sort the array
	email = "";
	// Join emails together with separator
	for (var k = 0; k < norepeat.length; k++) {
		if (ingroup != 0) email += separator;
		email += norepeat[k];
		ingroup++;
		
		// Group emails if a number is specified in form. Each group will be separate by new line.
		if (groupby) {
			if (ingroup == groupby) {
				email += '\n\n';
				ingroup = 0;
			}
		}
	}
}

// Return array length
var count = norepeat.length;

// Print results
document.extractor.count.value = count;
document.extractor.output.value = email;
}
//  End -->
</SCRIPT>

<STYLE TYPE="text/css">
BODY                  { background:#FFF }
BODY,td,th,ul,p       { font: normal normal normal 8pt/1em Verdana; color: #000; }
textarea,input,select { font: normal normal normal 8pt/1em Verdana; color: #000; background:#FFF}
A:link, A:visited     { text-decoration: none; color: #059; }
A:active, A:hover     { text-decoration: underline; color: #D14; }
fieldset              { padding-left: 10px; padding-bottom: 10px; }
.bordercolor          { background:#666 }
.maincolor            { background:#CCC }
.button               { background:#CCC }
.titlebarcolor        { background:#007 }
.titlefont            { font: normal normal bold 9pt/1em Arial; color: #FFF; }
.copyrightfont        { font: normal normal normal 7.5pt/1.5em Verdana; color: #666; }
</STYLE>

<TITLE>Email Extractor Lite 1.6.1</TITLE>
</HEAD>
<BODY>

<DIV ALIGN="CENTER">
<FORM NAME="extractor">
<TABLE CLASS="bordercolor" CELLPADDING=1 CELLSPACING=0 BORDER=0><TR><TD>
<TABLE CLASS="maincolor" CELLPADDING=4 CELLSPACING=0 BORDER=0>
<TR CLASS="titlebarcolor" VALIGN="MIDDLE"> 
<TD><FONT CLASS="titlefont">Email Extractor Lite 1.6.1</FONT></TD>
<TD ALIGN="RIGHT" NOWRAP></TD>
</TR>
<TR>
<TD VALIGN="TOP" ALIGN="CENTER" WIDTH="50%">
<B>Input Window</B><BR>
<TEXTAREA NAME="input" rows=8 cols=50></TEXTAREA>
</TD>
<TD VALIGN="TOP" ALIGN="CENTER" WIDTH="50%">
<B>Output Window</B><BR>
<TEXTAREA NAME="output" rows=8 cols=50 readonly></TEXTAREA>
</TD></TR>
<TR>
<TD VALIGN="TOP" ALIGN="CENTER">

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
if ((navigator.appName=="Microsoft Internet Explorer")&&(parseInt(navigator.appVersion)>=4)) document.write('<A HREF="javascript:paste();">Paste Input</A>');
else document.write('Paste Input');
// -->
</SCRIPT>

</TD>
<TD VALIGN="TOP" ALIGN="CENTER">

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!--
if ((navigator.appName=="Microsoft Internet Explorer")&&(parseInt(navigator.appVersion)>=4)) document.write('<A HREF="javascript:copy();">Copy Output</A>');
else document.write('Copy Output');
// -->
</SCRIPT>

</TD></TR>
<TR>
<TD VALIGN="TOP" ALIGN="LEFT" COLSPAN=2>
<fieldset title="Output Option">
<legend align="left"><B>Output Option</B></legend>
<BR>
Separator:
<SELECT NAME="sep">
<OPTION VALUE=", ">Comma</OPTION>
<OPTION VALUE="|">Pipe</OPTION>
<OPTION VALUE=" : ">Colon</OPTION>
<OPTION VALUE="new">New Line</OPTION>
<OPTION VALUE="other">Other</OPTION>
</SELECT>
<INPUT TYPE="TEXT" NAME="othersep" SIZE=3 onBlur="checksep(this.value)">
&nbsp;&nbsp;
Group: <INPUT TYPE="TEXT" SIZE=3 NAME="groupby" onBlur="numonly(this.value)"> Addresses
&nbsp;&nbsp;
<LABEL FOR="sortbox"><INPUT TYPE="CHECKBOX" NAME="sort" id="sortbox">Sort Alphabetically</LABEL>
</fieldset>
<BR>
<fieldset title="Filter Option">
<legend align="left"><B>Filter Option</B></legend>
<BR>
<SELECT NAME="filter_type">
<OPTION VALUE=1>Only</OPTION>
<OPTION VALUE=0>Do not</OPTION>
</SELECT>
extract address containing this string: <INPUT TYPE="TEXT" SIZE=20 NAME="string">
<BR>
<BR>
Type of address to extract: 
<SELECT NAME="address_type">
<OPTION VALUE="email">Email</OPTION>
<OPTION VALUE="web">Web</OPTION>
</SELECT>
</fieldset>
</TD></TR>
<TR>
<TD VALIGN="TOP" ALIGN="LEFT">
<INPUT TYPE="BUTTON" CLASS="button" VALUE="Extract" onClick="findEmail()"> 
<INPUT TYPE="RESET" CLASS="button" VALUE="Reset">&nbsp;&nbsp;&nbsp;
<A HREF="javascript:help();"><I>Need help?</I></A>
</TD>
<TD VALIGN="TOP" ALIGN="RIGHT" NOWRAP>
Counter: <INPUT NAME="count" SIZE=5 READONLY>
</TD></TR>
</TABLE>
</TD></TR></TABLE>
</FORM>
<BR>
<FONT CLASS="copyrightfont">&copy; 2002 - 2004 <A HREF="http://www.benleow.com">Benjamin Leow</A> - All Right Reserved<BR>Go to <A HREF="http://www.surf7.net">Surf7.net</A> for latest version and more freeware.</FONT>
</DIV>

</BODY>
</HTML>
