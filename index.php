   <html>
    <head>
    <title> Hello! </title>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    //Set content to text/html
    <meta name='txtweb-appkey' content='1056fa84-f023-4a62-978b-cf345fb16c2a' />
    //Service Key
    </head>
    <body>
    <?php
	require("dom.php");
	if(isset($_GET['txtweb-message']))     $message = $_GET['txtweb-message']; 
	$msg = explode(" ", $message);
            print "Thanks & Welcome to Baby World..";
	    exit;
	if($msg[0]=='boy'){   
		$string="http://www.hindunames.net/baby.php?gender=$msg[0]";
		echo $string;
		$doc=@file_get_contents($string); 
		print_r($doc);
		$header_text = substr($doc,9000,800000);
		$doc1 = new DOMDocument();
		@$doc1->loadHTML($header_text);
		$xpath = new DOMXPath($doc1);
		$tables = $doc1->getElementsByTagName('table');

		$nodes  = $xpath->query('.//tbody/tr/td/b', $tables->item(2));
		print_r($nodes->item(0)->nodeValue);
		
	}
	
	   
    ?>
    </body>
    </html>
