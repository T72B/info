<div id='header'>
			<div class='wg4'>&nbsp;</div>
			<div class='wg12'>
				<div id="logo"></div>
				<div style="float:left;">
				<div id="logo_caption"><h1>Курсы валют на <span id="date">{$date}</span></h1><div id="logo_line"></div></div>
				</div>
				
			</div>
			<div class='wg4'>&nbsp;</div>
		</div>
		<div id='content'>
			<div class='wg4'>&nbsp;</div>
			<div class='wg12'>
				<div id="caption">{$caption}</div>
				<div id="body_res">
					<table id="result" cellspacing=0 align="center">
						<thead><tr id="thead"><td id="tcode">Код</td><td id="tcount">Количество</td><td id="tval">Валюта</td><td id="tres">Курс</td></tr></thead>
						<tbody>
							{if !$error_message}
							{assign var="i" value=1}
							{section name=ind loop=$massiv}
							
								<tr	{if $i eq 1} class="ftr" {assign var="i" value=0}{else} class="str"	{assign var="i" value=1}{/if}><td> {$massiv[ind][0]}</td>
								<td> {$massiv[ind][1]}</td>
								<td>{$massiv[ind][2]}</td>
								<td> {$massiv[ind][3]}</td></tr>
							{/section}
							{else}
								<tr><td colspan="4">{$error_message}</td></tr>
							{/if}
						</tbody>
					</table>
				</div>
			</div>
			<div class='wg4'>&nbsp;</div>
		</div>