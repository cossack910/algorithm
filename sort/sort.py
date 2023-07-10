import math
from typing import List


class InsertSort:
    def __init__(self, a: List):
        self.a = a

    def insertSort(self):
        n = len(self.a)
        for i in range(n):
            v = self.a[i]  # 挿入したい値

            j = i
            for j_ in reversed(range(0, j)):
                if self.a[j-1] > v:  # vより大きいものは１つ後ろに
                    self.a[j] = self.a[j-1]
                else:
                    break  # v以下になったら終了
                j -= 1
            self.a[j] = v


class MergeSort:
    def __init__(self, a: List):
        self.a = a

    def mergeSort(self, left: int, right: int):
        if right - left == 1:
            return
        mid = left + (right - left) // 2

        # 左半分ソート
        self.mergeSort(left, mid)
        # 右半分ソート
        self.mergeSort(mid, right)

        buf = []

        for i in range(left, mid):
            buf.append(self.a[i])

        for i in reversed(range(mid, right)):
            buf.append(self.a[i])

        index_left = 0
        index_right = len(buf) - 1
        for i in range(left, right):
            if buf[index_left] <= buf[index_right]:
                self.a[i] = buf[index_left]
                index_left += 1
            else:
                self.a[i] = buf[index_right]
                index_right -= 1
        print(self.a)


# docker exec -it python3.10 python3 /var/www/php-py/algorithm/sort/sort.py
