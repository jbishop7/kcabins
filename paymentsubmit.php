<?php
	if($_SERVER["REQUEST_METHOD"] === "POST")
	{
		
		//check if other form details are correct
		
			//verify captcha
			$recaptcha_secret = "6LdMEOESAAAAAHIgiHNDeuYNQK66M8LBKBTpYTmv";
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
			$response = json_decode($response, true);
			if($response["success"] === true)
			{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>

<title>Kincardine Cabins Retreat | Rental Cabins in Kincardine, ON</title>

<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<link href='http://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/script.js"></script>

<script src="jquery.zweatherfeed.min.js" type="text/javascript"></script>

<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.2.pack.js"></script>

<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.1.js"></script>

<script type="text/javascript" src="js/stuHover.js"></script>

<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.1.css" media="screen" />

<!-- Example page styling (not required) -->

<link href="example.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
<!--

function validate_form ( )
{
    valid = true;
	
	if ( document.form1.name.value == "" )
    {
        alert ( "Please enter your name." );
        valid = false;
    }
	if ( document.form1.email.value == "" )
    {
        alert ( "Please enter your email." );
        valid = false;
    }
	if ( document.form1.phone.value == "" )
    {
        alert ( "Please enter your phone number." );
        valid = false;
    }
	if ( document.form1.comments.value == "" )
    {
        alert ( "Please enter your comments." );
        valid = false;
    }
	
    return valid;
}

//-->
</script>
<script>
  $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>

<script type="text/javascript">

$(document).ready(function () {

	$('#test').weatherfeed(['CAXX0223']);

});

</script>

<script type="text/javascript">

		$(document).ready(function() {

			/*

			*   Examples - images

			*/

			$("a#example0").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example1").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example2").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example3").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example4").fancybox({

				'titlePosition'	: 'inside'

			});



			$("a#example5").fancybox({

				'titlePosition'	: 'inside'

			});



			$("a#example6").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example7").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example8").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example9").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example10").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example11").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example12").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example13").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example14").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example15").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example16").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example17").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example18").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example19").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example20").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example21").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example22").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example23").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example24").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example25").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example26").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example27").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example28").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example29").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example30").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example31").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example32").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example33").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example34").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example35").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example36").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example37").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example38").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example39").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example40").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example41").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example42").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example43").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example44").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example45").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example46").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example47").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example48").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example49").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example50").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example51").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example52").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example53").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example54").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example55").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example56").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example57").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example58").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example59").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example60").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example61").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example62").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example63").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example64").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example65").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example66").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example67").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example68").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example69").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example70").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example71").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example72").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example73").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example74").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example75").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example76").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example77").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example78").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example79").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example80").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example81").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example82").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example83").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example84").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example85").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example86").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example87").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example88").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example89").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example90").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example91").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example92").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example93").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example94").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example95").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example96").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example97").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example98").fancybox({

				'titlePosition'	: 'inside'

			});

			$("a#example99").fancybox({

				'titlePosition'	: 'inside'

			});



			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});



			/*

			*   Examples - various

			*/



			$("#various1").fancybox({

				'titlePosition'		: 'inside',

				'transitionIn'		: 'none',

				'transitionOut'		: 'none'

			});



			$("#various2").fancybox();



			$("#various3").fancybox({

				'width'				: '75%',

				'height'			: '75%',

				'autoScale'			: false,

				'transitionIn'		: 'none',

				'transitionOut'		: 'none',

				'type'				: 'iframe'

			});



			$("#various4").fancybox({

				'width'				: '75%',

				'height'			: '75%',

				'autoScale'			: false,

				'transitionIn'		: 'none',

				'transitionOut'		: 'none',

				'type'				: 'iframe'

			});

		});

	</script>

</head>

<body>

<div id="header">

	<!-- jQuery handles to place the header background images -->

	<div id="headerimgs">

		<div id="headerimg1" class="headerimg"></div>

		<div id="headerimg2" class="headerimg"></div>

	</div>

	<!-- Top navigation on top of the images -->

	<div id="nav-outer">

		<div id="navigation">

			

			<div id="menu">
				<?php include 'navmenu.php'; ?>

			</div>

		</div>

	</div>

	

	<!-- Slideshow controls -->

	<div id="headernav-outer">

		<div id="headernav">

			<div id="back" class="btn"></div>

			<div id="control" class="btn"></div>

			<div id="next" class="btn"></div>

		</div>

	</div>

	<!-- jQuery handles for the text displayed on top of the images -->

	<div id="headertxt">

		<p class="caption">

			<span id="firstline"></span>

			<a href="#" id="secondline"></a>

		</p>

		<p class="pictured">

			Pictured:

			<a href="#" id="pictureduri"></a>

		</p>

	</div>

</div>

	<div id="brownnav-outer"><?php include 'icons.php'; ?></div>

<div id="content">

	<div align="center"><table width="977"><tr>

	  <td width="500"><div align="left">
				<span class='style3'><h1>PAYMENT OPTIONS</h1></span></div></td>

	  <td width="37">&nbsp;</td>

	  <td width="424"><div align="left"></div></td>

	</tr>

	    <tr>

	      <td class="style1"></td>

	      <td>&nbsp;</td>

	      <td valign="top">&nbsp;</td>
	    </tr>

	    <tr>

	      <td colspan="3" class="style1"><div align="left">We accept PayPal, certified cheque, money order or cash.<br />
<br />
<strong>Please note:</strong>&nbsp;Reservation down payment &amp; damage deposit-$500<br /></div></td>

      </tr>
	    <tr>
	      <td class="style1"><?php
		   $name = $_REQUEST['name'];
		   $email = $_REQUEST['email'];
		   $phone = $_REQUEST['phone'];
		   $comments = $_REQUEST['comments'];
		   $from = $_REQUEST['from'];
		   $todate = $_REQUEST['to'];
		   
		  
		   echo "Success! Your booking inquiry was sent. Thank you for contacting us!";
		   
		   $to = "info@kincardinecabins.com";
		   
			$subject = "Email from Kincardine Cabins Website";
			$body = "Greetings,\n\nA new message was received from the Kincardine Cabins website:\n\n";
			$body .= "Name: ";
			$body .= $name;
			$body .= "\n\nEmail: ";
			$body .= $email;
			$body .= "\n\nPhone: ";
			$body .= $phone;
			$body .= "\n\nComments: ";
			$body .= $comments;
			$body .= "\n\nRequested Date of Arrival: ";
			$body .= $from;
			$body .= "\n\nRequested Date of Departure: ";
			$body .= $todate;

			$headers = "From: info@kincardinecabins.com\r\n" .
			"X-Mailer: php";
			 if (mail($to, $subject, $body, $headers)) {
			   echo("&nbsp;");
			  } else {
			   echo("<p>Message delivery failed...</p>");
			  }
		  
		   
		   ?></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>
	    <tr>
	      <td class="style1">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
      </tr>

	</table>

	</div>

</div>

<div id="brownnav-outer">

  <?php include 'bottom.php'; ?>

</div>

<map name="sn">

  <area shape="rect" coords="28,5,57,43" href="#">

  <area shape="rect" coords="58,6,84,36" href="#">

  <area shape="rect" coords="83,4,111,36" href="#">

</map>

</body>

</html>
<?php
			}
else
		{
			die("You did not reach this page correctly.");
		}	
	}
	else
	{
			die("You did not reach this page correctly.");
	}
		?>