$(function () {

    var invitados = [
        "Maite, Xabi y Uxue",
        "Gemma y Jose Luis",
        "Lupe y Fidel",
        "Peio, Nerea, Alazne e Izei",
        "Iñigo, Natalia, Unax y Maite",
        "Aitor, Itziar, Iker y Ane",
        "Rosa",
        "Elena",
        "Margari y Eduardo",
        "Lucía",
        "Eduardo",
        "Amaya, Jesús e hijas",
        "Amador, Marian y Aimar",
        "Julio y Ana",
        "Iban y Ainara",
        "Iñaki y Virginia",
        "Patxi y Ana",
        "Xabi y Miryam",
        "077 105 103 117 101 108 y Tania",
        "Alberto e Irene",
        "Raúl y Oskia",
        "Iker",
        "Alvarito",
        "Iñigo y Cris",
        "Jorge y Lorena",
        "Jorge y Ainhoa",
        "Iñaki e Ilargi",
        "Oscar e Itziar",
        "Patxi y Rebeca",
        "Mikel y Sonia",
        "Jesús y Sandra",
        "Mª Jesús e Hilario",
        "Manuela",
        "Ruthi y Javier",
        "David",
        "Coral, Ion y Unai",
        "Pili y Eduardo",
        "Luis Eduardo",
        "Javier, Fátima, Miriam y Mateo",
        "Nuria, Javi, Marcos y María",
        "David",
        "Socorro y José",
        "Mariam",
        "Antonio y Mari",
        "Pascual",
        "Andrés",
        "Carlos",
        "Dani",
        "Jotas",
        "Leticia",
        "María y Borja",
        "Carmen y Eneko",
        "Nuin",
        "Fran e Isa",
        "Leyre y Alberto",
        "Maite y Alberto",
        "Bea y Manuel",
        "Andrea y Julio",
        "Iratxe",
        "Cris",
        "Gara",
        "Pezo",
        "Bea",
        "Silvi",
        "Yaben",
        "Adri",
        "Westh"
    ];
    $("#tags").autocomplete({
        source: invitados,
        autoFocus: true,
        focus: function (event, ui) {
             if (ui.content.length == 1){
                 $(this).val(ui.item.value);
             }
            
        }
    });

}
);


function getClassforrobby() {
    $chicassolas = [
        "Rosa",
        "Elena",
        "Lucía",
        "Manuela",
        "Mariam",
        "Iratxe",
        "Cris",
        "Gara",
        "Pezo",
        "Bea",
        "Silvi",
        "Yaben",
        "Adri",
        "Westh"];
    $chicossolos = [
        "Eduardo",
        "Iker",
        "Alvarito",
        "David",
        "Pascual",
        "Andrés",
        "Carlos",
        "Dani",
        "Jotas",
        "Nuin",
        "Luis Eduardo"
    ];
    $parejas = [
        "Gemma y Jose Luis",
        "Lupe y Fidel",
        "Margari y Eduardo",
        "Amaya, Angel e hijas",
        "Sara, Mikel e hijos",
        "Julio y Ana",
        "Iban y Ainara",
        "Iñaki y Virginia",
        "Patxi y Ana",
        "Xabi y Miryam",
        "Miguel y Tania",
        "Alberto e Irene",
        "Raúl y Oskia",
        "Iñigo y Cris",
        "Jorge y Lorena",
        "Jorge y Ainhoa",
        "Iñaki e Ilargi",
        "Oscar e Itziar",
        "Patxi y Rebeca",
        "Mikel y Sonia",
        "Jesús y Sandra",
        "Mª Jesús e Hilario",
        "Ruthi y Javier",
        "Pili y Eduardo",
        "Socorro y José",
        "Antonio y Mari",
        "María y Borja",
        "Carmen y Eneko",
        "Fran e Isa",
        "Leyre y Alberto",
        "Maite y Alberto",
        "Bea y Manuel",
        "Andrea y Julio"
    ];
    $parejaconnina = [
        "Maite, Xabi y Uxue"
    ];
    $parejaconnino = [
        "Coral, Ion y Unai",
        "Amador, Marian y Aimar"
    ];
    $parejacondos = [
        "Peio, Nerea, Alazne e Izei",
        "Iñigo, Natalia, Unax y Maite",
        "Aitor, Itziar, Iker y Ane",
        "Javier, Fátima, Miriam y Mateo",
        "Nuria, Javi, Marcos y María"
    ];
    var elegido = jQuery('#tags').val();
    var clase = "";
    if ($chicassolas.indexOf(elegido) >= 0)
        clase = "chicasola";
    else if ($chicossolos.indexOf(elegido) >= 0)
        clase = "chicosolo";
    else if ($parejacondos.indexOf(elegido) >= 0)
        clase = "parejacondos";
    else if ($parejaconnina.indexOf(elegido) >= 0)
        clase = "parejaconnina";
    else if ($parejaconnino.indexOf(elegido) >= 0)
        clase = "parejaconnino";

    jQuery("#robby-slides").removeClass("chicasola").removeClass("chicosolo");
    jQuery("#robby-slides").removeClass("parejaconnina").removeClass("chicasola").removeClass("chicasola");
    jQuery("#robby-slides").addClass(clase);

    console.log(clase);

    ga('send', {
        hitType: 'event',
        eventCategory: 'Invitado',
        eventAction: elegido,
        eventLabel: elegido
    });
}