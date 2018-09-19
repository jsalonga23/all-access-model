var AdministratorProducts = {
	WebsiteUrl: null,
	callActions:function($action) 
	{		
		var urlPathAddToCart = AdministratorProducts.WebsiteUrl + "";
		var FormId = this.selectOptionValue[2];
		$('#txtOptionPrice_'+FormId).val(0);
		
		$.ajax({
			type: "POST",
			url: urlPathAddToCart,
			data: $('#formDId').serializeArray(),
			dataType: "json",
			success: function(data)
			{
				if (data.status)
				{
				
				}
				else 
				{
					
				}
			},
			error: function()
			{
				
			}
		})
			
	},
	displayAlert:function()
	{
		alert(AdministratorProducts.WebsiteUrl);
	},
	callDelete:function(action,rowId)
	{	
		if (action =="delete")
		{
			alert(rowId);	
		}
		
	}
	
	
  	
}

