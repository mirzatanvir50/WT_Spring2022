const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const age = document.getElementById('age');

function handleError(e, message) {
  e.target.classList.add('error');
  e.target.nextElementSibling.style.visibility = 'visible';
  e.target.nextElementSibling.innerHTML = message;
}

function handleSuccess(e) {
  e.target.classList.remove('error');
  e.target.classList.add('success');
  e.target.nextElementSibling.style.visibility = 'hidden';
}

fname.addEventListener('input', (e) => {
  if (e.target.value.length && e.target.value.length <= 3) {
    return handleError(e, 'Please Enter a Valid Name with at least 4 character');
  }

  if (!e.target.value.length) {
    return handleError(e, 'Name can not be empty');
  }

  return handleSuccess(e);
});

lname.addEventListener('input', (e) => {
  if (e.target.value.length && e.target.value.length <= 3) {
    return handleError(e, 'Please Enter a Valid Name with at least 4 character');
    return;
  }

  if (!e.target.value.length) {
    handleError(e, 'Name can not be empty');
    return;
  }

  return handleSuccess(e);
});

age.addEventListener('input', (e) => {
  if (!e.target.value.length) {
    return handleError(e, 'Age cannot be empty');
  }
  return handleSuccess(e);
});

email.addEventListener('input', (e) => {
  if (!e.target.value.length || !e.target.value.match(/^([a-z0-9+_-]+)(.[a-z0-9+_-]+)*@([a-z0-9-]+.)+[a-z]{2,6}$/)) {
    handleError(e, 'Please enter a valid email');
    return;
  }

  return handleSuccess(e);
});

password.addEventListener('input', (e) => {
  if (!e.target.value.length || e.target.value.length <= 4) {
    handleError(e, 'password should be at least 5 characters');
    return;
  }

  return handleSuccess(e);
});
