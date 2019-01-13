<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>network monitoring tool</title>
        
        <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<style>
        .card{
        padding: 1%;}
	[type="radio"]:not(:checked), [type="radio"]:checked {
    position: relative;
    left: 100px;
	visibility: visible;
}select {
    display: block;
}
.logout{
position: fixed;
top: 10px;
right: 10px;
}
h4{
font-family:'Open Sans',sans-serif;
}
        </style>
</head>
<body>
<a href="logout.php" class="logout">Logout</a>
<div class="container">
<h4>NETWORK MONITORING TOOL</h4>

<form method="post" action="" class="">
<input type="radio" name="packet" value="TCP" onclick="change">TCP<br></br>
<input type="radio" name="packet" value="UDP" onclick="change">UDP<br></br>
<input type="radio" name="packet" value="ARP" onclick="change" checked>ARP<br>
<br>
<select name="dropdown">
	<option value="timestamp">Timestamp</option>
        <option value="sourceaddress">Source Address</option>
        <option value="destinationaddress">Destination Address</option>
	<option value="sourceport">Source Port</option>
	<option value="destinationport">Destination Port</option>
	<option value="sourcemac">Source MAC</option>
	<option value="destinationmac">Destination MAC</option>
        <option value="length">Length</option>
	<option value="all">All</option>
</select><br>
<button class="" type="submit" name="submit">Submit</button>
</form>

