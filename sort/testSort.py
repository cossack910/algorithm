import pytest
from sort import Sort


def testInsertSort():
    arr = [4, 1, 3, 5, 2]
    s = Sort(arr)
    s.insertSort()
    assert s.a == sorted(arr)


def testMergeSort():
    arr = [12, 9, 15, 3, 8, 17, 6, 1]
    s = Sort(arr)
    s.mergeSort(0, len(arr))
    assert s.a == sorted(arr)


def testQuickSort():
    arr = [10, 12, 15, 3, 8, 17, 4, 1]
    s = Sort(arr)
    s.quickSort(0, len(arr))
    assert s.a == sorted(arr)


def testHeapSort():
    arr = [23, 45, 7, 0, 55, 53, 675, 87]
    s = Sort(arr)
    s.heapSort()
    assert s.a == sorted(arr)

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/sort/testSort.py
