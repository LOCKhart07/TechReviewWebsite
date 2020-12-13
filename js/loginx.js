const user=document.getElementById('username');
const pass=document.getElementById('password');
const form = document.getElementById('loginform');
const uerror = document.getElementById('usererror');
const perror = document.getElementById('passerror');
var error= 0;

function uerrorx(error_msg){
    uerror.innerHTML=error_msg;
    user.style.borderColor="red";
    error=1;

}

function perrorx(error_msg){
    perror.innerHTML=error_msg;
    pass.style.borderColor="red";
    error=1;

}

function reset(){
    if(perror.innerHTML === "Wrong username/password combination"){
        pass.style.borderColor="red";    
        user.style.borderColor="red";
        return 0;    
    }
    uerror.innerHTML="";
    user.style.borderColor="black";
    perror.innerHTML="";
    pass.style.borderColor="black";
}




form.addEventListener('submit',(e)=>{
    reset()

    

    if(user.value === ''||user.value == null){
        uerrorx("*Please fill in this field")
        
    }
    if(pass.value === ''||pass.value == null){
        perrorx("*Please enter a password.")
        
    }

    if(pass.value.length<=6){
        perrorx("*Password must be over 6 characters.")
    }
    if(error!=0){
        e.preventDefault()
        error=0;

    }
    
})


