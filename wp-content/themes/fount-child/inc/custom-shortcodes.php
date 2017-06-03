<?php

// Side By Side Pricing Table

function side_by_side_pricing(){
return <<<HTML
<div style="overflow-x:auto;">
<h2 class="table-heading">Sunday - Friday</h2>
<strong>Price is per side-by-side</strong>
<table class="pricing-table">
    <tr>
        <th>Time</th>
        <th>Ace 500<br/>1 Person</th>
        <th>RZR 2 570<br/>2 Person</th>
        <th>RZR 2 900<br/>2 Person</th>
        <th>RZR 4 900<br/>4 Person</th>
        <th>RANGER 6 900<br/>6 Person</th>
        <th>*Damage Waiver</th>
    </tr>
    <tr>
        <td>1 Hour</td>
        <td>$75</td>
        <td>$99</td>
        <td>$129</td>
        <td>$149</td>
        <td>$149</td>
        <td>$9</td>
    </tr>
    <tr class="special">
        <td>2 Hours</td>
        <td>$99</td>
        <td>$129</td>
        <td>$159</td>
        <td>$179</td>
        <td>$169</td>
        <td>$15</td>
    </tr>
    <tr>
        <td>4 Hours</td>
        <td>$200</td>
        <td>$230</td>
        <td>$290</td>
        <td>$300</td>
        <td>$290</td>
        <td>$19</td>
    </tr>
    <tr>
        <td>8 Hours</td>
        <td>$310</td>
        <td>$350</td>
        <td>$450</td>
        <td>$460</td>
        <td>$430</td>
        <td>$39</td>
    </tr>
    <tr>
        <td>24 Hours</td>
        <td>$410</td>
        <td>$450</td>
        <td>$550</td>
        <td>$560</td>
        <td>$530</td>
        <td>$50</td>
    </tr>
</div>
<div style="overflow-x:auto;">
</table>
<h2 class="table-heading">Saturday and Holiday Rates</h2>
<table class="pricing-table">
    <tr>
        <th>Time</th>
        <th>Ace 500<br/>1 Person</th>
        <th>RZR 2 570<br/>2 Person</th>
        <th>RZR 2 900<br/>2 Person</th>
        <th>RZR 4 900<br/>4 Person</th>
        <th>RANGER 6 900<br/>6 Person</th>
        <th>*Damage Waiver</th>
    </tr>
     <tr>
        <td>1 Hour</td>
        <td>$85</td>
        <td>$109</td>
        <td>$139</td>
        <td>$159</td>
        <td>$159</td>
        <td>$9</td>
    </tr>
    <tr class="special">
        <td>2 Hours</td>
        <td>$130</td>
        <td>$150</td>
        <td>$189</td>
        <td>$189</td>
        <td>$185</td>
        <td>$15</td>
    </tr>
    <tr>
        <td>4 Hours</td>
        <td>$220</td>
        <td>$250</td>
        <td>$299</td>
        <td>$320</td>
        <td>$310</td>
        <td>$19</td>
    </tr>
    <tr>
        <td>8 Hours</td>
        <td>$330</td>
        <td>$370</td>
        <td>$450</td>
        <td>$480</td>
        <td>$450</td>
        <td>$39</td>
    </tr>
    <tr>
        <td>24 Hours</td>
        <td>$430</td>
        <td>$470</td>
        <td>$550</td>
        <td>$600</td>
        <td>$550</td>
        <td>$50</td>
    </tr>
</table>
<p class="special-pricing"><span class="yellow-circle"></span> Special pricing!</p>
</div>

HTML;
    }

// Snowmobile Pricing Table

function snowmobile_pricing(){
return <<<HTML
<div style="overflow-x:auto;">
<h2 class="table-heading">Sunday - Friday</h2>
<table class="pricing-table">
    <tr>
        <th>Time</th>
        <th>Single</th>
        <th>Double</th>
        <th>Triple</th>
        <th>RZR4</th>
        <th>*Damage Waiver</th>
    </tr>
    <tr>
        <td>1 Hour</td>
        <td>$55</td>
        <td>$75</td>
        <td>$85</td>
        <td>$125</td>
        <td>$9</td>
    </tr>
    <tr>
        <td>2 Hours</td>
        <td>$95</td>
        <td>$115</td>
        <td>$125</td>
        <td>$200</td>
        <td>$15</td>
    </tr>
    <tr class="special">
        <td>4 Hours</td>
        <td>$99</td>
        <td>$129</td>
        <td>$149</td>
        <td>$325</td>
        <td>$19</td>
    </tr>
    <tr>
        <td>8 Hours</td>
        <td>$185</td>
        <td>$205</td>
        <td>$225</td>
        <td>N/A</td>
        <td>$39</td>
    </tr>
    <tr>
        <td>24 Hours</td>
        <td>$260</td>
        <td>$280</td>
        <td>$300</td>
        <td>N/A</td>
        <td>$50</td>
    </tr>
</div>
<div style="overflow-x:auto;">
</table>

<h2 class="table-heading">Saturday and Holiday Rates</h2>
<table class="pricing-table">
    <tr>
        <th>Time</th>
        <th>Single</th>
        <th>Double</th>
        <th>Triple</th>
        <th>RZR4</th>
        <th>*Damage Waiver</th>
    </tr>
    <tr>
        <td>1 Hour</td>
        <td>$65</td>
        <td>$95</td>
        <td>$105</td>
        <td>$145</td>
        <td>$9</td>
    </tr>
    <tr>
        <td>2 Hours</td>
        <td>$105</td>
        <td>$135</td>
        <td>$145</td>
        <td>$250</td>
        <td>$15</td>
    </tr>
    <tr>
        <td>4 Hours</td>
        <td>$160</td>
        <td>$190</td>
        <td>$200</td>
        <td>$375</td>
        <td>$19</td>
    </tr>
    <tr>
        <td>8 Hours</td>
        <td>$205</td>
        <td>$250</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>$39</td>
    </tr>
    <tr>
        <td>24 Hours</td>
        <td>$280</td>
        <td>$300</td>
        <td>N/A</td>
        <td>N/A</td>
        <td>$50</td>
    </tr>
</table>
</div>

<p class="special-pricing"><span class="yellow-circle"></span> Special pricing!</p>

HTML;
	}

	add_shortcode( 'snowmobile_pricing', 'snowmobile_pricing' );
	add_shortcode( 'side_by_side_pricing', 'side_by_side_pricing' );

?>