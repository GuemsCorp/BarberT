$("form").submit(event => { 
    event.preventDefault(); // J'empêche le comportement par défaut de l'événement. Ici la soumission du formulaire recharge la page

    $.ajax({
        url: "reservations.php", 
        type: "POST",
        dataType: "json", 
        data: { 
            date: $("#date").val(),
            hours: $("#hours").val(),
            service: $("#service").val()
        },
        success: (res) => {
            if (res.success) window.location.replace("index.php");
            else alert(res.error);
        }
    });
});