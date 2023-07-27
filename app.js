//agregar estudiante
function redondear(n) {
  const parteEntera = Math.floor(n);
  const parteDecimal = n - parteEntera;

  if (parteDecimal >= 0.5) {
    return Math.ceil(n);
  } else {
    return parteEntera;
  }
}

function randoms() {
  document.getElementById("notaE").value = (Math.random() * 10).toFixed(1);
  let notaE = document.getElementById("notaE").value;
  document.getElementById("notaR").value = redondear(notaE);
}

function upper() {
  let name = document.getElementById("name");
  name.value = name.value.toUpperCase();
}
