<html>
<head>
<title>Email Validation</title>
<script type="text/javascript">
function validate()
{
var str;
var t=1;
str =document.getElementById('email').value;
if(document.getElementById('email').value=="")
{
alert("Empty");

}
var res = str.split('@');
if(str.split('@').length!=2)
{
alert("zero @ OR moret han one @ ");
t=0;
}
var part1=res[0];
var part2=res[1];

// part1
if(part1.length==0)
{
alert("no content bfr @");
t=0;
}
if(part1.split(" ").length>2)
{
alert("Invalid:Space before @")
t=0;
}

//chk afr @ content:  part2
var dotsplt=part2.split('.');  //alert("After @ :"+part2);
if(part2.split(".").length<2)
{
alert("dot missing");
t=0;
}
if(dotsplt[0].length==0 )
{
alert("no content b/w @ and dot");
t=0;
}
if(dotsplt[1].length<2 ||dotsplt[1].length>4)
{alert("err aftr dot");
t=0;
}

if(t==1)
alert("woooooooooooooooooooowwwww…it is a valid email");

}

</script>
</head>

<body>

<input type="text" name="email" id="email"  />
<input type="button" name="btnok" onclick="validate()" />

</body>
</html>