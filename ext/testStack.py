import pytest
from stack import Stack


def test_stack():
    stack = Stack(3)  # maxを3としてインスタンス生成

    # Test isEmpty method
    assert stack.isEmpty() is True  # スタックは初めてからなので、isEmptyはTrueを返す

    # Test stPush and isFull method
    stack.stPush(1)
    stack.stPush(2)
    stack.stPush(3)
    assert stack.isFull() is True  # 3つ要素を追加したので、isFullはTrueを返す
    assert stack.st == [1, 2, 3]  # pushの確認

    # Test stPop method
    stack.stPop()
    assert stack.st == [1, 2]  # 最後の要素がpopされ、スタックは[1,2]となる

    # Test isEmpty method after pop
    assert stack.isEmpty() is False  # 要素がまだあるので、isEmptyはFalseを返す

# docker exec -it python3.10 pytest /var/www/php-py/algorithm//ext/testStack.py
