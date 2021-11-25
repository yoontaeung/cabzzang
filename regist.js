function sendIt(){


//아이디 입력여부 검사
if(document.f.id.value=="")
{
 alert("아이디를 입력하지 않았습니다.");
 document.f.id.focus();
 document.f.id.select();
 return;
}

//관리자의 아이디를 차단함으로써 회원정보를 아무나 볼 수 없게 한다
//관리자는 adminXx1으로 로그인하면 userinfo.php를 볼 수 있다.
if(f.id.value == "adminxX1"){
  alert("이 아이디는 허용되지 않습니다.");
  document.f.id.focus();
  document.f.id.select();
  return;
}
//아이디 유효성 검사 (영문대소문자, 숫자, 특수기호 _ 만 허용)
for (i=0;i<document.f.id.value.length ;i++ )
{
 ch=document.f.id.value.charAt(i);
  if (!(ch>='0' && ch<='9') && !(ch>='a' && ch<='z') && !(ch>='A' && ch<='Z') && !(ch=='_'))
  {
  alert ("아이디는 대소문자, 숫자, 특수기호 _ 만 입력가능합니다.");
  document.f.id.focus();
  document.f.id.select();
  return;
  }
}

//아이디 길이 체크 (6~10자)
if (document.f.id.value.length<6 || document.f.id.value.length>10)
{
 alert ("아이디를 6~10자까지 입력해주세요.");
 document.f.id.focus();
 document.f.id.select();
 return;
}

 var check = /^(?=.*\d)(?=.*[A-Z]).{6,10}$/;  
 if(!document.f.id.value.match(check))   
 {   
     

    alert('적어도 대문자와 숫자 하나씩은 입력해야 합니다 ');  
    document.f.id.focus();
  	document.f.id.select();
 	return;
}

//아이디에 공백 사용하지 않기
if (document.f.id.value.indexOf(" ")>=0)
{
 alert("아이디에 공백을 사용할 수 없습니다.");
 document.f.id.focus();
 document.f.id.select();
 return
}



//비밀번호 입력여부 체크
if(document.f.pw1.value=="")
{
 alert("비밀번호를 입력하지 않았습니다.");
 document.f.pw1.focus();
 return;
}

//비밀번호 길이 체크(6~10자 까지 허용)
if (document.f.pw1.value.length<6 || document.f.pw1.value.length>10)
{
 alert ("비밀번호를 6~10자까지 입력해주세요.");
 document.f.pw1.focus();
 document.f.pw1.select();
 return
}
var pwd = f.pw1.value;
var len = f.pw1.value.length;
var temp_pwd;


//동일한 문자 3회 이상
for(i=0; i<= len-1; i++){
  var repeated_count = 0;
  temp_pwd = pwd[i];

  for(k=0; k<=len-1; k++){
      if(temp_pwd == pwd[k]){
        repeated_count++;

      if(repeated_count == 3){
        alert("비밀번호에 동일한 숫자나 문자 3회 이상 사용하지 마세요");
        document.f.pw1.focus();
         document.f.pw1.select();
         return
      }
    }
  }

}




//비밀번호에서 연속된 문자열 거르기 
      var SamePass_0 = 0; //동일문자 카운트
      var SamePass_1 = 0; //연속성(+) 카운드
      var SamePass_2 = 0; //연속성(-) 카운드


      var chr_pass_0;
      var chr_pass_1;
      var chr_pass_2;
      var chr_pass_3;

      for(var i=0; i < len-1; i++)
      {
          chr_pass_0 = pwd.charAt(i);
          chr_pass_1 = pwd.charAt(i+1);
          chr_pass_3 = pwd.charAt(i+2);

          


          chr_pass_2 = pwd.charAt(i+2);
          //연속성(+) 카운드
          if(chr_pass_0.charCodeAt(0) - chr_pass_1.charCodeAt(0) == 1 && chr_pass_1.charCodeAt(0) - chr_pass_2.charCodeAt(0) == 1)
          {
              SamePass_1 = SamePass_1 + 1
          }

          //연속성(-) 카운드
          if(chr_pass_0.charCodeAt(0) - chr_pass_1.charCodeAt(0) == -1 && chr_pass_1.charCodeAt(0) - chr_pass_2.charCodeAt(0) == -1)
          {
              SamePass_2 = SamePass_2 + 1
          }
      }
      
      if(SamePass_1 >= 1 || SamePass_2 >= 1 )
      {
          alert("연속된 문자열(123 또는 321, abc, cba 등)을\n 3자 이상 사용 할 수 없습니다.");
          document.f.pw1.focus();
			document.f.pw1.select();
			 return
      }
       


//비밀번호와 비밀번호 확인 일치여부 체크
if (document.f.pw1.value!=document.f.pw2.value)
{
 alert("비밀번호가 일치하지 않습니다")
 document.f.pw1.value=""
 document.f.pw2.value=""
 document.f.pw1.focus()
 return
}

if(f.profile.value == ""){
	alert("아무 글자라도 쓰세요! 본인의 소개를 하세요.")
	document.f.profile.focus();
	document.f.profile.select();
	return;
}



document.f.submit()
}

function howto(){
  document.write("ID 는 6~10자의 영문 대소문자 , 숫자와 특수기호(_) 만 사용 가능하고, 적어도 1개의 숫자와 대문자를 포함한다.");
  document.write("<br><br>");
  document.write("비밀번호는 6-10 자의 영문 대소문자, 숫자, 특수문자를 포함할 수 있다.");
  document.write("<br><br>")
  document.write("또한 동일한 숫자 및 문자 3회 이상 사용불가, 연속한 문자열 (123,321,abc,cba 등)을 사용할 수 없다");

}