function save() {
	let Username = document.getElementById('user').value;
	let Password = document.getElementById('pass').value;

	if(_.isEmpty(Username)){
		document.getElementById('user-erro').innerHTML = 'Vui lòng nhập tên người dùng!';
		}else{
			document.getElementById('user-erro').innerHTML='';
		}

	if(_.isEmpty(Password)){
		document.getElementById('pass-erro').innerHTML = 'Vui lòng nhập mật khẩu!';
	}else{
			document.getElementById('pass-erro').innerHTML='';
		}

	
}