import pytest
from sort import InsertSort


def testInsertSort():
    s = InsertSort()
    SS = s.insertSort([4, 1, 3, 5, 2])
    assert SS == [1, 2, 3, 4, 5]

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/sort/testSort.py
