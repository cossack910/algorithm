from typing import List


class Sort:
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

    def quickSort(self, left: int, right: int):
        if right - left <= 1:
            return

        pivot_index = (left + right) // 2  # pivot決定
        pivot = self.a[pivot_index]

        # pivotと右端をswap
        self.a[pivot_index], self.a[right -
                                    1] = self.a[right-1], self.a[pivot_index]

        i = left
        for j in range(left, right-1):
            if self.a[j] < pivot:
                self.a[i], self.a[j] = self.a[j], self.a[i]
                i += 1

        # pivotを間に挿入
        self.a[i], self.a[right-1] = self.a[right-1], self.a[i]

        self.quickSort(left, i)
        self.quickSort(i+1, right)

# docker exec -it python3.10 python3 /var/www/php-py/algorithm/sort/sort.py
