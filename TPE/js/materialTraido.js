const input = document.getElementById('id="id_cartonero"');

const check = () => {
  if (!input.validity.valid) input.value = 0;
  if (+input.value < 0) input.value = 0;
};

input.addEventListener('input', check);
input.addEventListener('blur', check);