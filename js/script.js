$(document).ready(function () {
  $('.loader').fadeOut('slow');

  const inputs = document.querySelectorAll(".campo");

  function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
  }

  function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }

  inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
  });

  const num_sliders = $('.slider-corousel').toArray().length,
    num_items_slider = $('.contenedor-slider .item-carousel').toArray().length,
    space_size = (num_items_slider / num_sliders),
    interval = 3600;

  let index = 1;

  $('.contenedor-slider').css('width', space_size + '00%');
  function slide() {
    $('.contenedor-slider').css('left', '-' + index + '00%');
    index++;
    if (index >= space_size) {
      index = 0;
    }
  }
  setInterval(slide, interval);

  function seleccion_agenda() {
    if ($("#radio1").is(':checked')) {
      $('#nuevo-paciente').hide();
      $('#paciente-existente').show();
    } else {
      $('#paciente-existente').hide();
      $('#nuevo-paciente').show();
    }
  }
  seleccion_agenda();
  $('.radio :radio').on("change", function () {
    seleccion_agenda();
  });

  $('#modal-agendar').on("click", function () {
    $('#modal-agenda, .contenido-modal').addClass('active');
  });
  $('#cerrar-modal').on("click", function () {
    $('#modal-agenda, .contenido-modal').removeClass('active');
  });

  let nom_dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sabado"],
    nom_meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    fecha = new Date();

  var num_dia = fecha.getDate(),
    nom_dia = nom_dias[fecha.getDay()],
    num_dia_semana = fecha.getDay(),
    num_mes = fecha.getMonth(),
    nom_mes = nom_meses[fecha.getMonth()],
    ano = fecha.getFullYear();

  $('#num-dia').html(num_dia);
  $('#nom-dia').html(nom_dia); 
  $('#mes').html(nom_mes);
  $('#ano').html(ano);

  $('#anterior-d').click(function () {
    num_dia = num_dia - 1;
    num_dia_semana = num_dia_semana - 1;

    if (num_dia <= 0) {
      num_mes = num_mes - 1;
      if (num_mes == 0 || num_mes == 2 || num_mes == 4 || num_mes == 6 || num_mes == 7 || num_mes == 9 || num_mes == 11 || num_mes == 12) {
        num_dia = 31;
      } else if (num_mes == 3 || num_mes == 5 || num_mes == 8 || num_mes == 10) {
        num_dia = 30;
      } else {
        if ((ano % 4 === 0) && (ano % 100 == !0) || (ano % 400 === 0)) {
          num_dia = 28;
        } else {
          num_dia = 29;
        }
      }
    };

    if (num_mes < 0) {
      ano = ano - 1;
      num_mes = 11;
    };
    nom_mes = nom_meses[num_mes];

    if (num_dia_semana < 0) {
      num_dia_semana = 6;
    };

    nom_dia = nom_dias[num_dia_semana];

    $('#num-dia').html(num_dia);
    $('#nom-dia').html(nom_dia);
    $('#mes').html(nom_mes);
    $('#ano').html(ano);
  });
  $('#siguiente-d').click(function () {
    num_dia = num_dia + 1;

    if (num_mes == 0 || num_mes == 2 || num_mes == 4 || num_mes == 6 || num_mes == 7 || num_mes == 9 || num_mes == 11 || num_mes == 12) {
      if (num_dia > 31) {
        num_dia = 1
        num_mes = num_mes + 1;
      }
    } else {
      if (num_mes == 3 || num_mes == 5 || num_mes == 8 || num_mes == 10) {
        if (num_dia > 30) {
          num_dia = 1
          num_mes = num_mes + 1;
        }
      } else {
        if ((ano % 4 === 0) && (ano % 100 == !0) || (ano % 400 === 0)) {
          if (num_dia > 28) {
            num_dia = 1
            num_mes = num_mes + 1;
          }
        } else {
          if (num_dia > 29) {
            num_dia = 1
            num_mes = num_mes + 1;
          }
        }
      }
    }

    if (num_mes > 12) {
      ano = ano + 1;
      num_mes = 0;
    };

    nom_mes = nom_meses[num_mes];

    if (num_dia_semana >= 6) {
      num_dia_semana = 0;
    } else {
      num_dia_semana = num_dia_semana + 1;
    };

    nom_dia = nom_dias[num_dia_semana];

    $('#num-dia').html(num_dia);
    $('#nom-dia').html(nom_dia);
    $('#mes').html(nom_mes);
    $('#ano').html(ano);
  });

  $('[data-toggle="popover"]').popover();
});

function changeImage(anything) {
  document.getElementById("slider").src = anything;
}

function ToggleMenu() {
  const menuToggle = document.querySelector(".menuToggle");
  const navigation = document.querySelector(".navigation");
  menuToggle.classList.toggle("active");
  navigation.classList.toggle("active");
}

/*Formulario registro de pacientes*/

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});


prevBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
