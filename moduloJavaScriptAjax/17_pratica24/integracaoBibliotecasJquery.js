$(document).ready(function(){ 
    $(function () {
        $("#acordeao").accordion();
    });
    
    $(function () {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
    
    
    $(function () {
        $("#acordeao").draggable();
    });
    
    $("#abanar").click(function () {
        $("#acordeao").effect("shake", "slow");
    });
});