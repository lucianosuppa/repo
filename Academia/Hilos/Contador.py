import threading
import time

class Contador(threading.Thread):

    def __init__(self,contar,limite,hilo):
        super().__init__()
        self.contar = contar
        self.limite = limite
        self.hilo = hilo

    def run(self):
        for j in range(self.contar,self.limite):
            j += self.contar
            print (j)
        time.sleep(5.0)

hilo1 = Contador(0,10,1)
hilo1.start()
hilo2 = Contador(5,20,2)
hilo2.start()
hilo2.join()