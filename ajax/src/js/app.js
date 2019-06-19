
var $ = require('jquery');


$(document).ready(function(){

  var source   = $('#album-template').html();
  var template = Handlebars.compile(source);

  $.ajax({
    'url':'http://localhost:8888/quinto/data.php',
    'method':'GET',
    'success': function(data){
      var db = JSON.parse(data);
      for (var i = 0; i < db.length; i++) {
        var disco = db[i];
        var context = {
          titolo: disco.titolo,
          copertina: disco.copertina,
          gruppo: disco.gruppo,
          anno: disco.anno
        };
        var html = template(context);
        $('.album_container').append(html);
      }
    },
    'error': function(){
      alert('errore');
    }
  })
});
