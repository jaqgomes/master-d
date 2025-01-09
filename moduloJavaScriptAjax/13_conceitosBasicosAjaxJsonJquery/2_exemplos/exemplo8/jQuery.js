function informacionChecks() {
    $("input:checkbox").each(function () {
        if ($(this).is(':checked')) {
            alert($(this).val());
        }
    });
}