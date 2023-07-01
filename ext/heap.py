class Heap:
    def __init__(self, heap):
        self.heap = heap

    def hpPush(self, x: int):
        self.heap.append(x)
        i = len(self.heap) - 1  # 挿入された頂点番号
        while i > 0:
            p = (i-1) // 2
            if self.heap[p] >= x:
                break
            self.heap[i] = self.heap[p]  # 親を自分に挿入
            i = p
            self.heap[i] = x

    def hpPop(self):
        if len(self.heap) == 0:
            return
        x = self.heap[-1]
        self.heap = self.heap[:-1]
        i = 0
        while i * 2 + 1 < len(self.heap):
            child1 = i * 2 + 1
            child2 = i * 2 + 2

            if child2 < len(self.heap) and self.heap[child2] > self.heap[child1]:
                child1 = child2

            if self.heap[child1] <= x:
                break
            self.heap[i] = self.heap[child1]
            i = child1
        self.heap[i] = x


hp = [19, 12, 15, 10, 7, 6, 1, 3, 7, 5, 3, 2]
# pu_test = Heap(hp)
# pu_test.hpPush(17)
# print(pu_test.heap)

pop_test = Heap(hp)
pop_test.hpPop()
print(pop_test.heap)

# docker exec -it python3.10 python3 /var/www/php-py/algorithm/ext/heap.py
