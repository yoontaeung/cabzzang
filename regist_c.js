function sendIt(){


//아이디 입력여부 검사
if(document.f.uid.value=="")
{
 alert("아이디를 입력하지 않았습니다.");
 document.f.uid.focus();
 return;
}


//아이디 유효성 검사 (영문대소문자, 숫자, 특수기호 _ 만 허용)
for (i=0;i<document.f.uid.value.length ;i++ )
{
 ch=document.f.uid.value.charAt(i);
  if (!(ch>='0' && ch<='9') && !(ch>='a' && ch<='z') && !(ch>='A' && ch<='Z') && !(ch=='_'))
  {
  alert ("아이디는 대소문자, 숫자, 특수기호 _ 만 입력가능합니다.");
  document.f.uid.focus();
  document.f.uid.select();
  return;
  }
}

//아이디 길이 체크 (6~10자)
if (document.f.uid.value.length<6 || document.f.uid.value.length>10)
{
 alert ("아이디를 6~10자까지 입력해주세요.");
 document.f.uid.focus();
 document.f.uid.select();
 return;
}

 var check = /^(?=.*\d).{6,10}$/;  
 if(!document.f.uid.value.match(check))   
 {   
     

    alert('username에 적어도 숫자 하나는 입력해야 합니다 ');  
    document.f.uid.focus();
  	document.f.uid.select();
 	return;
}

//아이디에 공백 사용하지 않기
if (document.f.uid.value.indexOf(" ")>=0)
{
 alert("아이디에 공백을 사용할 수 없습니다.");
 document.f.uid.focus();
 document.f.uid.select();
 return
}



//비밀번호 입력여부 체크
if(document.f.pwd.value=="")
{
 alert("비밀번호를 입력하지 않았습니다.");
 document.f.pwd.focus();
 return;
}

//비밀번호 길이 체크(6~10자 까지 허용)
if (document.f.pwd.value.length<6 || document.f.pwd.value.length>10)
{
 alert ("비밀번호를 6~10자까지 입력해주세요.");
 document.f.pwd.focus();
 document.f.pwd.select();
 return
}



document.f.submit()
}

