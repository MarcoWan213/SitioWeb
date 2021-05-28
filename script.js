var menu = [sabor1 = { type: "Chocolate", costo: "40", ingredientes: "Cocolate" },
    sabor2 = { type: "Dona", model: "50", ingredientes: "Dona, glaceado" },
    sabor3 = { type: "Mazapán", model: "50", ingredientes: "Mazapan, dulce de leche" },
    sabor4 = { type: "Bubulubu", model: "45", ingredientes: "Bubulubu blanco, Bubulubu" },
    sabor5 = { type: "Monster", Monster: "110", ingredientes: "Chocolate, Mazapan, Glaceado" }
];

document.getElementById("choco").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp" + menu[0].type;
document.getElementById("don").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp" + menu[1].type;
document.getElementById("maza").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp" + menu[2].type;
document.getElementById("bubu").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp" + menu[3].type;
document.getElementById("mons").innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp" + menu[4].type;