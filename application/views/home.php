<div id="dlg_contact" style="display:none;">
	<form name="frm_contact" id="frm_contact" action="<?php echo site_url("home/submit"); ?>" method="POST">
		<div class="header">
			<div class="title">Contact Form</div>
		</div>
		<div class="field">
			<span class="label">Firstname:</span>
			<span class="input">
				<input type="text" name="firstname" id="firstname" />
			</span>
			<?php echo form_error('firstname', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<span class="label">Lastname:</span>
			<span class="input">
				<input type="text" name="lastname" id="lastname" />
			</span>
			<?php echo form_error('lastname', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<span class="label">Address:</span>
			<span class="input">
				<input type="text" name="address" id="address" />
			</span>
			<?php echo form_error('address', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<span class="label">City:</span>
			<span class="input">
				<input type="text" name="city" id="city" />
			</span>
			<?php echo form_error('city', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<span class="label">State:</span>
			<span class="input">
				<input type="text" name="state" id="state" />
			</span>
			<?php echo form_error('state', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<span class="label">Zip:</span>
			<span class="input">
				<input type="text" name="zip" id="zip" />
			</span>
			<?php echo form_error('zip', '<span class="error">', '</span>'); ?>
		</div>
		<div class="field">
			<input type="button" value="Submit" id="btn_submit" /> 
			<input type="button" value="Cancel" id="btn_cancel" />
		</div>
	</form>
</div>

<div>
	<div id="grid_rules"></div>
	<div id="popUp" style="display:none;">
	</div>
</div>

<script type="text/javascript">
	$(function(){
		<?php if(!isset($contact)): ?>
			$("#dlg_contact").hide();
		<?php else: ?>
			$("#dlg_contact").show();
		<?php endif; ?>
		$("#grid_rules").flexigrid({
			title : "Contacts" , 
			dataType: 'json',
			url : '<?php echo base_url()?>home/getAll',
			colModel : [
				{display: 'ID', name: 'contact_id', width: 40, sortable: true},
				{display: 'Name', name: 'contact_name', width: 200, sortable: true},
				{display: 'Address', name: 'address', width: 200, sortable: true},
				{display: 'City', name: 'city', width: 150, sortable: true},
				{display: 'State', name: 'state', width: 150, sortable: true},
				{display: 'Zip', name: 'zip', width: 50, sortable: true},
			],
			buttons : [
				{ name : "Add", bclass : "add", onpress : button_actions },
			],
			searchitems : [
				{display : "Name", name : 'CONCAT(IFNULL(a.lastname, ""), ", ", IFNULL(a.firstname, "")) ' , isdefault: true},
				{display : "Address", name : 'address'},
				{display : "City", name : 'city'},
				{display : "State", name : 'state'},
				{display : "Zip", name : 'zip'},
			],
			sortname : "contact_id",
			sortorder: "asc",
			usepager : true,
			useRp : true,
			
		});
		
		//bind events
		$("#btn_submit").bind("click", function(){
			//validate if all inputs has values
			var form_valid = true;
			$("#frm_contact input[type='text']").each(function(){
				if($(this).val() == ''){
					$(this).addClass('error');
					form_valid = false;
				}
				else{
					if($(this).hasClass("error")){
						$(this).removeClass("error");
					}
				}
			});
			if(form_valid){
				//submit form
				$("#frm_contact").submit();
			}
			else{
				alert('All fields are required.');
				return false;
			}
		});

		$("#btn_cancel").bind("click", function(){
			$("#frm_contact input[type='text']").each(function(){
				$(this).val('');
				if($(this).hasClass("error")){
					$(this).removeClass("error");
				}
				$("#dlg_contact").hide();
			});

		});
	});

	function button_actions(com,grid){
		switch(com){
			case "Add":
				$("#dlg_contact").show();
			break;
		}
	}
</script>