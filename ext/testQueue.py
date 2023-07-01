import pytest
from queue import Queue


def test_queue():
    queue = Queue(3)  # maxを3としてインスタンス生成

    # Test isEmpty method
    assert queue.isEmpty() is True  # キューは初めてからなので、isEmptyはTrueを返す

    # Test enQueue and isFull method
    queue.enQueue(1)
    queue.enQueue(2)
    queue.enQueue(3)
    assert queue.isFull() is True  # 3つ要素を追加したので、isFullはTrueを返す
    assert queue.st == [1, 2, 3]  # enQueueの確認

    # Test deQueue method
    queue.deQueue()
    assert queue.st == [2, 3]  # 最初の要素がdeQueueされ、キューは[2,3]となる

    # Test isEmpty method after deQueue
    assert queue.isEmpty() is False  # 要素がまだあるので、isEmptyはFalseを返す

# docker exec -it python3.10 pytest /var/www/php-py/algorithm/ext/testQueue.py
