import threading

def nro():
    for n in range(0,30):
        print (n)

def letra():
    print ('a')
    print ('b')
    print ('c')
    print ('d')
    print ('e')
    print ('f')
    print ('g')
    print ('h')
    print ('i')
    print ('j')

Hilo1 = threading.Thread(target=nro)
Hilo2 = threading.Thread(target=letra)
Hilo1.start()
Hilo1.join()
Hilo2.start()
Hilo2.join()
    