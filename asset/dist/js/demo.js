function add() {
    
    if( document.form.name.value == "" ) {
        alert( "Please provide Employee's name!" );
        document.form.name.focus();
        return false;
     }
     if( document.form.role.value == "" ) {
        alert( "Please provide Employee's Role!" );
        document.form.role.focus();
        return false;
     }
     if( document.form.dept.value == "" ) {
        alert( "Please provide Employee's department!" );
        document.form.dept.focus();
        return false;
     }
     if( document.form.number.value == "" ) {
        alert( "Please provide Employee's Mobile!" );
        document.form.number.focus();
        return false;
     }
     if( document.form.address.value == "" ) {
        alert( "Please provide Employee's Address!" );
        document.form.address.focus();
        return false;
     }
      if( document.form.education.value == "" ) {
        alert( "Please provide Employee's education!" );
        document.form.education.focus();
        return false;
     }
      if( document.form.skill.value == "" ) {
        alert( "Please provide Employee's skill!" );
        document.form.skill.focus();
        return false;
     }
      if( document.form.email.value == "" ) {
        alert( "Please provide Employee's Email!" );
        document.form.email.focus();
        return false;
     }
     if( document.form.password.value == "" ) {
        alert( "Please provide Employee's PassWord!" );
        document.form.password.focus();
        return false;
     }
     if( document.form.total_lv.value == "" ) {
        alert( "Please provide Employee's total_leave!" );
        document.form.total_lv.focus();
        return false;
     }
     if( document.form.remain_lv.value == "" ) {
        alert( "Please provide Employee's remain_leave!" );
        document.form.remain_lv.focus();
        return false;
     }
      if( document.form.image.value == "" ) {
        alert( "Please provide Employee's Profile photo!" );
        document.form.image.focus();
        return false;
     }  
     return( true );
}

function login() {

    if( document.form.email.value == "" ) {
        alert( "Please provide your email!" );
        document.form.email.focus();
        return false;
     }
     if( document.form.password.value == "" ) {
        alert( "Please provide your PassWord!" );
        document.form.password.focus();
        return false;
     }
     return( true );
}


function confirmDelete(){
var agree = confirm("Are you sure you want to delete this file?");
  if(agree == true){
    return true
}
else{
return false;
}


}
function leave() {
    
    if( document.form1.leave.value == "" ) {
        alert( "Please provide your leave type!" );
        document.form1.leave.focus() ;
        return false;
     }
     if( document.form1.reason.value == "" ) {
        alert( "Please provide your reason!" );
        document.form1.reason.focus() ;
        return false;
     }
     if( document.form1.from_date.value == "" ) {
        alert( "Please provide your date!" );
        document.form1.from_date.focus() ;
        return false;
     }
      if( document.form1.to_date.value == "" ) {
        alert( "Please provide your date!" );
        document.form1.to_date.focus() ;
        return false;
     }
     return( true );
}

function task() {
    
    if( document.task_form.task.value == "" ) {
        alert( "Please provide your task type!" );
        document.task_form.task.focus() ;
        return false;
     }
     if( document.task_form.assign.value == "" ) {
        alert( "Please provide your assign!" );
        document.task_form.assign.focus() ;
        return false;
     }
     if( document.task_form.start_date.value == "" ) {
        alert( "Please provide your date!" );
        document.task_form.start_date.focus() ;
        return false;
     }
      if( document.task_form.due_date.value == "" ) {
        alert( "Please provide your date!" );
        document.task_form.due_date.focus() ;
        return false;
     }
     return( true );
}
// function mail() {
//     if (document.form1.) {
//     alert("Email has been send");
//         }
//     }