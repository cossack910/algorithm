class Queue:
    def __init__(self, max: int):
        self.st = []
        self.MAX = max

    def isEmpty(self):
        return len(self.st) == 0

    def isFull(self):
        return len(self.st) == self.MAX

    def enQueue(self, x: int):
        if self.isFull():
            return
        self.st.append(x)

    def deQueue(self):
        if self.isEmpty():
            return
        self.st = self.st[1:]


test = Queue(10)
test.enQueue(23)
test.enQueue(3)
test.enQueue(33)
test.enQueue(35)
test.enQueue(2232)
test.deQueue()
print(test.st)

# docker exec -it python3.10 python3 /var/www/php-py/algorithm//ext/queue.py
