// Created by: Diego
// Created on: april 2024
// This file contains the JS functions for index.html


"use strict"
//function to see what rating of movies user can watch
function museumAdmission() {


    // Get the value of min and max
    const min = Number(document.getElementById('min').value)
    const max = Number(document.getElementById('max').value)

    // Display numbers in the range using a while loop
  console.log(max)
    let currentNumber = min;
  document.getElementById('user-info').innerText = " "
    while (currentNumber <= max) {
      console.log(currentNumber)
        document.getElementById('user-info').innerText += currentNumber + '\n';
        currentNumber++;
    }

}
