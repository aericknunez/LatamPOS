<?php 
include_once 'body/modalSelectPlan.php';

if($_SESSION["pselect"] != NULL and $_SESSION["plan_id"] == NULL and $_SESSION["plan_type"] == NULL){ ?>

    <script>
      function LanzaModalSelectPlan() {
        $('#modalSelectPlan').modal('show');
      }
      LanzaModalSelectPlan();
    </script> 


<?php 

}
?>