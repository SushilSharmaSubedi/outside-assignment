// Assuming you have an original array
let originalArray = [1, 2, 3, 4, 5];

// 1. Create a new array element
originalArray.push(6); // Adds a new element to the original array

// 2. Create a new array with the multiplication of 5
let multipliedArray = originalArray.map((num) => num * 5);

// 3. Find the maximum number of the new array
let maxNumber = multipliedArray.reduce((max, current) =>
  current > max ? current : max
);

// 4. List out the even numbers of both new and original arrays
let evenNumbersOriginal = originalArray.filter((num) => num % 2 === 0);
let evenNumbersMultiplied = multipliedArray.filter((num) => num % 2 === 0);

console.table({
  "Original Array:": originalArray,
  "Multiplied Array:": multipliedArray,
  "Maximum Number in Multiplied Array:": maxNumber,
  "Even Numbers in Original Array:": evenNumbersOriginal,
  "Even Numbers in Multiplied Array:": evenNumbersMultiplied,
});
