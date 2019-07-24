<!DOCTYPE html ">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	
	<link rel='stylesheet' href="{{ asset('css/print.css') }}" media="print" />
	<script src="{{ asset('js/jquery.min.js') }}" defer></script>
	<script src="{{ asset('js/example.js') }}" defer></script>
	

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">अनुसूची -९
		नियम १८ को उपनियम ( १) को खण्ड (ग) , नियम ३९ को उपनियम १ को खण्ड (ङ)   नियम ६० को उपनियम (१) को खण्ड (  ङ)  संग सम्बधित 
		</textarea>
		<h1 id="name_munacipality"> उत्तरगया गाउपालिका</h1>
		<div id="identity">
		
       <textarea id="address"> ३ न. वडा कार्यलय  भगेरी रसुवा
			३ न. प्रदेश नेपाल 
	   </textarea>
			<h2 id="invoice_receipt"> आम्दानी रसिद</h2>
            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title"> Customer Name</textarea>
			<textarea id="customer-title"> </textarea>
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>वापत</th>
		      <th>आम्दानी संकेत नम्बर</th>
		      <th>खा. पा. न</th>
			  <th> प्रति मुल्य</th>
		      <th>परिमाण</th>
		      <th>मूल्य</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
		      <td><textarea class="cost">$650.00</textarea></td>
			  <td><textarea class="cost">$650.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">$650.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">$75.00</textarea></td>
			  <td><textarea class="cost">$75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">$225.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="6"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
			 
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		  <tr>
		      <td class="total-line"> Amount in Words </td>
			<td colspan="5" class="description"><textarea>Rs Two thousand only</textarea></td>
		   </tr>
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
	
</body>

</html>