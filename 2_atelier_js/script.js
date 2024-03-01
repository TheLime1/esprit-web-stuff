function Nombres_parfait(n) {
  let perfectNumbers = [
    6, 28, 496, 8128, 33550336, 8589869056, 137438691328, 2305843008139952128,
  ];
  let output = "";
  for (let i = 1; i < n; i++) {
    if (perfectNumbers.includes(i)) {
      output += i + "\n";
    }
  }
  document.getElementById("output").value = output;
}

function generateList() {
  let str1 = "abc";
  let str2 = "de";
  let result = [];

  for (let i = 0; i < str1.length; i++) {
    for (let j = 0; j < str2.length; j++) {
      result.push(str1[i] + str2[j]);
    }
  }

  document.getElementById("output2").value = result.join("\n");
}
function arrayOperations() {
  let T = [17, 38, 10, 25, 72];
  let output = "";

  // Sort and display the array
  T.sort((a, b) => a - b);
  output += "Sorted array: " + T.join(", ") + "\n";

  // Add 12 to the array and display it
  T.push(12);
  output += "Array after adding 12: " + T.join(", ") + "\n";

  // Reverse and display the array
  T.reverse();
  output += "Reversed array: " + T.join(", ") + "\n";

  // Display the index of 17
  output += "Index of 17: " + T.indexOf(17) + "\n";

  // Remove 38 and display the array
  T = T.filter((item) => item !== 38);
  output += "Array after removing 38: " + T.join(", ") + "\n";

  // Display the sub-array from the 2nd to the 3rd element
  output +=
    "Sub-array from 2nd to 3rd element: " + T.slice(1, 3).join(", ") + "\n";

  // Display the sub-array from the start to the 2nd element
  output +=
    "Sub-array from start to 2nd element: " + T.slice(0, 2).join(", ") + "\n";

  // Display the sub-array from the 3rd element to the end
  output +=
    "Sub-array from 3rd element to end: " + T.slice(2).join(", ") + "\n";

  document.getElementById("output3").value = output;
}
