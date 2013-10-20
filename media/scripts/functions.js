function dialog(message,messageType,callback){
	//create div element for dialog
	var dBox = document.createElement("div");
	var title = "Message";
	var icon = "information";
	var btns = {};
	switch(messageType){
		case "warning":
			icon = "warning";
			title = "Warning";
			btns["OK"] = function(){ 
				$(this).dialog('close');
				$(this).remove();
			};
		break;
		case "error": 
			icon = "error";
			title = "Error";
			btns["OK"] = function(){ 
				$(this).dialog('close');
				$(this).remove();
			};
		break;
		case "confirm":
			icon = "question";
			title = "Confirm";
			btns["Yes"] = function(){
				callback();
				$(this).dialog('close');
				$(this).remove();
			};
			btns["No"] = function(){
				$(this).dialog('close');
				$(this).remove();
			}
		break;
		case "message":
		default:
			btns["OK"] = function(){ 
				$(this).dialog('close');
				$(this).remove();
			};
			icon = "information";
		break; 
	}
	//build html for dialog
	html = "";
	html = "<div class='messageBox'><div class='icon "+icon+"'></div><div class='message'>"+message+"</div></div>";
	$(dBox).html(html);

	$(dBox).dialog({
		modal: true,
		title: title,
		resizable : false,
		buttons: btns,
		closeOnEscape: false,
   		open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); },
   		close: function(event, ui) {$(".ui-dialog-titlebar-close").show(); }
	});
}