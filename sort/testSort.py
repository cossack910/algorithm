import pytest
from sort import InsertSort
from sort import MergeSort


def testInsertSort():
    arr = [4, 1, 3, 5, 2]
    s = InsertSort(arr)
    s.insertSort()
    assert s.a == sorted(arr)


def testMergeSort():
    arr = [12, 9, 15, 3, 8, 17, 6, 1]
    s = MergeSort(arr)
    s.mergeSort(0, len(arr))
    assert s.a == sorted(arr)

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/sort/testSort.py
