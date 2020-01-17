import threading
import time
import random

class Carrera(threading.Thread):
    def __init__(self,metros,cantCaballos):
        super().__init__()
        self.metros = metros
        self.cantCaballos = cantCaballos
        self.nombreCaballos = []
        self.metrosRecorridos = []

    def nomb(self):
        i = 0
        while i <= self.cantCaballos:
            self.nombreCaballos.append(i)
            self.metrosRecorridos.append(0)
            i+=1
        print (self.nombreCaballos)

    #def run(self):
     #       for n in self.nombreCaballos:
      #          while (self.metrosRecorridos[n] < 100)
       #             self.metrosRecorridos[n] += random.randrange(15)
        #        print('gano el caballo')

play = Carrera(100,4)
play.start()
play.join()