<?php
if(isset($_POST["submit"]));
{
	$value=$_POST["packet"];
	$selected=$_POST["dropdown"];

if($value=="TCP")
{
	echo "<h5>TCP</h5><br>";
	if($selected=="timestamp")
	{
		$time=fopen("tcp_time","r");
		while(!feof($time))
		{
			echo fgets($time)."<br>";
		}
		fclose($time);
	}
	if($selected=="sourceaddress")
	{
		 $srcadd=fopen("tcp_srcadd","r");
                while(!feof($srcadd))
                {
                        echo fgets($srcadd)."<br>";
                }
                fclose($srcadd);
	}
	if($selected=="destinationaddress")
	{
		 $dstadd=fopen("tcp_dstadd","r");
                while(!feof($dstadd))
                {
                        echo fgets($dstadd)."<br>";
                }
                fclose($dstadd);
	}
	if($selected=="length")
	{
		 $length=fopen("tcp_length","r");
                while(!feof($length))
                {
                        echo fgets($length)."<br>";
                }
                fclose($length);
	}
	if($selected=="sourceport")
	{
		 $srcport=fopen("tcp_srcport","r");
                while(!feof($srcport))
                {
                        echo fgets($srcport)."<br>";
                }
                fclose($srcport);
	}
	if($selected=="destinationport")
	{
		 $dstport=fopen("tcp_dstport","r");
                while(!feof($dstport))
                {
                        echo fgets($dstport)."<br>";
                }
                fclose($dstport);
	}
	if($selected=="sourcemac")
	{
		$srcmac=fopen("tcp_srcmac","r");
                while(!feof($srcmac))
                {
                        echo fgets($srcmac)."<br>";
                }
                fclose($srcmac);
	}
	if($selected=="destinationmac")
	{
		 $dstmac=fopen("tcp_dstmac","r");
                while(!feof($dstmac))
                {
                        echo fgets($dstmac)."<br>";
                }
                fclose($dstmac);
	}
	if($selected=="all")
	{
		 $time=fopen("tcp_time","r");
		$srcadd=fopen("tcp_srcadd","r");
		$dstadd=fopen("tcp_dstadd","r");
		$srcport=fopen("tcp_srcport","r");
		$dstport=fopen("tcp_dstport","r");
		$length=fopen("tcp_length","r");
		echo "<table class=''><thead><tr><th>Timestamp</th><th>Source Address</th><th>Destination Address</th><th>Source Port</th><th>Destination Port</th><th>Length</th></tr></thead>";
		while(!feof($time))
		{
			echo "<tr><td>".fgets($time)."</td><td>".fgets($srcadd)."</td><td>".fgets($dstadd)."</td><td>".fgets($srcport)."</td><td>".fgets($dstport)."</td><td>".fgets($length)."</td></tr>";
		}
		echo "</table>";
		fclose($time);
		fclose($srcadd);
		fclose($dstadd);
		fclose($length);
		fclose($srcport);
		fclose($dstport);

	}
}
if ($value=="UDP")
{
	        echo "<h5>UDP</h5><br>";

	if($selected=="timestamp")
        {
                $time=fopen("udp_time","r");
                while(!feof($time))
                {
                        echo fgets($time)."<br>";
                }
                fclose($time);
        }
        if($selected=="sourceaddress")
        {
                 $srcadd=fopen("udp_srcadd","r");
                while(!feof($srcadd))
                {
                        echo fgets($srcadd)."<br>";
                }
                fclose($srcadd);
        }
        if($selected=="destinationaddress")
        {
                 $dstadd=fopen("udp_dstadd","r");
                while(!feof($dstadd))
                {
                        echo fgets($dstadd)."<br>";
                }
                fclose($dstadd);
        }
        if($selected=="length")
        {
                 $length=fopen("udp_length","r");
                while(!feof($length))
                {
			echo fgets($length)."<br>";
		}
                fclose($length);
        }
        if($selected=="sourceport")
        {
                 $srcport=fopen("udp_srcport","r");
                while(!feof($srcport))
                {
                        echo fgets($srcport)."<br>";
                }
                fclose($srcport);
        }
        if($selected=="destinationport")
        {
                 $dstport=fopen("udp_dstport","r");
                while(!feof($dstport))
                {
                        echo fgets($dstport)."<br>";
                }
                fclose($dstport);
        }
        if($selected=="sourcemac")
        {
                 $srcmac=fopen("udp_srcmac","r");
                while(!feof($srcmac))
                {
                        echo fgets($srcmac)."<br>";
                }
                fclose($srcmac);
        }
        if($selected=="destinationmac")
        {
                 $dstmac=fopen("udp_dstmac","r");
                while(!feof($dstmac))
                {
                        echo fgets($dstmac)."<br>";
                }
                fclose($dstmac);
	}
	if($selected=="all")
        {
                 $time=fopen("udp_time","r");
                $srcadd=fopen("udp_srcadd","r");
                $dstadd=fopen("udp_dstadd","r");
                $srcmac=fopen("udp_srcmac","r");
                $dstmac=fopen("udp_dstmac","r");
                $srcport=fopen("udp_srcport","r");
                $dstport=fopen("udp_dstport","r");
                $length=fopen("udp_length","r");
                echo "<table class=''><thead><tr><th>Timestamp</th><th>Source Address</th><th>Destination Address</th><th>source mac</th><th>destination mac</th><th>Source Port</th><th>Destination Port</th><th>Length</th></tr></thead>";
                while(!feof($time))
                {
                        echo "<tr><td>".fgets($time)."</td><td>".fgets($srcadd)."</td><td>".fgets($dstadd)."</td><td>".fgets($dstmac)."</td><td>".fgets($srcmac)."</td><td>".fgets($srcport)."</td><td>".fgets($dstport)."</td><td>".fgets($length)."</td></tr>";

                }
                echo "</table>";
                fclose($time);
                fclose($srcadd);
                fclose($dstadd);
                fclose($srcmac);
                fclose($dstmac);
                              
                fclose($length);
                fclose($srcport);
		fclose($dstport);

        }


}
else
{
	        echo "<h5>ARP</h5><br>";

	if($selected=="timestamp")
        {
                $time=fopen("arp_time","r");
                while(!feof($time))
                {
                        echo fgets($time)."<br>";
                }
                fclose($time);
        }
        if($selected=="sourceaddress")
        {
                 $srcadd=fopen("arp_srcadd","r");
                while(!feof($srcadd))
                {
                        echo fgets($srcadd)."<br>";
                }
                fclose($srcadd);
        }
        if($selected=="destinationaddress")
        {
                 $dstadd=fopen("arp_dstadd","r");
                while(!feof($dstadd))
                {
                        echo fgets($dstadd)."<br>";
                }
                fclose($dstadd);
        }
        if($selected=="length")
        {
                 $length=fopen("arp_length","r");
                while(!feof($length))
                {
                        echo fgets($length)."<br>";
                }
		fclose($length);
        }
        if($selected=="sourceport")
        {
                 echo "not available";
        }
        if($selected=="destinationport")
        {
                 echo "not available";
        }
        if($selected=="sourcemac")
        {
                 $srcmac=fopen("arp_srcmac","r");
                while(!feof($srcmac))
                {
                        echo fgets($srcamc)."<br>";
                }
                fclose($srcmac);
        }
        if($selected=="destinationmac")
        {
                 $dstmac=fopen("arp_dstmac","r");
                while(!feof($time))
                {
                        echo fgets($dstmac)."<br>";
                }
                fclose($dstmac);
        }
	if($selected=="all")
        {
                 $time=fopen("arp_time","r");
                $srcadd=fopen("arp_srcadd","r");
                $dstadd=fopen("arp_dstadd","r");
                $srcmac=fopen("arp_srcmac","r");
                $dstmac=fopen("arp_dstmac","r");
                $length=fopen("arp_length","r");
                echo "<table class='striped'><thead><tr><th>Timestamp</th><th>Source Address</th><th>Destination Address</th><th>source mac</th><th>destination mac</th><th>Length</th></tr></thead>";
                while(!feof($time))
                {
                        echo "<tr><td>".fgets($time)."</td><td>".fgets($srcadd)."</td><td>".fgets($dstadd)."</td><td>".fgets($srcmac)."</td><td>".fgets($dstmac)."</td><td>".fgets($length)."</td></tr>";

                }
                echo "</table>";
                fclose($time);
                fclose($srcadd);
                fclose($dstadd);
                fclose($length);
                 fclose($srcmac);
                fclose($dstmac);
                
        }


}
}
?>
</div>
</body>
</html>
