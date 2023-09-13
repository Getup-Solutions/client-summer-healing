
<table border="0" cellpadding="0" cellspacing="0" align="center"
	bgcolor="#eee" width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">

	<tr>
		<td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
			padding-top: 25px;
			color: #000000;
			font-family: sans-serif;" class="header">
				You received an email from {{ $name }}
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
			<h4>User details:</h4>
			<p>Name:  {{ $name }}</p>
            <p>Email:  {{ $email }}</p>
            <p>Phone:  {{ $phone }}</p>
            <p>Subject:  {{ $subjecttext }}</p>
            <p>Message:  {!! $messagetext !!}
		</td>
	</tr>
    <tr>
        <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%; 	padding-top: 25px; 	color: #000000;font-family: sans-serif;" class="paragraph">
            <p>
                <strong>
                     Summer healing
                </strong>
            </p>
        </td>
    </tr>

	
	

		</table></td>
	</tr>

</table>


