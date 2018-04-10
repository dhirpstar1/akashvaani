<script type="text/javascript" src="https://www.akashvaani.com/assets/astrology/js/jquery-3.1.1.min.js"></script>
<body>loading...</body>
<script type="text/javascript">
$( document ).ready(function(){
$('<form method="post" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"><input type="hidden" name=encRequest value="<?php echo html_entity_decode($encrypted_data, ENT_QUOTES, "utf-8");?>"><input type="hidden" name="access_code" value="<?php echo $access_code; ?>"></form>').appendTo('body').submit();
});
</script>
