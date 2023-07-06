import pytest
from unionFind import UnionFind


def testUnte1():
    uf = UnionFind(7)
    uf.unite(1, 2)
    uf.unite(2, 3)
    uf.unite(5, 6)
    assert uf.isSame(1, 3) == True


def testUnte2():
    uf = UnionFind(7)
    uf.unite(1, 2)
    uf.unite(2, 3)
    uf.unite(5, 6)
    assert uf.isSame(2, 5) == False


def testUnte3():
    uf = UnionFind(7)
    uf.unite(1, 2)
    uf.unite(2, 3)
    uf.unite(5, 6)
    uf.unite(1, 6)
    assert uf.isSame(2, 5) == True

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/unionfind/testUnionFind.py
