$(document).ready(function(){//leeftijd berekenen!!!!
  $("#calculate").click(function(){
    var mdate = $("#birth_date").val().toString();
    var yearThen = parseInt(mdate.substring(0,4), 10);
    var monthThen = parseInt(mdate.substring(5,7), 10);
    var dayThen = parseInt(mdate.substring(8,10), 10);

    var today = new Date();
    var birthday = new Date(yearThen, monthThen-1, dayThen);

    var differenceInMilisecond = today.valueOf() - birthday.valueOf();

    var year_age = Math.floor(differenceInMilisecond / 31536000000);
    var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);

    var month_age = Math.floor(day_age/30);

    day_age = day_age % 30;

      if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
          $("#exact_age").text("Invalid birthday - Please try again!");
      }
      else {
        $("#exact_age").html("Leeftijd: <span id=\"age\">" + year_age + " jaar " + month_age + " maanden " + day_age + " dagen</span> oud");
      }
  });
});

$(document).ready(function(){//changing color of background
  $("#heer").click(function(){
    $("input").css("background-color", "#78FF88");
  });
});

$(document).ready(function(){
  $("#heer").click(function(){
    $("body").css("background-color", "green");
  });
});

$(document).ready(function(){
  $("#mevrouw").click(function(){
    $("input").css("background-color", "pink");
  });
});

$(document).ready(function(){
  $("#mevrouw").click(function(){
    $("body").css("background-color", "#7758DB");
  });
});

$(document).ready(function(){//calculate knopje
  $("#mevrouw").click(function(){
    $("#calculate").css("background-color", "pink");
  });
});

$(document).ready(function(){
  $("#heer").click(function(){
    $("#calculate").css("background-color", "#78FF88");
  });
});


  //nederlands input
  function regex(){
      name();
      adres();
      plaats();
      postcode();
      nationaliteit();
      beroep();
      opmerking();
  }

  function name(){
    var name = document.getElementById('name').value;
    let regex = /[a-zA-Z]+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      document.getElementById('demo').innerHTML = txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in naam \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function adres(){
    var name = document.getElementById('adres').value;
    let regex = /[a-zA-Z]+\s\d+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      var asdf = document.getElementById('demo').innerHTML;
      document.getElementById('demo').innerHTML = asdf + txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in adres \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function plaats(){
    var name = document.getElementById('plaats').value;
    let regex = /[a-zA-Z]+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      var asdf = document.getElementById('demo').innerHTML;
      document.getElementById('demo').innerHTML = asdf + txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in plaats \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function postcode(){//hier zitten komma's tussen maar het doet het
    var name = document.getElementById('postcode').value;
    let regex = /[\d+\sA-Z]+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      var asdf = document.getElementById('demo').innerHTML;
      document.getElementById('demo').innerHTML = asdf + txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in postcode \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function nationaliteit(){
    var name = document.getElementById('nationaliteit').value;
    let regex = /[a-zA-Z]+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      var asdf = document.getElementById('demo').innerHTML;
      document.getElementById('demo').innerHTML = asdf + txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in nationaliteit \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function beroep(){
    var name = document.getElementById('beroep').value;
    let regex = /[a-zA-Z]+\b/ig

    var txt = name.match(regex);
    if (txt != null) {
      var asdf = document.getElementById('demo').innerHTML;
      document.getElementById('demo').innerHTML = asdf + txt + "<br />";
    } else {
        alert("foutmelding: vul iets anders in beroep \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
    }
  }

  function opmerking(){
    var name = document.getElementById('opmerking').value;
    let regex = /[a-zA-Z]+\b/ig

    var txt = name.match(regex);
      if (txt != null) {
        var asdf = document.getElementById('demo').innerHTML;
        document.getElementById('demo').innerHTML = asdf + txt + "<br />";
      } else {
          alert("foutmelding: vul iets anders in opmerking \n ALLE VAKJES MOETEN WORDEN INGEVULD!");
      }
  }
