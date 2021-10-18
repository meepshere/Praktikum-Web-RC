function gantiWarna(value) {
    switch (value) {
        case 'red':
            document.body.style.background = 'red';
            break;
        case 'yellow':
            document.body.style.background = 'yellow';
            break;
        case 'green':
            document.body.style.background = 'green';
            break;
        case 'blue':
            document.body.style.background = 'blue';
            break;
        case 'pink':
            document.body.style.background = 'pink';
            break;
        case 'black':
            document.body.style.background = 'black';
            document.body.style.color = 'white';
            break;

        default:
            document.body.style.background = 'white';
            document.body.style.color = 'black';
    } 
}

function gantiWeather(value){
    var cuaca = document.getElementById("weather")

    if(value == "sunny"){
        cuaca.innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream."
    }
    else if(value == "rain"){
        cuaca.innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long."
    }
    else if(value == "cloudy"){
        cuaca.innerHTML = "We could see lots of clouds today! Make sure to bring your umbrella just in case it is raining."
    }
    else if(value == "thunderstorm"){
        cuaca.innerHTML = "It looks like there will be thunderstorm today.. better just stay inside your house!"
    }
    else if(value == "snow"){
        cuaca.innerHTML = "There are snow outside! let's get our coat and make a snowman together!!"
    }
}


function factorial(){
    var angka = document.getElementById("angka").value;
    var faktorial = angka;

    if(angka>0){
        for(let i=faktorial-1; i>0; i--){
            faktorial *= i;
        }
    }
    else if(angka==0){
        faktorial = 1;
    }
    else if(angka<0){
        faktorial = "imaginary number";
    }

    var hasil = document.getElementById("hasil");
    hasil.innerHTML = `The factorial of ${angka} is ${faktorial}.`;
}