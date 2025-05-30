function togglePopup(){
    document.getElementById("popup1").classList.toggle("active");
    
};


const btn = document.getElementById('calculate');

btn.addEventListener('click', function(){

    let height = document.querySelector('#height').value;
    let weight = document.querySelector('#weight').value;

    if(height =='' || weight ==''){
        alert('Please Fill out the input field !');
        return;
    }

    height = height / 100

    let BMI = (weight/(height*height));

    BMI = BMI.toFixed(2);

    document.querySelector('#results').innerHTML = BMI;

        let status = '';

        if(BMI < 18.5){
            status = "Underweight";
        }

        if(BMI >= 18.5 && BMI <25){
            status = "Healthy";
        }

        if(BMI >= 25 && BMI <30){
            status = "Overweight";
        }

        if(BMI >= 30){
            status = "Obese";
        }

        document.querySelector('.comment').innerHTML = `You are <span id="comment"> ${status} </span>`;


});