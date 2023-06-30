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
