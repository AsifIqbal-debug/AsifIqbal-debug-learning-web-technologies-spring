function validate(){
    let uname=document.getElementById('name').value;
    let id=document.getElementById('id').value;
    let desig=document.getElementById('desig').value;
    let email=document.getElementById('email').value;
    let bloodGroup=document.getElementById('bloodGroup').value;
    let phone=document.getElementById('phone').value;
    let address=document.getElementById('address').value;
    let password=document.getElementById('password').value;
    let cPass=document.getElementById('cPass').value;
    let gender=document.getElementById('gender');
    let dob=document.getElementById('dob').value;
    let profilePic=document.getElementById('profilePic').value;
    let qualification=document.getElementById('qualification').value;

    unameCheck();
    idCheck();
    desigCheck();
    mailCheck();
    bloodGroupCheck();
    phoneCheck();
    addressCheck();
    passwordCheck();
    genderCheck();
    dobCheck();
    profilePicCheck();
    qualificationCheck();

        function unameCheck(){
            if(uname=="") {
                document.getElementById('msg1').innerHTML="**Sorry,Name cannot be empty";
            }
            else{
                if(uname.split(" ").length<2){
                    document.getElementById('msg1').innerHTML="**Sorry,Name must contain at least 2 words";
                }
            }
        }

    function idCheck(){
        if(id==""){
            document.getElementById('msg2').innerHTML="**Recheck ID,Id cannot be empty";
        }
    }
    function desigCheck(){
        if(desig==""){
            document.getElementById('msg3').innerHTML="**Recheck ID,Designation cannot be empty";
        }
    }
    
    function mailCheck(){
        if(email==""){
            document.getElementById('msg4').innerHTML="**Email cannot be empty";
        }
        else{
            
                document.getElementById('msg4').innerHTML="**not a valid email";
           
        }
    }
    function bloodGroupCheck(){
        if(bloodGroup==""){
            document.getElementById('msg5').innerHTML="**Blood Group cannot be empty";
        }
    }

    function phoneCheck(){
        if(phone==""){
            document.getElementById('msg6').innerHTML="**Phone cannot be empty";
        }
        else{
            if(phone.length!=11){
                document.getElementById('msg7').innerHTML="phone no. must contain 11 digit";
            }
        }
    }
    
    function addressCheck(){
        if(address==""){
            document.getElementById('msg8').innerHTML="**address cannot be empty";
        }
    }
    function passwordCheck(){
        if(password==""){
            document.getElementById('msg9').innerHTML="**password cannot be empty";
        }
        if(cPass==""){
            document.getElementById('msg10').innerHTML="**confirm_pass cannot be empty";
        }
        else{
            if(password!=cPass){
                document.getElementById('msg11').innerHTML="**please check your password and confirm password";
                
            }
        }
    }
    function genderCheck(){
        if(gender.checked==false){
            document.getElementById('msg12').innerHTML="**Gender cannot be empty";
        }
    }

    function dobCheck(){
        if(dob==""){
            document.getElementById('msg11').innerHTML="**Date of Birth cannot be empty";
        }
    }

    function profilePicCheck(){
        if(profilePic==""){
            document.getElementById('msg12').innerHTML="**Picture cannot be empty";
        }
    }
    function qualificationCheck(){
        if(qualification==""){
            document.getElementById('msg13').innerHTML="**qualification cannot be empty";
        }
    }
    

    

}