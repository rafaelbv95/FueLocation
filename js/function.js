function provincias() {
    var provincias = "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/Listados/Provincias/";
    var peticion = "provincias";
    ajax(provincias, peticion);

}

function municipio(params) {

    document.getElementById('square').innerHTML = "";

    if (params < 10) {
        params = "0" + params
    }
    var municipio = "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/Listados/MunicipiosPorProvincia/" + params
    var peticion = "municipio";

    ajax(municipio, peticion);


}

function gasolineras(params) {
    document.getElementById('square').innerHTML = "";
    var peticion = "gasolineras";
    var gasolineras = "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroMunicipio/" + params
    ajax(gasolineras, peticion);
}


function ajax(urlPeticion, peticion) {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: urlPeticion,
        crossDomain: true,

        success: function(json) {
            const gasolineras = json;


            if (peticion == "gasolineras") {

                if (gasolineras["ListaEESSPrecio"].length == 0) {
                    $("#square").append(
                        `<div id="flip" class="bg-primary"> <h1>Sin datos</h1></div>` +
                        `<div id="panel"  class="bg-primary"><h1>No existen gasolineras en este municipio</h1> </div>`

                    );
                    if (!$('#scriptDatos').length) {
                        var script = document.createElement('script');
                        script.id = "scriptDatos"
                        document.body.appendChild(script);
                        $("#scriptDatos").append(` 
                        $(document).ready(function(){
                            $("#flip").click(function(){
                                $("#panel").slideDown("slow");
                            });
                            });`);
                    }



                }

                for (let i = 0; i < gasolineras["ListaEESSPrecio"].length; i++) {


                    var nombre = gasolineras["ListaEESSPrecio"][i]["Rótulo"];
                    var diesel = gasolineras["ListaEESSPrecio"][i]["Precio Gasoleo A"];
                    var gasolina95 = gasolineras["ListaEESSPrecio"][i]["Precio Gasolina 95 E5"];
                    var direccion = gasolineras["ListaEESSPrecio"][i]["Dirección"];
                    var latitud = gasolineras["ListaEESSPrecio"][i]["Latitud"];
                    var longitud = gasolineras["ListaEESSPrecio"][i]["Longitud (WGS84)"];




                    $("#square").append(
                        `<a href="javascript:CargaScript(${i});" class="square  btn btn-primary text-center col-auto "> <h3>${nombre}</h3>
                         <p> Diesel: ${diesel}</p> <p>Gasolina 95: ${gasolina95} </p> <p>Dirección ${direccion}</p>
                         <input type="hidden"  id="latitud${i}" value="${latitud}">
                         <input type="hidden"  id="longitud${i}" value="${longitud}"></a>`

                    );
                }
                tamanyoRecuadro(3);
            } else {


                for (const x of json) {

                    if (peticion == "provincias") {

                        var IDPovincia = x.IDPovincia;
                        var IDCCAA = x.IDCCAA;
                        var Provincia = x.Provincia;


                        $("#square").append(
                            `<a href="javascript:municipio(${IDPovincia});" class="square  btn btn-primary text-center col-auto ">${Provincia}</a>`

                        );

                    }
                    if (peticion == "municipio") {

                        var IDMunicipio = x.IDMunicipio;
                        var IDCCAA = x.IDCCAA;
                        var municipio = x.Municipio;
                        var IDMunicipio = x.IDMunicipio;




                        $("#square").append(
                            `<a href="javascript:gasolineras(${IDMunicipio});" class="square  btn btn-primary text-center col-auto ">${municipio}</a>`

                        );

                    }

                }

                tamanyoRecuadro(7);
                busqueda();

            }


        },
        error: function(xhr, status) {


            console.log("error");

        },
    });

}

function tamanyoRecuadro(params) {
    var height = $(window).height() / params;
    $('.square').css('height', height);
    $('.square').css('width', height);
};




function CargaScript(id) {

    if (!$('#apiGoogleMap').length) {
        var script = document.createElement('script');
        script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=inicializar';
        script.id = "apiGoogleMap"
        document.body.appendChild(script);


    }


    if ($('#idMapa').length) {
        var idM = parseFloat(id);
        $('#idMapa').removeAttr("value");
        $('#idMapa').attr("value", `${idM}`);
        inicializar();


    } else {

        $("#idmap").append(
            `<input type="hidden"  id="idMapa" value="${id}">`
        );
    }


}


function inicializar() {

    var idMapa = parseInt($("#idMapa").val());
    var latitud = $("#latitud" + idMapa).val();
    var longitud = $("#longitud" + idMapa).val();
    latitud = parseFloat(latitud.replace(/,/g, '.'));
    longitud = parseFloat(longitud.replace(/,/g, '.'));

    console.log(latitud);
    console.log(longitud);

    $("style").remove();
    $("#map").innerHTML = "";

    //Opciones del mapa
    var coord = { lat: latitud, lng: longitud };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: coord
    });



    //Añadimos el marcador
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });

    var height = $(window).height();

    $('html, body').animate({
        scrollTop: $("#map").offset().top
    }, 500);

}

function iniciar() {
    $(".iniciar").animate({ "opacity": "1" }, 2000);

}

function busqueda() {

    if (!$('#buscarDatos').length) {
        var script = document.createElement('script');
        script.id = "buscarDatos"
        document.body.appendChild(script);
        $("#buscarDatos").append(` 
        $(document).ready(function(){
            $("#buscar").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#square a").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });`);
    }


}