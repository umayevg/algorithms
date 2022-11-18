import math

numbers = [8, 4, 56, 1, 410, 13, 25, 12, 8, 78, 4, 50]


def binary_search(arr: list, target: int):
    # if array contains 1 or 0 elements, we just return it.
    if len(arr) < 2:
        return arr

    # sorting array
    arr.sort()
    low = 0
    max = len(arr) - 1

    while low <= max:
        middle = math.floor((low + max) / 2)
        guess = arr[middle]

        if guess == target:
            return middle

        if guess > target:
            max = middle - 1
        else:
            low = middle + 1


print(len(numbers))
print(binary_search(numbers, 1))
print(binary_search(numbers, 13))
print(binary_search(numbers, 410))
