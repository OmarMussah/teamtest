function show_1(){
  var label_return = document.getElementById("label2");
  var return_date = document.getElementById("date1");
  var passengers = document.getElementById("passengers");
  var passengers_1 = document.getElementById("passengers_1");
  var class_type = document.getElementById("class");
  var class_type_1 = document.getElementById("class_1");

  label_return.style.display = "block";
  return_date.style.display = "block";
  passengers.style.display = "block";
  class_type.style.display = "block";
  passengers_1.style.display = "none";
  class_type_1.style.display = "none";
}

function show_2(){
  var label_return = document.getElementById("label2");
  var return_date = document.getElementById("date1");
  var passengers = document.getElementById("passengers");
  var passengers_1 = document.getElementById("passengers_1");
  var class_type = document.getElementById("class");
  var class_type_1 = document.getElementById("class_1");

  label_return.style.display = "none";
  return_date.style.display = "none";
  passengers.style.display = "none";
  class_type.style.display = "none";
  passengers_1.style.display = "block";
  class_type_1.style.display = "block";
}

