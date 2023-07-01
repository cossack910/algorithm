import pytest
from heap import Heap


def test_heapPush():
    hp = [19, 12, 15, 10, 7, 6, 1, 3, 7, 5, 3, 2]
    heap = Heap(hp)
    heap.hpPush(17)
    assert heap.heap == [19, 12, 17, 10, 7, 15, 1, 3, 7, 5, 3, 2, 6]


def test_heapPop():
    hp = [19, 12, 15, 10, 7, 6, 1, 3, 7, 5, 3, 2]
    heap = Heap(hp)
    heap.hpPop()
    assert heap.heap == [15, 12, 6, 10, 7, 2, 1, 3, 7, 5, 3]

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/ext/testHeap.py
