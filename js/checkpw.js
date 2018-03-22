var check = function() {
  if (document.getElementById('new_password_usuario').value == document.getElementById('new_reppassword_usuario').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').style.fontWeight = 'bold';
    document.getElementById('message').innerHTML = ' Las contraseñas coinciden';
    document.getElementById('new_usuario').disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').style.fontWeight = 'bold';
    document.getElementById('message').innerHTML = ' Las contraseñas NO coinciden';
    document.getElementById('new_usuario').disabled = true;
  }
}
