import threading
import time
 
class MyThread(threading.Thread):
 
    def __init__(self, thread_id, name):
        threading.Thread.__init__(self)
        self.thread_id = thread_id
        self.name = name
 
    def run(self):
        print("Starting {0}".format(self.name))
        time.sleep(0.1)
        self.do_stuff()
 
    def do_stuff(self):
        print("{0}: {1}".format(self.name, time.ctime(time.time())))
 
t0 = MyThread(0, "Thread-0")
t1 = MyThread(1, "Thread-1")
t0.start()
t1.start()
t0.join()
t1.join()
print("Exiting main thread")