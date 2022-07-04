document.getElementById('but').addEventListener('click', function move() {
// Получаем значения из инпутов
var xcoord = document.getElementById('xcoord').value;
var ycoord = document.getElementById('ycoord').value;
// Преобразуем строку из инпута в число
let x = parseInt(xcoord);
let y = parseInt(ycoord);
    if(x<10 && y<10 && x != undefined && y != undefined ){
    // Задаём новое положение относительно блока родителя
    document.getElementById('movingblock').style.left = 42.5+x*50 + 'px';
    document.getElementById('movingblock').style.top = 442.5-y*50 + 'px';
    }
    else{
        alert('Вы ввели некорректное значение! \nПожалуйста введите координаты в диапазоне 0-9.');
        document.getElementById('movingblock').style.left = 42.5 +'px';
        document.getElementById('movingblock').style.top = 442.5 + 'px';
    }
})
  // Ограничение для ввода только цифр
  document.oninput = function ban(){
    var in1 = document.querySelector('#xcoord');
    var in2 = document.querySelector('#ycoord');
    in1.value = in1.value.replace(/\D/g, '');
    in2.value = in2.value.replace(/\D/g, '');
  }