const numbers = [8, 4, 56, 1, 410, 13, 25, 12, 8, 78, 4, 50]

function binarySearch(arr = [], target) {
  // Binary search works only with sorted data
  arr.sort((a, b) => a - b)

  let low = 0
  let max = arr.length - 1

  while (low <= max) {
    let middle = Math.floor((low + max) / 2)
    let guess = arr[middle]

    if (guess === target) return middle

    if (guess > target) {
      max = middle - 1
    } else {
      low = middle + 1
    }
  }
}

console.log(numbers.sort((a, b) => a - b))

console.log("index ", binarySearch(numbers, 1))
console.log("index ", binarySearch(numbers, 13))
console.log("index ", binarySearch(numbers, 8))
console.log("index ", binarySearch(numbers, 50))
