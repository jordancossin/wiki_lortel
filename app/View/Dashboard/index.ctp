<center>
<div class="row">
	<legend><h1 class="title">Tableau de bord Wiki-Lortel</h1></legend>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6">
			<fieldset>
				<legend><h2 class="subtitle">Fournisseurs</h2></legend>
				<table cellpadding="0" cellspacing="0">
					<thead>
					<tr>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<?php
					if(!empty($providers['Providers']))
					{
						foreach ($this->request->data['Providers'] as $provider)
						{
							echo
							'<tr>
								<td>'
									.$provider['Providers']['name'].
								'</td>
							</tr>';
						}	
					}
					?>
					</tbody>
				</table>
			</fieldset>
		</div>
		<div class="col-xs-6">
			<fieldset>
				<legend><h2 class="subtitle">Produits</h2></legend>
				<table cellpadding="0" cellspacing="0">
					<thead>
					<tr>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<?php
					if(!empty($products['Products']))
					{
						foreach ($this->request->data['Products'] as $product)
						{
							echo
							'<tr>
								<td>'
									.$product['Products']['name'].
								'</td>
							</tr>';
						}	
					}
					?>
					</tbody>
				</table>
			</fieldset>
		</div>
	</div>
</div>
</center>