<?php
include "../php/navbar.php";
 ?>
    <div class="container" id="content"></div>
    <script>
    $(document).ready(function(){
      $.ajax({
          url: "../xml/filmak.xml",
          dataType: "xml",
          cache: false,
          success:function(data){
            $(data).find("filma").each(function(){
              var html = "<div class='container mb-5'>";
              html += "<div class='row'>";
              html += "<h1 class='display-3'>" + $(this).find("izenburua").text() + " <span class='text-secondary h2'>(" + $(this).find("urtea").text() + ")</span></h1>";
              html += "</div>";
              html += "<div class='row'>";
              html += "<div class='col-md-8'>";
              html += "<p> <ul class='list-group list-group-flush'>";
              html += "<li class='list-group-item'> <span class='font-weight-bold'>Zuzendaria: </span>" +  $(this).find("zuzendaria").text() + "</li>";
              html += "<li class='list-group-item'> <span class='font-weight-bold'>Generoa: </span>" +  $(this).find("generoa").text() + "</li>";
              html += "<li class='list-group-item'> <span class='font-weight-bold'>Iraupena: </span>" +  $(this).find("iraupena").text() + "min</li>";
              html += "<li class='list-group-item'> <span class='font-weight-bold'>Balorazioa: </span>" +  $(this).find("balorazioa").text() + "/100</li>";
              html += "</ul> </p>";
              html += "</div>";
              html += "<div class='col-md-4'>";
              var link = getEmbedLink($(this).find("esteka").text());
              html += '<iframe class="embed-responsive-item" src="' + link + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
              html += "</div></div>";
              html += "<div class='row'>";
              html += "<p>" + $(this).find("sinopsia").text() + "</p>";
              html += "</div>";
              html += "<div class='row'>";
              html += "<div class='container'> <p class='font-italic text-secondary'>By " + $(this).find("egilea").text() + "</p> </div>";
              html += "</div></div>";
              $("#content").append(html);
            })
          }
      });
    });
    function getEmbedLink(raw_url){
      var parts = raw_url.split("/");
      var code = parts[parts.length-1];
      return "https://www.youtube.com/embed/" + code;
    }
    </script>
<?php include "../php/footer.php" ?>
