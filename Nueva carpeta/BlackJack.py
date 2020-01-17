import random

def generarMazos(cant):
    mazo = []
    for i in range(0,cant,1):
        mazo.append(0)
        mazo[i] = [1,2,3,4,5,6,7,8,9,10,11,12,13]
        random.shuffle(mazo[i])
    return mazo

def jugar(mazo):
    cartas = []
    total = 0
    for j in range(0,100,1):
        while total < 21 and mazo[j] > 0:
            cartas.append(0)
            cartas[j] = mazo[j].pop(0)
            total += cartas[j]
            if len(mazo[j]) == 0:
                return 0
    return total

#def jugarVarios(self,mazo,jugadores):


    #def verQuienGano(resultados):
#
    #def experimentar(repetir,jugadores):

generarMazos(4)
jugar(generarMazos(4))