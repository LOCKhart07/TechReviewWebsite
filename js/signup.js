const name=document.getElementById('name');
const email=document.getElementById('email');
const pass=document.getElementById('password');
const cpass=document.getElementById('confirmpassword');
const form = document.getElementById('signupform');

const nerror = document.getElementById('nameerror');
const emerror = document.getElementById('emailerror');
const perror = document.getElementById('passerror');
const cperror = document.getElementById('cpasserror');

var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
var error= 0;

function nerrorx(error_msg){
    nerror.innerHTML=error_msg;
    name.style.borderColor="red";
    error=1;

}

function emerrorx(error_msg){
    emerror.innerHTML=error_msg;
    email.style.borderColor="red";
    error=1;

}

function perrorx(error_msg){
    perror.innerHTML=error_msg;
    pass.style.borderColor="red";
    error=1;

}

function cperrorx(error_msg){
    cperror.innerHTML=error_msg;
    cpass.style.borderColor="red";
    error=1;

}

function reset(){
    nerror.innerHTML="";
    name.style.borderColor="black";
    emerror.innerHTML="";
    email.style.borderColor="black";
    perror.innerHTML="";
    pass.style.borderColor="black";
    cperror.innerHTML="";
    cpass.style.borderColor="black";
}




form.addEventListener('submit',(e)=>{
    reset()
    if(name.value === ''||name.value == null){
        nerrorx("*Please fill in this field")
        
    }
    else if(email.value === ''||email.value == null){
        emerrorx("*Please fill in this field")
        
    }
    else if(pass.value === ''||pass.value == null){
        perrorx("*Please fill in this field")
        
    }
    else if(cpass.value === ''||cpass.value == null){
        cperrorx("*Please fill in this field")
        
    }
    else if(pass.value === ''||pass.value == null){
        perrorx("*Please enter a password.")
        
    }
    //EMAIL VALIDATION
    else if(!email.value.match(mailformat)){
        emerrorx("*Please enter a valid email.")
    }
    //PASSWORD LENGTH ERRORS
    else if(pass.value.length<=6){
        perrorx("*Password must be over 6 characters.")
    }
    else if(cpass.value.length<=6){
        cperrorx("*Password must be over 6 characters.")
    }
    //PASSWORD NOT MATCHIN ERROR
    else if(pass.value!=cpass.value){
        perrorx("")
        cperrorx("*The given password does not match!!Try again")
    }
    else{
        error=0
    }
    if(error!=0){
        e.preventDefault()
        error=0;

    }
    
})


