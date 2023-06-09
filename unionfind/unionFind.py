class UnionFind:
    def __init__(self, n: int):
        self.par = [-1 for _ in range(n)]
        self.siz = [1 for _ in range(n)]

    def root(self, x: int):
        if self.par[x] == -1:
            return x
        self.par[x] = self.root(self.par[x])
        return self.par[x]

    # 同じグループか
    def isSame(self, x: int, y: int):
        return self.root(x) == self.root(y)

    # xを含む含むグループと y を含むグループを合わせる
    def unite(self, x: int, y: int):
        # xとyそれぞれ同じ根まで移動する
        x = self.root(x)
        y = self.root(y)

        # おなじグループのとき何もしない
        if (x == y):
            return False

        # y側のサイズが小さくなるように
        if self.siz[x] < self.siz[y]:
            x, y = y, x

        self.par[y] = x
        self.siz[x] += self.siz[y]
        return True

# docker exec -it python3.10 python3 /var/www/php-py/algorithm/unionfind/unionFind.py
