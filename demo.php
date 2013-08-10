<?php include("header2.php");?>
<section id="content-wrapper" class="no-bottom-borders">
	
	        <header class="clearfix">
<div style="background:url(images/aboutus.png) no-repeat;height:60px;line-height:30px;font-size:18px;padding:5px;">Contact Us</div>	

<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('tests@html-form-guide.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

If you have lot of question, idea, or just wanted to describe about your events we are always happy to talk to you.

<br/>
<br/>
<strong>For General enquiries:</strong><br/>
<br/>
Phone : +91-95905 64499, 080-25440592<br/>

You can contact us at any of the following numbers from 10 a.m. to 6 p.m. on weekdays.<br/>
<br/>
<strong> Corporate / Registered Office:</strong><br/><br/># 82/3 Channakya layout,<br/> arabic college post,<br/>
opp to manatya tech park<br/>
Nagawara Ring road<br/>Bangalore-560045.<br/><br/>
<table>
<tr><td width="250"><strong>For Mannequin and design query:</strong><br/><br/>
<strong>Ph:</strong> +91-9590564499, 080-25440592<br/>
<strong>Email :</strong> bhoomikamannequin@gmail.com 
</td><td width="250">
<strong>For any wedding / Events query:</strong><br/><br/>
<strong>Ph:</strong> +91-9590564499, 080-25440592<br/>
<strong>Email :</strong> bhoomikawedding@gmail.com
</td><td width="250">
<strong>For Art / Murals/Sculpture query:</strong><br/><br/>
<strong>Ph:</strong> +91-9590564499, 080-25440592<br/>
<strong>Email :</strong> bhoomikaarts@gmail.com
</td></tr>
</table>
</section>

<?php include("footer.php");?>