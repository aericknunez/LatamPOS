<script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID ?>&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '<?php echo $_SESSION["plan_precio"] ?>'
                  }, 

              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              // alert('Transaction completed by ' + details.payer.name.given_name + '!');              
              AddCliente(details);
          });
      }
  }).render('#paypal-button-container');



    function AddCliente(details) { /// agrega los datos a la base de datos
       
        var iden = details.id;
        var create_time = details.create_time;
        var status = details.status;
        var pnombre = details.payer.name.given_name;
        var papellido = details.payer.name.surname;
        var monto = details.purchase_units[0].amount.value;
        var link = details.links[0].href;
        var dataString = 'iden='+iden+'&status='+status+'&create_time='+create_time+'&pnombre='+pnombre+'&papellido='+papellido+'&monto='+monto+'&link='+link;

        $.ajax({
            type: "POST",
            url: "body/includes/adddatos.php?op=2",
            data: dataString,
            beforeSend: function () {
               $("#order_review").html('<div class="row justify-content-center" ><h1>Por favor espere...</h1></div>');
            },
            success: function(data) {            
                $("#order_review").html(data); // lo que regresa de la busquea 
            }
        });

        console.log(details);
    }



</script>