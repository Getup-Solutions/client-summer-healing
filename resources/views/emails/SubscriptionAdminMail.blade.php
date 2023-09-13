
<table border="0" cellpadding="0" cellspacing="0" align="center"
	bgcolor="#eee" width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">

	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="header">
				{{$details['username']}} successfully purchased the {{$details['title']}} subscription.
		</td>
	</tr>
	
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-bottom: 3px; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 18px; font-weight: 300; line-height: 150%;
			padding-top: 5px;
			color: #000000;
			font-family: sans-serif;" class="subheader">
				With the following details.
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%; 	padding-top: 25px; 	color: #000000;font-family: sans-serif;" class="paragraph">
				<p>Email: {{$details['useremail']}} </p>
				<p>Name: {{$details['username']}} {{$details['userlname']}}</p>
				<p>Plan: {{$details['title']}} </p>
				<p>Price: {{$details['price']}} </p>
				<p>Interval: {{ ucfirst($details['interval']) }} </p>
				<p>Started on: {{$details['start_date']}} </p>
				<p>Ends on: {{$details['next_date']}} </p>
				<p>Transaction Id: {{$details['transaction_id']}} </p>
				<p>Card: {{$details['card']}} </p>
				<p>Status: {{$details['status']}} </p>

		</td>
	</tr>
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%; 	padding-top: 25px; 	color: #000000;font-family: sans-serif;" class="paragraph">
            <p>
                <strong>
                    Thank you,<br/>
                    team, Summer healing
                </strong>
            </p>
        </td>
    </tr>

	
	

		</table></td>
	</tr>

</table>


