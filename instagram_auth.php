<!DOCTYPE HTML>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<title>Instagram Authentication</title>
    	<script type="text/javascript">
    		//using php to look for the error parameter in the URL
    		if(<?php echo isset(intval($_GET['error'])); ?>) {
				self.close();
			}
    	</script>
    </head>
    <body>
    </body>
</html>
