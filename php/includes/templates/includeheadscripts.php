<script>
	$(function() {
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: {
				effect: "blind",
				duration: 800
			},
			hide: {
				effect: "blind",
				duration: 800
			}
		});
		$( "#opener" ).click(function() {
			$( "#dialog" ).dialog( "open" );
		});
	});
</script>
<script>
	$(function() {
		$( "#manageEPC" ).dialog({
			position:{
				my:"left+135 top+70", at:"left bottom", of:"#layoutmenu",
			},
			height: 600,
			width: 800,
			autoOpen: false,
			show: {
				effect: "blind",
				duration: 800
			},
			hide: {
				effect: "blind",
				duration: 800
			}
		});
		$( "#selectEPC" ).click(function() {
			$( "#manageEPC" ).dialog( "open" );
		});
	});
</script>
<script>
	$(function() {
		$( "#manageEPC" ).dialog({
			position:{
				my:"left+135 top+70", at:"left bottom", of:"#layoutmenu",
			},
			height: 600,
			width: 800,
			autoOpen: false,
			show: {
				effect: "blind",
				duration: 800
			},
			hide: {
				effect: "blind",
				duration: 800
			}
		});
		$( "#selectEPC2" ).click(function() {
			$( "#manageEPC" ).dialog( "open" );
		});
	});
</script>
<script>
var accept = document.getElementByID("manage_evidence" ).style.background='#007c09';//document.getElementById( 'manage_evidence_list_item' );
	accept.onclick = function() {
	if (this.('background') == '#007c09'||'#ff0000'
		{this.('background') == '#FFFFFF'}
	);
	else if(this.('background') == '#007c09');
	};
</script>
<script>
function accept(){

}
var delete = document.getElementByClassName("manage_evidence" );
	delete.onclick = function() {
	if (this.style.background == 'green'|| 'red'
		{this.style.background == 'white'}
	);
	else if(this.style.background == 'red');
	};
</script>
<script>
	$(function() {
		$( "#selectable" ).selectable({filter:"li"});
	});
</script>
<script>
	$(function() {
<!--  		$( "#accordion" ).accordion();-->
$(".accordion").accordion({ collapsible: true, heightStyle: "content", header: "h3" });d		

		});
</script>
<!--
 <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>
  <style>
  .ui-menu { width: 50px; }
  </style>
  

<script>
	jQuery(document).ready(function()
{
	jQuery("#breadCrumb").jBreadCrumb();
})	
</script>-->
