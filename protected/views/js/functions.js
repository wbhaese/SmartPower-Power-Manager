window.setInterval(function() {
    var num = Math.floor(Math.random() * (25 - 20)) + 20;
    var num2 = Math.floor(Math.random() * (25 - 20)) + 20;
    console.log(num);
    document.getElementById("temperatura1").innerHTML = num + "°";
    document.getElementById("temperatura2").innerHTML = num2 + "°";
  }, 1000);

  function setarTemperatura() {
    if (document.getElementById("estadoEquipamento").value == "Ativo") {
      document.getElementById("estadoEquipamento").className = "card-link btn btn-outline-danger col";
      document.getElementById("estadoEquipamento").value = "Inativo";
    } else {
      document.getElementById("estadoEquipamento").className = "card-link btn btn-outline-success col";
      document.getElementById("estadoEquipamento").value = "Ativo";
    }
  }

  function setarTemperatura2() {
    if (document.getElementById("estadoEquipamento2").value == "Ativo") {
      document.getElementById("estadoEquipamento2").className = "card-link btn btn-outline-danger col";
      document.getElementById("estadoEquipamento2").value = "Inativo";
    } else {
      document.getElementById("estadoEquipamento2").className = "card-link btn btn-outline-success col";
      document.getElementById("estadoEquipamento2").value = "Ativo";
    }
  }