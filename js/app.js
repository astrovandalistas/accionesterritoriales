$(document).foundation();


      var siglas = Array(
        "Internet", "Censura", "Facebook", "No fue penal"

      );

      var palabras1 = Array(
        'Agencia',
        'Secretaría',
        'Comisión',
        'Consejo',
        'Despacho',
        'Internet',
        'Departamento'
      );

      var palabras2 = Array(
        'Rescate',
        'Conservación',
        'Reapropiación',
        'Reestructuración',
        'Validificación'      
      );

      var palabras3 = Array(
        'Espacio Público Intangible',
        'Sistemas Sociales',
        'Tecnologías Obsolescentes',
        'Aplicación de Medidas',
        'Trámites y Permisos'      
      );


      function cambiarTitulo() {
        
        var sigla = siglas[Math.floor(Math.random()*siglas.length)];
        var palabra1 = palabras1[Math.floor(Math.random()*palabras1.length)];
        var palabra2 = palabras2[Math.floor(Math.random()*palabras2.length)];
        var palabra3 = palabras3[Math.floor(Math.random()*palabras3.length)];
        
        $('#siglas h1').html( sigla );

        $('#cabecera #titulo h5').html( palabra1 + " de " + palabra2 +   " del " + palabra3 );

      }

      $(document).ready(function(){
        
        console.log("ct");

        cambiarTitulo();

        setInterval( function() { cambiarTitulo(); }, 2000);



        $('#bullets').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: true
        });



      });


