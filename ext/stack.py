from typing import List


class Stack:
    def __init__(self, max: int):
        self.st = []
        self.MAX = max

    def isEmpty(self):
        return len(self.st) == 0

    def isFull(self):
        return len(self.st) == self.MAX

    def stPush(self, x: int):
        if self.isFull():
            return
        self.st.append(x)

    def stPop(self):
        if self.isEmpty():
            return
        self.st.pop()


test = Stack(10)
test.stPush(1)
print(test.st)
test.stPush(100)
print(test.st)
test.stPop()
print(test.st)

# docker exec -it python3.10 python3 /var/www/php-py/algorithm//ext/stack.py
