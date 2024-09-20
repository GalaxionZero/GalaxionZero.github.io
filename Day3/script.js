// console.log("Hello, world!");

// alert("Hello, world!");

// var confirmation = confirm("Are you sure you want to do that?");
// if (confirmation) {
//     console.log("User confirmed.");
//     document.location = "contin.html";
// } else {
//     console.log("User denied.");
// }

// var nama = prompt("Siapa nama kamu?");
// console.log("Halo, " + nama + "!");

// document.location = "https://www.google.com";

// Hello("Hello, world!");

// function Hello(text) {
//     alert(text);
// }

// function add(a, b) {
//     return a + b;
// }

// console.log(add(2, 3));


// let mobil = {
//     warna: "merah",
//     tahun: 2018,
//     merek: "Toyota"
// };

// console.log(mobil.warna);
// console.log(mobil.tahun);
// console.log(mobil.merek);

// let angka = [1, 2, 3, 4, 5];
// console.log(angka[0]);
// console.log(angka);
// angka.push(6);
// console.log(angka);

const judul = document.getElementById("judul");
judul.style.color = "red";
judul.style.backgroundColor = "yellow";

let tombol = document.getElementById("tombol");
tombol.addEventListener("click", function() {
    alert("Tombol ditekan!");
});

tombol.addEventListener("mouseover", function() {
    tombol.style.backgroundColor = "blue";
});

tombol.addEventListener("mouseout", function() {
    tombol.style.backgroundColor = "transparent";
});