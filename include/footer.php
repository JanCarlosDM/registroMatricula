<?php

?>

<script src="js/jquery.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/auto.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
<script>

$(document).ready( function () {
    $('#Usuarios').DataTable({

        language:{
            url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
        }


    });
} );


$(document).ready( function () {
    $('#Servicios').DataTable({

        language:{
            url: 'https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json'
        }


    });
} );
</script>
    


</body>

</html>