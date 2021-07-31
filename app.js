let pSlider = document.querySelector('.pSlider');
let pValue = document.querySelector('.pValue');
pSlider.addEventListener('input', function() {
    pValue.innerHTML = "$" + pSlider.value;
    calculate();
})

let nSlider = document.querySelector(".nSlider");
let nValue = document.querySelector(".nValue");
nSlider.addEventListener("input", function() {
    nValue.innerHTML = nSlider.value + "years";
    calculate();
});

let iSlider = document.querySelector(".iSlider");
let iValue = document.querySelector(".iValue");
iSlider.addEventListener("input", function() {
    iValue.innerHTML = iSlider.value + "%";
    calculate();
});

let Ivalue = document.querySelector(".Ivalue");
let pivalue = document.querySelector(".pivalue");


function calculate() {
    let simpleInterest = pSlider.value * nSlider.value * iSlider.value / 100;
    Ivalue.innerHTML = simpleInterest + "$";
    let toPay = pSlider.value + simpleInterest;
    pivalue.innerHTML = "$" + toPay;

}