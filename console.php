<script>
$(document).ready(function(){
        $(setInterval(function() {
        $('#consolebox').load('console/consoleData.php');
        }, 2000));
});
</script>
<script>
$(document).ready(function() {
	$('#consoleCommand').submit(function() {
		$.ajax({
			type: 'POST',
			url: 'console/consoleData.php',
			data: $('#consoleCommand').serialize(),
			success: function(data, textStatus, jqXHR) {
			},
			error: function(jqXHR, textStatus, errorThrown) {
			}
		});
	return false;
	});
});
</script>

<style>
#submitCommand {
        width: 100%;
        background-color: #999;
        border: 1px #000 solid;
}
#console {
	margin-left: 25px;
	width: 95%;
}
#consolebox {
	min-height: 400px;
	max-height: 550px;
        background-color: black;
        border: 1px solid #000;
        overflow-y: scroll;
        color: #00C919;
        padding: 3px;
        font-family: monospace;
}
</style>
<div id="console">
    <div id="consolebox">Loading...</div>
    <div id="submitCommand">
      <form id="consoleCommand" style="display:inline" method="POST" action="">
        <input type="text" name="consoleCommand" style="width: 99%; margin-left: 2px;" value="enter a command..." onClick="this.value=''"/>
      </form>
    </div>
</div>

