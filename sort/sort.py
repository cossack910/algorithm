from typing import List


class Sort:
    def insertSort(self, a: List):
        n = len(a)
        for i in range(n):
            v = a[i]  # 挿入したい値

            j = i
            for j_ in reversed(range(0, j)):
                if a[j-1] > v:  # vより大きいものは１つ後ろに
                    a[j] = a[j-1]
                else:
                    break  # v以下になったら終了
                j -= 1
            a[j] = v

        return a


s = Sort()
SS = s.insertSort([4, 1, 3, 5, 2])
print(SS)
# docker exec -it python3.10 python3 /var/www/php-py/algorithm/sort/sort.py
