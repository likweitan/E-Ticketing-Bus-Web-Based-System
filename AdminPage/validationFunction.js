//Manage Promotion Page Validation
function managePromotionValidation()                                    
{ 
    var promotionCode = document.forms["promotionForm"]["pCode"];               
    var promotionDes = document.forms["promotionForm"]["pcDes"];    
    var promotionEnd = document.forms["promotionForm"]["pcEnd"];  
    var promotionStart =  document.forms["promotionForm"]["pcStart"];  
    var promotionPercentage = document.forms["promotionForm"]["pPer"];  
    var promotionSch = document.forms["promotionForm"]["Sch"];  
   
    if (promotionCode.value == "")                                  
    { 
        window.alert("Please Fill in Promotion Code."); 
        promotionCode.focus(); 
        return false; 
    } 
   
    if (promotionDes.value == "")                               
    { 
        window.alert("Please Fill in Promotion Code Description"); 
        promotionDes.focus(); 
        return false; 
    } 
       
    if (promotionEnd.value == "")                                   
    { 
        window.alert("Please Select End time"); 
        promotionEnd.focus(); 
        return false; 
    } 
   
    if (promotionStart.value == "")                           
    { 
        window.alert("Please Select start time"); 
        promotionStart.focus(); 
        return false; 
    } 
    if (promotionPercentage.value == "")                        
    { 
        window.alert("Please enter the percentage"); 
        promotionPercentage.focus(); 
        return false; 
    } 
   
    if (promotionSch.value == "")                        
    { 
        window.alert("PLease Select the Schedule NO"); 
        promotionSch.focus(); 
        return false; 
    } 
   
    return true; 
}
//Manage User Validation
function manageUserValidation()                                    
{ 
    var  userEmail = document.forms["UserFormManagement"]["em"];               
    var  userPassword = document.forms["UserFormManagement"]["pw"];    
    var  userPhoneNumber= document.forms["UserFormManagement"]["pn"];  
   
    if (userEmail.value == "")                                  
    { 
        window.alert("Email fill cannot be empty"); 
        userEmail.focus(); 
        return false; 
    } 
   
    if (userPassword.value == "")                               
    { 
        window.alert("Password cannot be empty"); 
        userPassword.focus(); 
        return false; 
    } 
       
    if (userPhoneNumber.value == "")                                   
    { 
        window.alert("Phone Number cannot be empty"); 
        userPhoneNumber.focus(); 
        return false; 
    } 
   
    return true; 
}
//Manage Bus Validation
function managebusValidation()                                    
{ 
    var busNoCheck = document.forms["busForm"]["busNo"];               
    var busCompanyCheck = document.forms["busForm"]["busCompany"];    
    var busCapacotyCheck = document.forms["busForm"]["busCapacity"];  
   
    if (busNoCheck.value == "")                                  
    { 
        window.alert("Bus Number Cannot be Empty"); 
        busNoCheck.focus(); 
        return false; 
    } 
   
    if (busCompanyCheck.value == "")                               
    { 
        window.alert("Bus Company Cannot be Empty"); 
        busCompanyCheck.focus(); 
        return false; 
    } 
       
    if (busCapacotyCheck.value == "")                                   
    { 
        window.alert("Bus Capacity Cannot be Empty"); 
        busCapacotyCheck.focus(); 
        return false; 
    } 
    return true; 
}
//Manage busSchedule Validation
function manageBusScheduleValidation()                                    
{ 
    var checkscheduleNo = document.forms["busScheduleForm"]["scNo"];               
    var checkschedulebusno = document.forms["busScheduleForm"]["sbNo"];    
    var checkschedulecd = document.forms["busScheduleForm"]["scd"];  
    var checkschedulea =  document.forms["busScheduleForm"]["sca"];  
    var checkschedulet = document.forms["busScheduleForm"]["sst"];  
    var checkscheduled = document.forms["busScheduleForm"]["sd"]; 
    var checkticketp = document.forms["busScheduleForm"]["tp"]; 
   
    if (checkscheduleNo.value == "")                                  
    { 
        window.alert("Schedule No cannot empty"); 
        checkscheduleNo.focus(); 
        return false; 
    } 
   
    if (checkschedulebusno.value == "")                               
    { 
        window.alert("Must select Bus No"); 
        checkschedulebusno.focus(); 
        return false; 
    } 
       
    if (checkschedulecd.value == "")                                   
    { 
        window.alert("Please select the Schedule Depart"); 
        checkschedulecd.focus(); 
        return false; 
    } 
   
    if (checkschedulea.value == "")                           
    { 
        window.alert("Please Select the Schedule Arrive"); 
        checkschedulea.focus(); 
        return false; 
    } 
    if (checkschedulet.value == "")                        
    { 
        window.alert("Please enter the Schedule Start Time"); 
        checkschedulet.focus(); 
        return false; 
    } 
   
    if (checkscheduled.value == "")                        
    { 
        window.alert("PLease fill in the Schedule Duration"); 
        checkscheduled.focus(); 
        return false; 
    } 
    if (checkticketp.value == "")                        
    { 
        window.alert("PLease fill in the ticket price"); 
        checkticketp.focus(); 
        return false; 
    } 
   
    return true; 
}
//Manage Booking Validation
function manageTicketValidation()                                    
{ 
    var checkquantity = document.forms["ticketForm"]["quan"];               
    var checkticket = document.forms["ticketForm"]["bSeat"];    
    var checkstatus = document.forms["ticketForm"]["bStatus"];  
    
   
    
    if (checkquantity.value <= 0||checkquantity.value == "")                           
    {  
        if (checkquantity.value <= 0) 
        {
            window.alert("quantity cannot be 0 or less than 0"); 
            checkquantity.focus();
        }   
        else if ((checkquantity.value == ""))                       
        { 
            window.alert("quantity cannot be empty"); 
            checkquantity.focus();          
        }
        return false; 
    } 
    if (checkticket.value <= 0||checkticket.value == "")                           
    {  
        if (checkticket.value <= 0) 
        {
            window.alert("Bus seat cannot be 0 or less than 0"); 
            checkticket.focus();
        }   
        else if ((checkticket.value == ""))                       
        { 
            window.alert("Bus Seat cannot be empty"); 
            checkticket.focus();          
        }
        return false; 
    } 
    
    if (checkstatus.value == "")                        
    { 
        window.alert("PLease Select Status"); 
        checkstatus .focus(); 
        return false; 
    } 
   
    return true; 
}