<?php
// Sessão
session_start();
if(isset($_SESSION['message'])): ?> 

<script>
// MensageMater
   window.onload = function() {
         M.toast({html: '<?php echo $_SESSION['message']; ?>'});
   };  
</script>

<?php
endif;
session_unset();
?>