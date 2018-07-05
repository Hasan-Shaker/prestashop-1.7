{*
 * PostFinance Checkout Prestashop
 *
 * This Prestashop module enables to process payments with PostFinance Checkout (https://www.postfinance.ch).
 *
 * @author customweb GmbH (http://www.customweb.com/)
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
*}
<div class="tab-pane" id="postfinancecheckout_documents">
<h4 class="visible-print">PostFinance Checkout {l s='Documents' mod='postfinancecheckout'} <span class="badge">({$postFinanceCheckoutDocuments|@count})</span></h4>

	<div class="table-responsive">
		<table class="table" id="postfinancecheckout_documents_table">
			<tbody>
				{foreach from=$postFinanceCheckoutDocuments item=document}
					<tr>
						<td><a class="_blank" href="{$document.url|escape:'html':'UTF-8'}"><i class="icon-{$document.icon} postfinancecheckout-document"></i><span>{$document.name}<pan></a>
						</td>
					</tr>
				{foreachelse}
					<tr>
						<td colspan="1" class="list-empty">
							<div class="list-empty-msg">
								<i class="icon-warning-sign list-empty-icon"></i>
								{l s='There is no document availabe yet.' mod='postfinancecheckout'}
							</div>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>

</div>