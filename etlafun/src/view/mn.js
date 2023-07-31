let dc = document.querySelector("#btcr");
let gen = document.querySelector("#ul");
let sp = document.querySelectorAll("ul li a span");
let con = document.querySelector("#dcon");

function dd() {
  if (gen.style.width === "288px") {
    gen.style.width = "80px";
    for (let i = 0; i < sp.length; i++) {
      sp[i].style.display = "none";
      con.style.marginLeft = "80px";
    }
  } else {
    gen.style.width = "288px";
    for (let i = 0; i < sp.length; i++) {
      sp[i].style.display = "";
      con.style.marginLeft = "288px";
    }
  }
}

dc.addEventListener("click", dd);
// block ozeligini kaldır